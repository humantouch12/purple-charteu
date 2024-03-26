<?php
$conn = mysqli_connect('localhost','root','','purple_charteau');

session_start();










?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css"/>
    <title>Purple Charteau / Admin Login</title>
</head>
<body>

<header>
    <!--pc Nav bar-->
    <div class="onscroll-function">
    <div class="pc-nav-container"  id="scroll">
    <div class="pc-header">
    <div class="logo-div">
    <img class="logo" src="images/plain logo.png" alt=""  id="logo">
    </div>

     <nav>
    <ul class="nav-links">
        <li class="text-effect"><a href="#" class="effect"> home</a></li>
        <li class="text-effect" ><a href="#" class="effect">about </a></li>
        <li class="text-effect"><a href="#" class="effect">properties</a></li>
        <li  class="text-effect"><a href="#" class="effect">services</a></li>
        <li  class="text-effect"><a href="#" class="effect">Contact</a></li>

    </ul>
    </nav>

        <a href="adminlogin.php">
    <button class="btn1"> Login </button>
        </a>
    </div>
    </div>
    </div>
    <!--pc Nav bar-->


</header>




<div class="form-container">

   <form action="" method="post">


      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="username" required placeholder="enter your username">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <button type="submit" name="submit"> login now  </button>
      <p>login details are given  </p>
      
   </form>

</div>




<footer>
<div class="footer-div">
<div class="footer-div-write-up"> @purple Charteau - all rights reserved</div>
<div> <img class="logo" src="images/colored logo.png" alt=""></div>
<div class="icons-link-div">
    <i>  <a href=""><img class="icons2" src="icons/facebook.png" alt=""> </a></i>
    <i><a href=""><img class="icons2" src="icons/twitter (1).png" alt=""></a></i>
    <i><a href=""><img class="icons2" src="icons/linkedin.png" alt=""></a></i>
    <i><a href=""><img class="icons2" src="icons/instagram (1).png" alt=""></a></i>
    

</div>

</div>



</footer>




</body>
</html>