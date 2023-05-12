<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | About page"; ?>
<?php require 'head.php'; ?>
<head>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="main.php">Blood Bank Management System</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php">About</a>
       
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
       
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login/Register</a>
       
      </li>
     
    </ul>
 
  </div>
</nav>

<section class="my-3">
  <div class="py-3">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div>
  <p class="text-center">Jasmin Joy: +1 (805) 316 9370, jjmbf@umsystem.edu  </p>
  <a href="contact.php"> </a>
</div>
</section>
<?php require 'footer.php'; ?>
</body>
</html>