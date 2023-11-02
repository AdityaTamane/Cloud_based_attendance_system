<?php
$server = "localhost:3306";
$username = "root";
$password = "";
$database = "attendance_system";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    die("error".mysqli_connect_error());
}
?>