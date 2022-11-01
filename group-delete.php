<?php
include "connection.php";
$sql = "DELETE FROM groups WHERE id = " . $_GET["id"];
mysqli_query($link, $sql);
header('Location: groups.php');
