<?php include('head.php') ?>
<?php include('menu.php') ?>


<div class="container grand-container">
  <div class="row main-container">
    
    <div class="col-md-4"> 
      <form class="search-large">
        <input type="text" name="" placeholder="Search">
        <button type="submit"> <span class="fas fa-search"></span> </button>
      </form>
    </div>
    <div class="col-md-8"></div>

    
    <div class="col-md-8 cart-items">
      <br>
        <h3> Available Products</h3>
        <br>
        <br>
        <div class="row">
          <?php 
            $view_product = $viewing_function->view_product();
            foreach ($view_product as $key => $value) {
              include('loop-cart.php');
            }
          ?>

        </div>
    </div>


    <div class="col-md-4 ">
      <div class="cart-items">
        <br>
        <h3>Review</h3>
        <ul class="checkout">

        <?php include('loop-checkout.php') ?>
        <?php include('loop-checkout.php') ?>
        <?php include('loop-checkout.php') ?>


          <li class="border-none">
            <div class="row">
              <div class="col-8 ">
                <span> Sub-Total </span> <br>
              </div>
              <div class="col-4 ">
                <span class="item-subtotal"> P 100 </span> 
              </div>
            </div>
          </li>
        </ul>
        <button type="submit" class="checkout-button button"> Proceed to Checkout</button>
        </div>
    </div>
  </div>
</div>
</div>

<?php include('modals.php') ?>
<?php include('footer.php') ?>