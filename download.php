<?php
// Database Details
$host = "localhost";
$dbusername = "root";
$dbpassword = "2438";
$dbname = "ISL";
$search = $_POST['search-bar'];
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

// Check Connection
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

//Converting Passed String to Lowercase
$search = strtolower($search);

// Creating Search Query
$query = "SELECT * FROM `ISL Convertor` WHERE `Name` = '$search'";
$result = $conn->query($query);
$row = $result->fetch_row();

header("Content-Type: image/jpeg");
header('Content-Disposition: attachment; filename="'.$search.'"');

echo $row[1];
exit();
               




?>