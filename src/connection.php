<?php

// Variables
$hostname = "localhost";
$username = "root";
$password = "";
$database = "university";

// Create connection
$link = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
