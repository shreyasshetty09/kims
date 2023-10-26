<?php
// $servername = "localhost";
// $username = "schoolphins";
// $password = "chandu@123";
// $dbname = "db_lkv_schoolphins_v1";

// $servername = "localhost";
// $username = "root";
// $password = "";
//  $dbname = "loyola_kendriya_vidyalaya_school";

 $servername = "192.168.0.100";
$username = "root";
$password = "";
 $dbname = "sjicpuc";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>