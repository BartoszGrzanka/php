<?php
$imgDir="img";
$dir = scandir($imgDir);
array_shift($dir);
array_shift($dir);

/*Robi polske*/
$img=imagecreatetruecolor(400, 300);
//imagecolorallocate($img,czerwony,zielony,niebieski);
$red=imagecolorallocate($img,255,0,0);
$white=imagecolorallocate($img,255,255,255);

imagefill($img,0,0,$red);
imagefilledrectangle($img, 0, 0, 400, 150, $white);
imagejpeg($img,"img/0.jpg");
imagedestroy($img);

/*Robi Francja*/
$img=imagecreatetruecolor(600, 300);
//imagecolorallocate($img,czerwony,zielony,niebieski);
$red=imagecolorallocate($img,255,0,0);
$white=imagecolorallocate($img,255,255,255);
$blue=imagecolorallocate($img,0,0,255);

imagefill($img,0,0,$red);
imagefilledrectangle($img, 201, 0, 400, 300, $white);
imagefilledrectangle($img, 0, 0, 200, 300, $blue);
imagejpeg($img,"img/1.jpg");
imagedestroy($img);

/*Robi Szwecja*/
$img=imagecreatetruecolor(600, 300);
//imagecolorallocate($img,czerwony,zielony,niebieski);
$yellow=imagecolorallocate($img,255,211,0);
$blue=imagecolorallocate($img,0,0,255);

imagefill($img,0,0,$blue);
//$pos=array(50,0,70,0,70,70,600,70,600,90,70,90,70,300,50,300,50,90,0,90,0,70,50,70);
imagefilledrectangle($img, 100, 0, 140, 300, $yellow);
imagefilledrectangle($img, 0, 100, 600, 140, $yellow);
imagejpeg($img,"img/2.jpg");
imagedestroy($img);



/*Robi Szwecja*/
$img=imagecreatetruecolor(600, 300);
//imagecolorallocate($img,czerwony,zielony,niebieski);
$red=imagecolorallocate($img,255,0,0);
$white=imagecolorallocate($img,255,255,255);
$blue=imagecolorallocate($img,0,0,255);

imagefill($img,0,0,$red);
imagefilledrectangle($img, 100, 0, 160, 300, $white);
imagefilledrectangle($img, 0, 100, 600, 160, $white);
imagefilledrectangle($img, 110, 0, 150, 300, $blue);
imagefilledrectangle($img, 0, 110, 600, 150, $blue);
imagejpeg($img,"img/3.jpg");
imagedestroy($img);







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: black;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria</title>
</head>
<body>
<?php
foreach ($dir as $a){
    echo "<img src=\"$imgDir/$a\" alt=\"$a\">";
}
?>
</body>
</html>

