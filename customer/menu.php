<?php
  include('classes.php');
  if (!isset($_SESSION['personal_id'])){ header("location:../logout.php?alert=hacker");}
  $viewing_function = new ManagePersonal();
  $myprofile = $viewing_function ->myprofile();
  $myname = '';
  $contact = '';
  $address = '';
  $email = '';
  foreach ($myprofile as $key => $value) {
    $ex = explode('*', $value['name']);
    $myname = $ex[0].', '.$ex[1].' '.$ex[2];
    $contact = $value['contact'];
    $address = $value['address'];
    $email = $value['email'];
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Online Food Business</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">My Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">My Orders</a>
      </li>
    </ul>
    <div class=" mr-auto mt-2 mt-lg-0">
      
    </div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">My Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>