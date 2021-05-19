<?php
  include("classes.php");
  if (!isset($_SESSION['personal_id'])){
    header("location:../logout.php");
  }
  $viewing_function = new ManagePersonal();
  $myprofile = $viewing_function -> myprofile();
  foreach ($myprofile as $key => $profile) {
    $ex = explode('*', $profile['name']); 
    $myname = $ex[0].', '.$ex[1].' '.$ex[2];
  }
?>
<nav class="navbar navbar-expand-lg">
  <div class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fas fa-bars text-white"></span>
  </div>
  <a class="d-lg-none" href="#"> <span class="fas fa-shopping-cart"></span></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
    <div class=" mr-auto mt-2 mt-lg-0">
      
    </div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../logout.php"><i class="fas fa-sign-out"></i> Logout</a>
      </li>
    </ul>
  </div>
</nav>