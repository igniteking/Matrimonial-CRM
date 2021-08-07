<?php
header("Content-Type: image/jpeg");

$img_path = "img/certificate.jpeg";
$font_path = realpath("fonts/font.ttf");

$jpg_img = imagecreatefromjpeg($img_path);

$text = @$_GET['user'];
$font_color = imagecolorallocate($jpg_img, 0, 0, 0);
$font_color2 = imagecolorallocate($jpg_img, 255, 0, 0);

$photo_to_paste = "test.png";
$condicion = GetImageSize($photo_to_paste); // image format?
if ($condicion[2] == 1) //gif
    $im2 = imagecreatefromgif("$photo_to_paste");
if ($condicion[2] == 2) //jpg
    $im2 = imagecreatefromjpeg("$photo_to_paste");
if ($condicion[2] == 3) //png
    $im2 = imagecreatefrompng("$photo_to_paste");

imagecopy($jpg_img, $im2, (imagesx($jpg_img) / 5) - (imagesx($im2) / 2), (imagesy($jpg_img) / 10) - (imagesy($im2) / 5), 0, 0, imagesx($im2), imagesy($im2));


imagettftext($jpg_img, 15, 0, 300, 300, $font_color, $font_path, "City Location");
imagettftext($jpg_img, 15, 0, 300, 325, $font_color, $font_path, "Address 1");

imagettftext($jpg_img, 15, 0, 230, 200, $font_color, $font_path, "Height");
imagettftext($jpg_img, 15, 0, 230, 230, $font_color, $font_path, "6'0 ft");

imagettftext($jpg_img, 14, 0, 40, 418, $font_color, $font_path, "+91 8107296654");
imagettftext($jpg_img, 14, 0, 40, 458, $font_color, $font_path, "2000-28-08, 07:00 AM Delhi");
imagettftext($jpg_img, 14, 0, 40, 498, $font_color, $font_path, "Text Here");
imagettftext($jpg_img, 16, 0, 20, 540, $font_color, $font_path, "Profile Description Here!");
imagettftext($jpg_img, 16, 0, 20, 570, $font_color, $font_path, "Name Father . Occupation");
imagettftext($jpg_img, 16, 0, 20, 600, $font_color, $font_path, "Name Mother . Occupation");
imagettftext($jpg_img, 16, 0, 20, 630, $font_color, $font_path, "Additional Information");
imagettftext($jpg_img, 30, 0, 20, 780, $font_color2, $font_path, "Veekshith");
imagettftext($jpg_img, 15, 0, 20, 810, $font_color, $font_path, "Web Developer");
imagejpeg($jpg_img);
imagejpeg($jpg_img);
