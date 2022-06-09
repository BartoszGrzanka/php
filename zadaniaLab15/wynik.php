<?php
session_start();
//var_dump($_SESSION['random'][0]);

//var_dump($_POST["$post"]);
$points=0;
$howMuchQuestions = count($_SESSION);
for($i=0;$i<$howMuchQuestions;$i++){
    $post=$_SESSION['random'][$i];

    $points+= intval($_POST["$post"]);
}
echo $points;