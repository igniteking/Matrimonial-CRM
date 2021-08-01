<script src="https://kit.fontawesome.com/318618787a.js" crossorigin="anonymous"></script>
<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "matrimonial";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die;
session_start();
if (isset($_SESSION['admin_name'])) {
    $user = $_SESSION["admin_name"];
    $admin_id = $_SESSION["id"];
} else {
    $user = "No User";
}
