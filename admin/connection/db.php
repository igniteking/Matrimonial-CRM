<?php
session_start();
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "matrimonial";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die;
if (isset($_SESSION['admin_name'])) {
    $admin = $_SESSION["admin_name"];
    $admin_id = $_SESSION["id"];
} else {
    $admin = "No User";
}
?>
<script src="https://kit.fontawesome.com/318618787a.js" crossorigin="anonymous"></script>
