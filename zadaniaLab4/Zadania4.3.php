<?php
session_start();

$login ="asd";
$password="zxc";

echo '<form action="Zadanie4.3.php" method="get">
  <label for="login">login:</label><br>
  <input type="text" name="login" required><br>
  <label for="paswd">hasło:</label><br>
  <input type="password" name="paswd" required><br>
  <input type="submit" name="submit" value="Submit">
  </form>';