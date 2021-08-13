<?php
include "config.php";
$filename = 'Users'.time().'.csv';

// POST values
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];

// Select query
$query = "SELECT * FROM users ORDER BY id asc";

if(isset($_POST['from_date']) && isset($_POST['to_date'])){
	$query = "SELECT * FROM users where date between '".$from_date."' and '".$to_date."' ORDER BY id asc";
}

$result = mysqli_query($conn,$query);
$employee_arr = array();

// file creation
$file = fopen($filename,"w");

// Header row - Remove this code if you don't want a header row in the export file.
$employee_arr = array("id","Name","surname","email","Gender","language","caste",
"sub_caste","gothram","zodiac_sign","star","dob","pob","tob","city","district","state","height","color","eating_habits","bad_habbits",
"education","job","job_location","nri","annual_income","parents_details","requirements","whatsapp_number","whatsapp_number","phone_number","status"); 
fputcsv($file,$employee_arr);   
while($rows = mysqli_fetch_assoc($result)){
    $id = $rows['id'];
    $name = $rows['name'];
    $surname = $rows['surname'];
    $email = $rows['email'];
    $sex = $rows['sex'];
    $language = $rows['language'];
    $caste = $rows['caste'];
    $sub_caste = $rows['sub_caste'];
    $gothram = $rows['gothram'];
    $zodiac_sign = $rows['zodiac_sign'];
    $star = $rows['star'];
    $dob = $rows['dob'];
    $pob = $rows['pob'];
    $tob = $rows['tob'];
    $city = $rows['city'];
    $district = $rows['district'];
    $state = $rows['state'];
    $height = $rows['height'];
    $color = $rows['color'];
    $eating_habits = $rows['eating_habits'];
    $bad_habbits = $rows['bad_habbits'];
    $education = $rows['education'];
    $job = $rows['job'];
    $job_location = $rows['job_location'];
    $nri = $rows['nri'];
    $annual_income = $rows['annual_income'];
    $parents_details = $rows['parents_details'];
    $requirements = $rows['requirements'];
    $whatsapp_number = $rows['whatsapp_number'];
    $phone_number = $rows['phone_number'];
    $profile_pic = $rows['profile_pic'];
    $status = $rows['status'];

    // Write to file 
    $employee_arr = array($id,$name,$surname,$email,$sex,$language,$caste,
    $sub_caste,$gothram,$zodiac_sign,$star,$dob,$pob,$tob,$city,$district,$state,$height,$color,$eating_habits,$bad_habbits,
    $whatsapp_number,$phone_number,$profile_pic,$status);
    fputcsv($file,$employee_arr);   
}

fclose($file); 

// download
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/csv; "); 

readfile($filename);

// deleting file
unlink($filename);
exit();
