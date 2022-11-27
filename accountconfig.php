<?php

$host = "localhost";
$dbname = "user_db";
$username = "root";
$password = "";

$aConn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);

if(mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

?>