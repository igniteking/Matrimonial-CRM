<?php include_once("connection/db.php"); ?>
<?php
/*
* iTech Empires:  Export Data from MySQL to CSV Script
* Version: 1.0.0
* Page: Export
*/
// Database Connection
// get Users
$query = "SELECT * FROM users";
if (!$result = mysqli_query($conn, $query)) {
    exit(mysqli_error($conn));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Users.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array(`Id`, `Name`, `Surname`, `Sex`, `Language`, `Caste`, `Sub Caste`, `Gothram`, `Zodiac Sign`, `Star`, `Date Of Birth`, `Place Of Birth`, `Time Of Birth`, `City`, `District`, `State`, `Height`,
 `Color`, `Eating Habits`, `Bad Habbits`, `Education`, `Job`, `Job Location`, `NRI`, `Annual Income`, `Parents Details`,
  `Requirements`, `Whatsapp Number`, `Phone Number`, `Profile Pic`, `Status`));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>