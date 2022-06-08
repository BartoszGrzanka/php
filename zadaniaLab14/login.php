<?php
session_start();
//$dbuser = 's24953';
//$dbpass = 'Bar.Grza';
$dbpass='';
$dbuser='root';
$db = new PDO("mysql:host=localhost;dbname=s24953", $dbuser,$dbpass) or die ("Wywaliłem sie");

if (isset($_POST['submit'])) {
    //echo $_POST['login'].$_POST['password'];
    $sql='SELECT * FROM uzytkownicy where login="'.$_POST['login'].'" and haslo="'.$_POST['password'].'"';
    $query=$db->query($sql);
    $query->execute();
    $result= $query->fetch(PDO::FETCH_OBJ);
    //var_dump($query->rowCount());
    //echo $query->rowCount();
    if(!empty($result)){
        $_SESSION['user']=$result->id;
        //echo $result->id;
        header("Location:main.php");
    }
    else{
        echo "LoginError";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form action="login.php" method="post">
    <input type="text" name="login" required>
    <br>
    <input type="password" name="password" required>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>