<!DOCTYPE html>
<html>
<head>

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

.hrC {
  background-color: gray; 
  height: 3px; 
  border: 0; 
}


.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.content {
  max-width: 1150px;
  margin: auto;
  background: white;
  padding: 10px;
}

.container {
  position: relative;
  text-align: center;
  color: white;
}

.fot{
  position: relative;
  text-align: center;
}

.Tcenter {
  margin-left: auto; 
  margin-right: auto;
}

.mid{
    text-align: center;
    
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 60px;
}

th, td {
  padding: 10px;
}

.thc{
  padding: 10px;
  border: 1px solid black;
}

</style>
</head>




<body>

<div class="topnav">


  <a href="Log in.php">Log in</a>
  <a href="contact.php">Contact</a>
  <a href="promotions.php">Promotions</a>
  <a class="active" href="index.php">Home</a>
  <img  src="adi.png" width="70" height="34.5" >


</div>

<!-- body -->

<div class="container">
  <img src="p1.jpg" alt="Snow" style="width:100%;">
  <h1 class="centered">Welcome to X Titan</h1>
</div>



<div class="content">

  <h1>Announcement Board </h1>

   <a href="#">
  <img src="p2.jpg" style="width:100%;">
  </a>
  
  <?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "xtitan";

    // Create connection
    $conn = new mysqli ($dbServername, $dbUsername, $dbPassword, $dbName );

?>


<?php

$sql  = "SELECT * FROM announcement;";
$result = mysqli_query($conn,$sql);

$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0 ){
    while ($row = mysqli_fetch_assoc($result)){

   
        echo $row['notice'] . " <br> <br>";

    }
    

}

?>


</div>




<div class="content">
  <h1>Flash Sale</h1>
     <table>
	
          <tr>
               <th><img  src="f1.jpg" alt="pic1" > <p class="mid"><a href="#">Buy now RM 5</a></p> </th>
               <th><img  src="f2.jpg" alt="pic4"> <p class="mid"><a href="#">Buy now  RM 62.99</a></p> </th>
               <th><img  src="f3.jpg" alt="pic2" > <p class="mid"><a href="#">Buy now  RM 40.6</a></p> </th>
               <th><img  src="f4.jpg" alt="pic2" > <p class="mid"><a href="#">Buy now  RM 99.99</a></p> </th>
               <th><img  src="f5.jpg" alt="pic2" > <p class="mid"><a href="#">Buy now  RM 1.2</a></p> </th>

     
          </tr>



</table>

<div class="content">
  <h1>Food sale</h1>
     <table>
	
          <tr>
               <th><img  src="f6.jpg" alt="pic1" > <p class="mid"><a href="#">Buy now RM 30</a></p> </th>
               <th><img  src="f7.jpg" alt="pic4"> <p class="mid"><a href="#">Buy now  RM 19.99</a></p> </th>
               <th><img  src="f8.png" alt="pic2" > <p class="mid"><a href="#">Buy now  RM 6.6</a></p> </th>
               <th><img  src="f9.jpg" alt="pic2" > <p class="mid"><a href="#">Buy now  RM 35.99</a></p> </th>
               <th><img  src="f10.jpg" alt="pic2" > <p class="mid"><a href="#">Buy now  RM 10.2</a></p> </th>

     
          </tr>
</table>

<hr class = " hrC ">

<img src="ads.jpg" alt="Snow" style="width:100%;">
     

  </table>

</div>


<h1> Categories </h1>

<table>
  <tr>
    <td class= "thc"> <img  src="i1.jpg" alt="pic1" > Clock</td>
    <td class= "thc"> <img  src="i2.jpg" alt="pic1" > Watches</td>
    <td class= "thc"> <img  src="i3.jpg" alt="pic1" > Mobile</td>
    <td class= "thc"> <img  src="i4.jpg" alt="pic1" > Mask</td>
    <td class= "thc"> <img  src="i5.jpg" alt="pic1" > Earbuds</td>
    <td class= "thc"> <img  src="i6.jpg" alt="pic1" > desk</td>
    <td class= "thc"> <img  src="i7.jpg" alt="pic1" > health Accessories</td>
    <td class= "thc"> <img  src="i8.jpg" alt="pic1" > Kitchen Orgamizers </td>
    <td class= "thc"> <img  src="i11.jpg" alt="pic1" >  Food Storage </td>
  </tr>

</table>



<!-- footer -->

<footer class="fot">

  <hr class = " hrC ">

  <p> follow us </p>

  <table  class = "Tcenter" >
      <tr >

       <td> <a href="https://www.facebook.com">  <img  src="fb.png"  width="50" height="50"> </a>  </td> 
       <td> <a href="https://www.instagram.com"> <img  src="ig.png"  width="70" height="50"> </a>  </td>  
       <td> <a href="https://twitter.com/" >     <img  src="tw.webp" width="60" height="50"> </a> </td> 
      

      </tr>

  </table>

    <p> Privacy Policy | Terms and Conditions| Imprint | © 2020 XTitan Malaysia Sdn Bhd<br>
  </footer>

</div>



</body>
</html>