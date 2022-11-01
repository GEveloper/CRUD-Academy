<?php

// Variables
$hostname = "localhost";
$username = "root";
$password = "";
$database = "university";

// Create connection
$link = mysqli_connect($hostname, $username, $password);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS " . $database;

if (mysqli_query($link, $sql)) {
    echo "Database " . $database . " created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($link);
}
