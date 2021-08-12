<?php
$date = date("Y-m-d");
$path = "profiles/$date/";
$date = date("Y-m-d");
$zipcreated = "archives/$date.zip";

$zip = new ZipArchive;

if ($zip->open($zipcreated, ZipArchive::CREATE) === TRUE) {
    $dir = opendir($path);
    while ($file = readdir($dir)) {
        if (is_file($path . $file)) {
            $zip->addFile($path . $file, $path . $file);
        }
    }
    $zip->close();
    echo "Zip Created";
}
