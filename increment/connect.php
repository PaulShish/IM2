<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "increment_db";

$conn = new mysqli($server, $user, $password, $dbname);
if($conn->connect_error){
    echo "$conn->connect_error";
    die('Connection Failed :' . $conn->connect_error);
}
?>