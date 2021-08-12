<?php
header("Content-Type: image/jpeg");

$img_path = "img/certificate.jpeg";
$font_path = realpath("fonts/font.ttf");

$jpg_img = imagecreatefromjpeg($img_path);

$text = @$_GET['user'];
$first_name = @$_GET['name'];
$job = @$_GET['job'];
$parents_details = @$_GET['parents'];
$requirements = @$_GET['requirements'];
$mobile = @$_GET['mobile'];
$dob = @$_GET['dob'];
$tob = @$_GET['tob'];
$pob = @$_GET['pob'];
$city = @$_GET['city'];
$district = @$_GET['district'];
$state = @$_GET['state'];
$height = @$_GET['height'];
$picture = @$_GET['picture'];

$location = $city . " " . $district;
$zodiac_sign = @$_GET['zodiac_sign'];
$font_color = imagecolorallocate($jpg_img, 0, 0, 0);
$font_color2 = imagecolorallocate($jpg_img, 255, 0, 0);

$photo_to_paste = $picture;
$percent = "0";
list($width, $height) = getimagesize($picture);
$newwidth = $width * $percent;
$newheight = $height * $percent;
$condicion = GetImageSize($photo_to_paste); // image format?
if ($condicion[2] == 1) //gif
    $im2 = imagecreatefromgif("$photo_to_paste");
if ($condicion[2] == 2) //jpg
    $im2 = imagecreatefromjpeg("$photo_to_paste");
if ($condicion[2] == 3) //png
    $im2 = imagecreatefrompng("$photo_to_paste");

imagecopy($jpg_img, $im2, (imagesx($jpg_img) / 5) - (imagesx($im2) / 2), (imagesy($jpg_img) / 10) - (imagesy($im2) / 5), 0, 0, imagesx($im2), imagesy($im2));


imagettftext($jpg_img, 15, 0, 300, 300, $font_color, $font_path, $location);
imagettftext($jpg_img, 15, 0, 300, 325, $font_color, $font_path, $state);

imagettftext($jpg_img, 15, 0, 230, 200, $font_color, $font_path, "Height");
imagettftext($jpg_img, 15, 0, 230, 230, $font_color, $font_path, $height);

imagettftext($jpg_img, 14, 0, 40, 418, $font_color, $font_path, $mobile);
imagettftext($jpg_img, 14, 0, 40, 458, $font_color, $font_path, $dob . " " . $tob . " " . $pob);
imagettftext($jpg_img, 14, 0, 40, 498, $font_color, $font_path, $zodiac_sign);
imagettftext($jpg_img, 16, 0, 20, 600, $font_color, $font_path, $parents_details);
imagettftext($jpg_img, 16, 0, 20, 630, $font_color, $font_path, $requirements);
imagettftext($jpg_img, 30, 0, 20, 780, $font_color2, $font_path, $first_name);
imagettftext($jpg_img, 15, 0, 20, 810, $font_color, $font_path, $job);
imagejpeg($jpg_img);
imagejpeg($jpg_img);
