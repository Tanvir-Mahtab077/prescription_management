<?php

?>

<!DOCTYPE html>
<html lang="en">
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand mr-5 text-warning" href="#"><img height="70" width="130" src="image/LogoMakr-3dnUlR.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ml-2">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">Medicine</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">All Patient</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">Search Medicine</a>
      </li>

      <?php 
      session_start();
      $logginInfo = "";
      if (isset($_SESSION['uname'])) {
        $logginInfo = $_SESSION['uname'];
      }
      
      if (isset($logginInfo)) { ?>
        <?php if ($logginInfo != null) { ?>
          <li class="nav-item ml-3">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>

        <?php } else{ ?>
          <li class="nav-item ml-3">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        <?php } ?>
      <?php } ?>




    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Old Patient" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>