<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['carId']);
session_destroy();
header("Location: admin.php");