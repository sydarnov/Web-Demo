<!DOCTYPE html>
<html>
<head>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('b.jpg');
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


.fot{

  position: relative;
  text-align: center;
  text-align: center;
  bottom: 0;
  position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
   color: black;
   background-color: white;
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
.content {
  max-width: 800px;
  margin: auto;
  background: white;
  padding: 10px;
  text-align: left;
  
}

.contents {

  text-align:center;
  padding: 12px 20px;
 
  
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
}
.buttn {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
}
.buttons {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
}


</style>
</head>


<body>

<div class="topnav">


  <a class="active" href="Log in.php">Log in</a>
  <a href="contact.php">Contact</a>
  <a href="promotions.php">Promotions</a>
  <a href="home.php">Home</a>
  <img  src="adi.png" width="70" height="34.5" >


</div>



<!-- body -->

<div class="content">
<h1  style="color:blue" > <img src="adi.png" alt="Snow" style="width:15%;" >  Administrative Log in </h1>
<h2 class = "contents"> Welcome to Xtitan </h2>

<div class="contents">
<form >

<input type="text" name="email" id="email" size="33px" placeholder="Your Em@il "><br><br>


<input type="password" name="password" id="subject" size="33px"  placeholder="Password"><br><br>


<input class = "buttn"  type="button" onclick="window.location.href='announcements.php'" value="Log in" /><br><br>


<input class = "buttons"  type="button" onclick="window.location.href='log in.php'" value="Back to" /><br><br>



</form>

</div>

<img src="ads.jpg" alt="Snow" style="width:100%;">
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