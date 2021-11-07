<?php

$host = "localhost"; /* Host name */
$user = "ujreqity6nrzd"; /* User */
$password = "*3d#5kc^5t]%"; /* Password */
$dbname = "dbwjcfizozwqac"; /* Database name */

$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}