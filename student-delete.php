<?php
include "connection.php";
$sql = "DELETE FROM students WHERE id = " . $_GET["id"];
mysqli_query($link, $sql);
header('Location: students.php');
