<?php
include "connection.php";
$sql = "DELETE FROM lecturers WHERE id = " . $_GET["id"];
mysqli_query($link, $sql);
header('Location: lecturers.php');
