<?php
if(isset($_GET['submit'])){
    $file = fopen("book", 'a+')or die ("file not here");
    fwrite($file,$_GET['text']."\n");
    fclose($file);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pisz ksionszke</title>
</head>
<body>
<form action="index.php" method="get">
    <label for="text">Dawej texta:</label><br>
    <input type="text" name="text" required><br>

    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>