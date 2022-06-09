<?php
session_start();
if (isset($_POST['submit'])){
//var_dump($_SESSION['random'][0]);

    $dbuser = 's24953';
    $dbpass = 'Bar.Grza';
//$dbpass='';
//$dbuser='root';
    $db = new PDO("mysql:host=localhost;dbname=s24953", $dbuser,$dbpass) or die ("Wywaliłem sie");
//var_dump($_POST["$post"]);
$points=0;
$howMuchQuestions = count($_SESSION);
//var_dump($_SESSION);
for($i=0;$i<$howMuchQuestions;$i++){
    $post=$_SESSION['random'][$i];
    //var_dump($_POST["$post"]);
    $sql="SELECT * FROM odpowiedzi where id =".intval($_POST["$post"]);
    $query=$db->query($sql);
    $result=$query->fetch(PDO::FETCH_NUM);
    //var_dump($result);
    if(intval($result[2])==1){
        $points+=1;
    }
    else{
        $points=$points;
    }
    //break;
}




    $sqlAdd="INSERT INTO wyniki(nazwisko, punkty, date) VALUES (\""
        .$_POST['nazwisko'] . "\" , "
        .$points . " , \" "
        .date("Y/m/d")." \")";
    $queryadd=$db->query($sqlAdd);


    echo $_POST['nazwisko'] .": <br>";
    echo "Punktów: " . $points;


    ession_destroy();
}
