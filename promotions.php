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

.fot{
  position: relative;
  text-align: center;
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
  border-radius: 15px;
}

</style>
</head>




<body>

<div class="topnav">

  <a href="Log in.php">Log in</a>
  <a href="contact.php">Contact</a>
  <a class="active" href="promotions.php">Promotions</a>
  <a href="index.php">Home</a>
  <img  src="adi.png" width="70" height="34.5" >


</div>

<!-- body -->


<div class="content">
<img src="promo.jpeg" style="width:100%;">
<h1> SHOP WITH VOUCHER NOW </h1>

<table>
  <tr>
    <td class= "thc"> <img  src="V1.PNG" alt="pic1" > <button class = "buttons" type="button" onclick="alert('Collected successfully !')"> Collect </button> </td>
    <td class= "thc"> <img  src="V2.PNG" alt="pic1" > <button class = "buttons" type="button" onclick="alert('Collected successfully !')"> Collect </button> </td>
    <td class= "thc"> <img  src="V3.PNG" alt="pic1" > <button class = "buttons" type="button" onclick="alert('Collected successfully !')"> Collect </button> </td>
    <td class= "thc"> <img  src="V4.PNG" alt="pic1" > <button class = "buttons" type="button" onclick="alert('Collected successfully !')"> Collect </button> </td>

  </tr>

</table>

<h1> Pick the best Gift Card  </h1>


<table>
  <tr>
    <td class= "thc"> <img  src="GIFT.PNG" alt="pic1" > <button class = "buttons" type="button" > Buy RM 95 </button> </td>
    <td class= "thc"> <img  src="g2.jpg" alt="pic1" > <button class = "buttons" type="button" > Buy RM 190 </button> </td>

  </tr>

</table>

<h1> Super Hot Voucher </h1>
<table>
<tr>
    <td class= "thc"> <img  src="g3.jpg" alt="pic1" > <button class = "buttons" type="button" > Use Now </button> </td>
    <td class= "thc"> <img  src="g4.jpg" alt="pic1" >   <button class = "buttons" type="button" > Use Now </button> </td>

  </tr>
  </table>


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