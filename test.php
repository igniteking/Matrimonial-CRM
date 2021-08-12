<?php

$url =
    'https://localhost/matrimonial-CRM/upload_certificate.php?name=asdasdsad%20asdasdasd&&job=asdasdasd&&parent=asdasdas&&requirements=sadasdasd&&dob=&&tob=---&&pob=Rohan&&mobile=8107296654&&zodiac_sign=Aries&&city=dasdasd&&district=sadasd&&state=Andaman%20and%20Nicobar%20Islands&&height=6%27%2011&&picture=userdata/k7DSgylW1xsOhtQ/61150207cbacb.jpg';

$img = 'logo.jpg';

// Function to write image into file
file_put_contents($img, file_get_contents($url));

echo "File downloaded!";
