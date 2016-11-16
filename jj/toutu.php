<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"马大哈";
$im = imagecreatetruecolor(640, 360);
$bg = imagecreatefromjpeg('jj.jpg');
imagecopy($im,$bg,0,0,0,0,640,360);
imagedestroy($bg);
$black = imagecolorallocate($im, 20, 20, 20);
$text = $name;
$font = '../font/gb.ttf';
imagettftext($im, 16, 0, 480, 283, $black, $font, $text);


$showtime=date("Y  m  d");
imagettftext($im, 18, 0, 255, 96, $black, $font, $showtime);

imagejpeg($im);
imagedestroy($im);
?>