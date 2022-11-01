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

mysqli_select_db($link, $database);

// Create table students
$sql = "CREATE TABLE IF NOT EXISTS `students` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `studnum` int(11) NOT NULL,
    `fullname` text NOT NULL,
    `gender` text NOT NULL,
    `group_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4";

if (mysqli_query($link, $sql)) {
    echo "students table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($link);
}

// Create table lecturers
$sql = "CREATE TABLE IF NOT EXISTS `lecturers` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `fullname` text NOT NULL,
    `gender` text NOT NULL,
    `degree` text NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4";

if (mysqli_query($link, $sql)) {
    echo "lecturers table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($link);
}

// Create table groups
$sql = "CREATE TABLE IF NOT EXISTS `groups` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` text NOT NULL,
    `department` text NOT NULL,
    `year` int(11) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4";

if (mysqli_query($link, $sql)) {
    echo "groups table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($link);
}

// Create table teaches
$sql = "CREATE TABLE IF NOT EXISTS `teaches` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `lecturer_id` int(11) NOT NULL,
    `group_id` int(11) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4";

if (mysqli_query($link, $sql)) {
    echo "teaches table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
