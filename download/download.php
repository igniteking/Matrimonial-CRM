<?php
include_once("connection/db.php");
$filename = 'Users'.time().'.csv';

// POST values
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];

// Select query
$query = "SELECT * FROM users ORDER BY id asc";

if(isset($_POST['from_date']) && isset($_POST['to_date'])){
	$query = "SELECT * FROM users where date_of_joining between '".$from_date."' and '".$to_date."' ORDER BY id asc";
}

$result = mysqli_query($con,$query);
$users = array();

// file creation
$file = fopen($filename,"w");

// Header row - Remove this code if you don't want a header row in the export file.
$users = array("id","Employee Name","Salary","Gender","City","Email","Date of Joining"); 
fputcsv($file,$users_arr);   
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $emp_name = $row['emp_name'];
    $salary = $row['salary'];
    $gender = $row['gender'];
    $city = $row['city'];
    $email = $row['email'];
    $date_of_joining = $row['date_of_joining'];

    // Write to file 
    $users_arr = array($id,$emp_name,$salary,$gender,$city,$email,$date_of_joining);
    fputcsv($file,$users_arr);   
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
