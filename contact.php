<!DOCTYPE html>
<html>
<head>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('p3.jpg');
  background-repeat: no-repeat;
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
.content {
  max-width: 800px;
  margin: auto;
  background: white;
  padding: 10px;
  text-align: center;
  
}


.fot{
  position: relative;
  text-align: center;
}
.buttons {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  margin: 2px 2px;
  cursor: pointer;
  border-radius: 10px;
}
.hrC {
   background-color: gray;
   height: 3px; 
   border: 0; 
}

.Tcenter {
  margin-left: auto; 
  margin-right: auto;
}

input[type=text] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit]:hover {
  background-color: #45a049;
}

</style>
</head>




<body>

<div class="topnav">

  <a href="Log in.php">Log in</a>
  <a class="active" href="contact.php">Contact</a>
  <a href="promotions.php">Promotions</a>
  <a href="index.php">Home</a>
  <img  src="adi.png" width="70" height="34.5" >

</div>

<!-- body -->


<div class="content">
<h1> Contact Us </h1>

<form >

<input type="text" name="fname" id="name"  size="33px" placeholder="Your Name" > <br><br>


<input type="text" name="email" id="email" size="33px" placeholder="Your Emil "><br><br>


<input type="text" name="subject" id="subject" size="33px"  placeholder="Subject"><br><br>


<textarea  name="message"  id="message" placeholder="Leave your Message here..." style="width: 320px; height: 200px;" ></textarea><br/>


<button  class = "buttons" onclick="alert('Submited ')" > Submit </button>


</form>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<img src="tell.png"  width="70" height="70" >
<p> call Us : 011 1234 123 , 011 1222 122 , 011 2233 444</p>

<img src="email.png"  width="70" height="70" >
<p> E-mail : Usxtitan@gmail.com</p>





</div>




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

    <p> Privacy Policy | Terms and Conditions|Imprint | © 2020 XTitan Malaysia Sdn Bhd<br>
  </footer>

</body>
</html>