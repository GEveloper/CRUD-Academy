<?php
include "connection.php";
$sql = "DELETE FROM teaches WHERE id = " . $_GET["id"];
mysqli_query($link, $sql);
header('Location: teaching.php');
