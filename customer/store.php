<?php include('head.php') ?>
<?php include('menu.php') ?>
<?php
  $_SESSION['owner'] = '';
  if (isset($_GET['owner'])){
    $_SESSION['owner'] = $_GET['owner'];
  }
  $name = '';
  $address = '';
  $contact = '';
  $email = '';
  $view_owner = $viewing_function -> view_store($_SESSION['owner']);
  foreach ($view_owner as $key => $value) {
    $name = $value['register_name'];
    $address = $value['address'];
    $contact = $value['contact'];
    $email = $value['email'];
  }
?>

<div class="container grand-container">
  <div class="row main-container">
    
    <div class="col-md-4"> 
      <form class="search-large">
        <input type="text" name="" placeholder="Search">
        <button type="submit"> <span class="fas fa-search"></span> </button>
      </form>
    </div>
    <div class="col-md-8">
      
    </div>

    
    <div class="col cart-items">
      <br>
        <h3> Other Products</h3>
        <br>
        <br>
        <div class="row">
         <div class="card">
          <div class="container-fluid">
           <div class="row">
             <div class="col-md-12">
               <p>Registered Name:<i> <?php echo $name; ?></i></p>
               <p>Address:<i> <?php echo $address; ?></i></p>
               <p>Contact Number: <i><?php echo $address; ?></i></p>
               <p>Email: <i><?php echo $address; ?></i></p>
             </div>
           </div>
          </div>
         </div>
        </div>
    </div>


    <div class="col-md-4 ">
      <div class="cart-items">
        <br>
        <h3>Review</h3>
        <ul class="checkout">

        <?php include('temp_cart.php'); ?>

          
        </ul>
        <br>
        <a href="checkout.php" class="btn btn-sm btn-success"> Proceed to Checkout</a>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="row">
        <?php 
          $view_product = $viewing_function->view_product();
          foreach ($view_product as $key => $value) {
            ?>
        <div class="col-md-3 col-6 card-small">
          <div>

            <div class="click-item-info" title="Click for more info."><span class="fas fa-info"></span></div>
            <img src="../<?php echo $value['target_file']; ?>" style="width: 140px;height: 170px;" class="item-image">
            <div class="info">
              <span class="item-title"> <?php echo $value['name']; ?> </span> <br>
              <span class="item-price">P<?php echo $value['price']; ?>/<?php echo $value['unit']; ?></span>
              <div class="quantity-count">
                <form>
                  <div class="order-increment">
                    <a onclick="$('.add-cart-modal<?php echo $value['id']; ?>').slideDown();" href="#" class="button btn btn-sm btn-warning"><i class="fas fa-eye"></i> Add Cart</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
<?php
          include("modal_addcart.php");
          }
        ?>
      </div>
      
    </div>
    <div class="col-md-4">

    </div>
  </div>
</div>
</div>

<?php include('modals.php') ?>
<?php include('footer.php') ?>