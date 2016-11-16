<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"马大哈";
$im = imagecreatetruecolor(720, 978);
$bg = imagecreatefromjpeg('tqd.jpg');
imagecopy($im,$bg,0,0,0,0,720,978);
imagedestroy($bg);
$black = imagecolorallocate($im, 20, 20, 20);
$text = $name;
$font = '../font/msyh.ttf';
imagettftext($im, 10, 0, 355, 415, $black, $font, $text);
$showtime=date("Y-m-d");
imagettftext($im, 10, -1, 330, 656, $black, $font, $showtime);



imagejpeg($im);
imagedestroy($im);
?>