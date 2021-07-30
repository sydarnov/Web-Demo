<!DOCTYPE html>
<html>

<head>
<title>Form site</title>
</head>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.buttn {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 17%;
}
.Rbuttn {
 background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
  
}


</style>


<body>



<div class="topnav">


  <a class="active" href="Log in.php">Log in</a>
  <a href="contact.php">Contact</a>
  <a href="promotions.php">Promotions</a>
  <a href="index.php">Home</a>
  <img  src="adi.png" width="70" height="34.5" >


</div>



<form method="post" action="connect.php">
<h1> <img src="adi.png" alt="Snow" style="width:15%;"> E-comm  </h1>

<h1> Admin Panel </h>
<h1  style="color:blue" > Announcement Board </h1>

<textarea  name="notice"   placeholder="Leave your Message here..." style="width: 320px; height: 200px;" ></textarea><br/>


<input class = "buttn" type="submit" value="Submit"> <br>

<?php

include 'conn.php'

?>

<input class = "Rbuttn"  type="reset" onclick="window.location.href='delete.php'" value="Manage Announcement" />





</form>
</body>
</html>