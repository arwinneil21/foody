<?php include('head.php') ?>
<?php include('menu.php') ?>
<div class="container grand-container">

  <div class="row main-container">
    
    <div class="col-md-3"> 
      <?php include('admin-sidebar.php') ?>
    </div>
    <div class="col-md-9">
      <div class="card-full">
        <h2> Online Home-Based Business Registration </h2>
        <br>
        <br>
        <br>
        <br>
          <!-- change here -->
          <?php 
              $name = '';
              $address = '';
              $contact = '';
              $email = '';
            $view_registered = $viewing_function -> view_registered();
            foreach ($view_registered as $key => $value) {
              $name = $value['register_name'];
              $address = $value['address'];
              $contact = $value['contact'];
              $email = $value['email'];
            }
          ?>
              <form method="post" action="pro_register.php" enctype="multipart/form-data">
          <div class="row">
            <div class="col">
                <div class="form-group">
                  <label>Online Business Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" autofocus="true" required>
                </div>         
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" name="address" required><?php echo $address; ?></textarea>
                </div>  
            </div>
            <div class="col">
                <div class="form-group">
                  <label>Contact Number</label>
                  <input type="text" name="contact" value="<?php echo $contact; ?>" class="form-control" required >
                </div> 
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" required >
                </div> 
            </div>
            <div class="col">
                <div class="form-group">
                  <label>Upload Header Picture</label>
                  <input type="file" name="image" required >
                </div> 
                <div class="form-group" align="right">
                 <button class="btn btn-sm btn-success" name="submit"><i class="fas fa-save"></i> Save</button>
                </div>
              </div>
            </div>
              </form>
              
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