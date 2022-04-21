<?php

$id=$_GET['id'];
$imgDir="img";
$dir = scandir($imgDir);
array_shift($dir);
array_shift($dir);
$imgName=$dir["$id"];
echo "<img src=\"$imgDir/$imgName\" alt=\"$imgName\"><br>";
$count = count($dir);

if($id<0 || $id>=$count || !is_numeric($id)){
    $imgId=0;
}

$imgName=$dir["$id"];
$first=0;
$last = $count-1;
if($id<$count-1){
    $next=$id+1;
}
else{
    $next = $count-1;
}
if($id>0){
    $prev = $id-1;
}
else{
    $prev = 0;
}

?>
<a href="index.php"><button>Powrót</button></a>
<?php
echo '<a href="Zadanie7.2.php?id='.$prev.'"><button>Poprzednie</button></a>';
echo '<a href="Zadanie7.2.php?id='.$next.'"><button>Następne</button></a>';
?>
