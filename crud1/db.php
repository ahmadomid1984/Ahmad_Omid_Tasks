<?php
$servername = "db";
$username = "OmidApp";
$password = "baran2011";
$dbname = "OmidApp";

// creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);

// check the connection
if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
?>
