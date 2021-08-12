<!-- jQuery UI CSS -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<!-- jQuery --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- jQuery UI JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<?php include_once("../admin/connection/db.php"); ?>


<?php
$filename = 'employee_'.time().'.csv';

// POST values
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];

// Select query
$query = "SELECT * FROM employee ORDER BY id asc";

if(isset($_POST['from_date']) && isset($_POST['to_date'])){
   $query = "SELECT * FROM employee where date_of_joining between '".$from_date."' and '".$to_date."' ORDER BY id asc";
}

$result = mysqli_query($con,$query);
$employee_arr = array();

// file creation
$file = fopen($filename,"w");

// Header row - Remove this code if you don't want a header row in the export file.
$employee_arr = array("id","Employee Name","Salary","Gender","City","Email","Date of Joining"); 

while($row = mysqli_fetch_assoc($result)){
   $id = $row['id'];
   $emp_name = $row['emp_name'];
   $salary = $row['salary'];
   $gender = $row['gender'];
   $city = $row['city'];
   $email = $row['email'];
   $date_of_joining = $row['date_of_joining'];

   // Write to file 
   $employee_arr = array($id,$emp_name,$salary,$gender,$city,$email,$date_of_joining);
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
exit();?>
<script>
$(document).ready(function(){

    // From datepicker
    $("#from_date").datepicker({ 
       dateFormat: 'yy-mm-dd',
       changeYear: true,
       onSelect: function (selected) {
          var dt = new Date(selected);
          dt.setDate(dt.getDate() + 1);
          $("#to_date").datepicker("option", "minDate", dt);
       }
    });
 
    // To datepicker
    $("#to_date").datepicker({
       dateFormat: 'yy-mm-dd',
       changeYear: true,
       onSelect: function (selected) {
          var dt = new Date(selected);
          dt.setDate(dt.getDate() - 1);
          $("#from_date").datepicker("option", "maxDate", dt);
       }
    });
 });</script>