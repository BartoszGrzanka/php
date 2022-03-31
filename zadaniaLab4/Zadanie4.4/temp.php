<?php
$cookie_name = "vote";
$cookie_value = "done";
if(isset($_POST['submit'])){
    setcookie($cookie_name, $cookie_value, time() + 100, "/"); // 86400 = 1 day
}?>
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
<script>
    function goBack() {
        window.location.href = 'Zadanie4.4.php';
    }
</script>
<h2>Dzięki za oddanie głosu</h2>
<button onclick="goBack()">Powrót</button>
</body>
</html>
