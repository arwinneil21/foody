<?php include('head.php') ?>
<?php include('menu-main.php') ?>

<div class="header-container">
  <img src="img/01.jpg" class="header-img">
</div>

<div class="quick-nav">
  <ul>
    <a href="#"><li> Violet </li></a>
    <a href="#"><li> Red </li></a>
    <a href="#"><li> Yellow </li></a>
    <a href="#"><li> Blue </li></a>
    <a href="#"><li> Orange </li></a>
    <a href="#"><li> White </li></a>
  </ul>
</div>

<div class="container">
  <div class="row main-container">

    <div class="col-md-4"> 
      <form class="search-large">
        <input type="text" name="" placeholder="Search">
        <button type="submit"> <span class="fas fa-search"></span> </button>
      </form>
    </div>
    <div class="col-md-8"></div>





    <div class="col-12 card-group">
      <div class="row">
          <div class="col-md-3 ">
              <img src="img/01.jpg" class="img-large">
          </div>

          <div class="col-md-9 scroll-parent">
            <div class="horizontal-scroll">
              <div class="row loop-feature">

                <?php include('loop-feature.php') ?>
                <?php include('loop-feature.php') ?>
                <?php include('loop-feature.php') ?>
                <?php include('loop-feature.php') ?>
                <?php include('loop-feature.php') ?>
                <?php include('loop-feature.php') ?>

                <div class="col-lg-4 col-6 card-reg featured"><div>
                  <a href="">
                    <div class="info d-flex more-shop">
                      <div> More from this shop </div>
                    </div>
                  </a>
                </div></div>

              </div>
              <div class="right-scroll scroll-card"> <span class="fas fa-chevron-right"></span> </div>
              <div class="left-scroll scroll-card"> <span class="fas fa-chevron-left"></span> </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 card-group">
      <div class="row">
          <div class="col-md-3 ">
              <img src="img/01.jpg" class="img-large">
          </div>

          <div class="col-md-9 scroll-parent">
            <div class="horizontal-scroll">
              <div class="row loop-feature">

                <?php include('loop-feature.php') ?>
                <?php include('loop-feature.php') ?>
                <?php include('loop-feature.php') ?>
                <?php include('loop-feature.php') ?>
                <?php include('loop-feature.php') ?>
                <?php include('loop-feature.php') ?>

                <div class="col-lg-4 col-6 card-reg featured"><div>
                  <a href="">
                    <div class="info d-flex more-shop">
                      <div> More from this shop </div>
                    </div>
                  </a>
                </div></div>

              </div>
              <div class="right-scroll scroll-card"> <span class="fas fa-chevron-right"></span> </div>
              <div class="left-scroll scroll-card"> <span class="fas fa-chevron-left"></span> </div>
            </div>
          </div>
        </div>
      </div>





  </div>
</div>

<?php 
  include("modal_signup.php");
  include('modals.php'); 
  include('footer.php');
?>