<?php
session_start();
$title = "Home";
include 'header.php';

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: login.php?logout=success");
}
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Wedding Planner</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="mywcconsult.php">My Consultation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Payment</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="wcconsult.php">Consultation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="wcprofile.php">Profile</a>
    </li>
  </ul>
  <form action="" method="POST">
      <button class="btn btn-secondary" type="submit" name="logout">Logout</button>
  </form>
</nav>

<div class="container-fluid text-center">
  <h1>Welcome</h1>
  <h3><?php 
        echo $_SESSION['login-user'];
    ?></h3>
</div>
</body>
</html>
