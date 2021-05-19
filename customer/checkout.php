<?php include('head.php') ?>
<?php include('menu.php') ?>
<?php

?>

<div class="container grand-container">
<br>
    <h2>Checkout</h2>
    <hr>
    <form method="post" action="pro_checkout.php">
  <div class="row main-container">
      <div class="col">
        <h4>My Details</h4><hr>
        <div class="form-group">
          <label>Name:</label>
          <input class="form-control" name="name" value="<?php echo $myname; ?>" required>
        </div>
        <div class="form-group">
          <label>Contact Number:</label>
          <input class="form-control" name="name"  value="<?php echo $contact; ?>" required>
        </div>
        <div class="form-group">
          <label>Email Address:</label>
          <input class="form-control" name="name" value="<?php echo $email; ?>" required>
        </div>
        <div class="form-group">
          <label>Address:</label>
          <textarea class="form-control" name="address" required><?php echo $address; ?></textarea>
        </div>
      </div>
      <div class="col">
        <h3>Payment/Delivery Method</h3><hr>
        <div class="form-group">
          <label>Method:</label>
          <select class="form-control">
            <option>Cash on Delivery</option>
            <option>Pick up</option>
          </select>
        </div>
        
      </div>
      <div class="col">
        <ul class="checkout">
        <?php 
          include("temp_cart.php");
        ?>
        </ul>
      </div>
  </div>
    </form>
</div>

<?php include('modals.php') ?>
<?php include('footer.php') ?>