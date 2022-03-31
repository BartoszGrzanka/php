<?php
$cookie_name = "vote";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login tutorial</title>
</head>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo '<h1>SONDA ULICZNA</h1>
        <form action="temp.php" method="post">
        <p>Wybierz swój wiek:</p>
        <input type="radio" id="age1" name="age" value="30">
        <label for="age1">0 - 30</label><br>
        <input type="radio" id="age2" name="age" value="60">
        <label for="age2">31 - 60</label><br>  
        <input type="radio" id="age3" name="age" value="100">
        <label for="age3">61 - 100</label><br><br>

        <p>Czy 2+2 to 4</p>
        <input type="radio" id="math1" name="math" value="1">
        <label for="math1">Tak</label><br>
        <input type="radio" id="math2" name="math" value="0">
        <label for="math2">Nie</label><br>
        <input type="radio" id="math3" name="math" value="0">
        <label for="math3">Nie wiem</label><br><br>
        
        <p>Więcej niż jedno zwierze to</p>
        <input type="radio" id="animal1" name="animal" value="0">
        <label for="math1">Owca</label><br>
        <input type="radio" id="animal2" name="animal" value="1">
        <label for="math2">Stado</label><br>
        <input type="radio" id="animal3" name="animal" value="0">
        <label for="math3">Nie wiem</label><br><br>
        
        <p>Czy popierasz pokojowe działania Putina</p>
        <input type="radio" id="put1" name="put" value="1" disabled>
        <label for="put1">Tak</label><br>
        <input type="radio" id="put2" name="put" value="0" required>
        <label for="put2">Nie</label><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>';
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Już głosowałeś ";
}
?>

</body>
</html>