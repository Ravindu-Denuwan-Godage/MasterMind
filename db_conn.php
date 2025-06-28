<?php

// DB connection parameters
$dbServer = "localhost";
$dbUser = "root";
$dbPass = "";
$database = "mastermind";

// Connect
$conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

if (!$conn) {
	echo "Connection failed!";
}
