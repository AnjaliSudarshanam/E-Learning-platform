<?php
$insert = false;
if(isset($_POST['name']))
{
    $server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con)
{
    die("coonection to this database failed due to ".mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$pass= $_POST['pass'];
$c_pass = $_POST['c_pass'];
// $image = $_POST['image'];

$sql = "INSERT INTO `cloud`.`register`(`name`,`email`,`pass`,`c_pass`) VALUES('$name','$email','$pass','$c_pass')";
if($con->query($sql)  == true)
{
    //flag for successful insertion
    $insert = true;
    // echo "successfully inserted";
}
else{
    echo "ERROR : $sql <br> $con->error";
}
//close the database connection
$con->close();
}

?>



















<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">
         <img src="/images/logo1.jfif" alt="logo" width="100px">
      </a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">sai sasank</h3>
         <p class="role">student</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">sai sasank<h3>
      <p class="role">student</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="form-container">

   <form action="register.php" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <p>your name <span>*</span></p>
      <input type="text" name="name" placeholder="enter your name"  class="box">
      <p>your email <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email"  class="box">
      <p>your password <span>*</span></p>
      <input type="password" name="pass" placeholder="enter your password"  class="box">
      <p>confirm password <span>*</span></p>
      <input type="password" name="c_pass" placeholder="confirm your password"  class="box">
      <!-- <p>select profile <span>*</span></p> -->
      <!-- <input type="file" accept="image/*" required class="box"> -->
      <input type="submit" value="register new" name="submit" class="btn">
      <?php

if($insert == true)
{
  echo "<script> alert ('registration successfull') </script>";
}

?>
   </form>

</section>















<footer class="footer">

   &copy; copyright @ 2023 by <span>cloud Technology Students Project-2k23</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>