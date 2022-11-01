<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Application</title>
    <style>
        body {
            margin: 0;
        }
        nav {
            background: gray;
            text-align: center;
        }
        nav a {
            background: #13d68b;
            padding: 20px;
            text-decoration: none;
            color: white;
            border-radius: 10px;
            display: inline-block;
            margin: 20px;
        }
        nav + a {
            background: #8cd0eb;
            padding: 20px;
            display: inline-block;
            text-decoration: none;
        }
        table {
            border: 2px solid black;
            width: 100%;
        }
        table tr {
            border: none;
        }
        table td {
            padding: 20px;
        }
        table a {
            text-decoration: none;
        }
        table th {
            padding: 20px;
            background: #fbc438;
        }
        form {
            padding: 50px;
        }
        form input {
            padding: 5px;
            margin: 10px 0;
        }
        form select {
            padding: 5px;
            margin: 10px 0;
        }
        form input[type="submit"] {
            background: blue;
            padding: 20px;
            color: white;
        }
    </style>
</head>
<body>
