<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "LastPHP";

$con = new mysqli($servername, $username, $password, $database);


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
