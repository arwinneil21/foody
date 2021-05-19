<?php include('head.php') ?>
<?php include('menu.php') ?>
<div class="container grand-container">

  <div class="row main-container">
    
    <div class="col-md-3"> 
      <?php include('admin-sidebar.php') ?>
    </div>
    <div class="col-md-9">
      <div class="card-full">
        <h2> Manage Orders </h2>
        <br>
        <br>
        <a class=" btn btn-sm btn-warning" href="manageorder.php?tab=new"><i class="fas fa-plus"></i> New Orders</a>
        <a class="btn btn-sm btn-info" href="manageorder.php?tab=completed"><i class="fas fa-plus"></i> Completed Orders</a>
        <a class="add-product btn btn-sm btn-danger" href="manageorder.php?tab=cancel"><i class="fas fa-plus"></i> Canceled Orders</a>
        <br>
        <br>
          <!-- change here -->
          <div class="row">
            <div class="col">
            <?php
              if ($_GET['tab'] == 'new'){
                include('neworder.php');
              }elseif ($_GET['tab'] == 'completed') {
                include('completedorder.php');
              }elseif ($_GET['tab'] == 'cancel') {
                include('cancelorder.php');
              }
            ?>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
</div>

<?php 
  include('modal_addproduct.php');
  include('footer.php');
   ?>