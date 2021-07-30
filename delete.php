<!DOCTYPE html>
<html>
<head>
<title>delete</title>
</head>
<body>
<form method="post" action="">


<h1  style="color:blue" > All Announcements  </h1>

<?php 
  include 'conn.php';
  echo "</br>"
  ?> 


<h3  style="color:red" > Put ID number which one you want to delete   </h3>

ID : <input type="text" name="ID"><br><br>

<input style="background:red" type="submit" value="Delete">

<input  type="reset" onclick="window.location.href='announcements.php'" value="Go Back" />


<?php

$ID = filter_input(INPUT_POST, 'ID');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xtitan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM announcement WHERE ID = '$ID' ";
if ($conn->query($sql) === TRUE) {
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 