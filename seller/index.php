<?php include('head.php') ?>
<?php include('menu.php') ?>
<div class="container grand-container">

  <div class="row main-container">
    
    <div class="col-md-3"> 
      <?php include('admin-sidebar.php') ?>
    </div>
    <div class="col-md-9">
      <div class="card-full">
        <h2> Sample Content </h2>
        <br>
          <!-- change here -->
          <div class="row">
            <?php include('loop-cart.php') ?>
            <?php include('loop-cart.php') ?>
            <?php include('loop-cart.php') ?>
            <?php include('loop-cart.php') ?>
          </div>

        Quisque quis tempus purus, non dictum metus. Etiam a laoreet lectus, ut condimentum ligula. Proin vitae maximus lectus, sit amet blandit lorem. Proin a ipsum purus. Suspendisse malesuada ipsum sit amet posuere posuere. Proin laoreet justo eget consequat ultricies. Mauris consequat feugiat sapien nec rhoncus. Proin tincidunt nibh et malesuada semper. Cras vitae dictum ipsum, eget tristique risus.
        <div class="button login-button"> CLICK HERE TO TRY THE LOGIN MODAL</div>
      </div>
    </div>
  </div>
</div>
</div>

<?php include('modals.php') ?>
<?php include('footer.php') ?>