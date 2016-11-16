<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"马大哈";
$im = imagecreatetruecolor(580, 742);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,580,742);
imagedestroy($bg);
$black = imagecolorallocate($im, 131, 117, 108);
$text = $name;
$font = '../font/msyh.ttf';
imagettftext($im, 20, 0, 214, 195, $black, $font, $text);


imagejpeg($im);
imagedestroy($im);
?>