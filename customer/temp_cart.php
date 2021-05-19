<?php
$subtot = 0;
  $view_tempcart = $viewing_function -> view_tempcart();
  foreach ($view_tempcart as $key => $value) {
  
?>
<li>
  <div class="row">
    <div class="col-8 ">
      <span class="item-title"> <?php echo $value['product']; ?> </span> <br>
      <span class="item-price"> P <?php echo $value['price']; ?> </span> X <span class="item-quantity"> <?php echo $value['quantity']; ?> </span>
    </div>
    <div class="col-4 ">
      <span></span> <br>
      <span class="item-subtotal"> P <?php $result = $value['price'] * $value['quantity']; echo $result; $subtot += $result;?> </span> 
    </div>
  </div>
</li>
<?php
  }
?>
<li class="border-none">
  <div class="row">
    <div class="col-8 ">
      <span> Sub-Total </span> <br>
    </div>
    <div class="col-4 ">
      <span class="item-subtotal"> P <?php echo $subtot; ?> </span> 
    </div>
  </div>
</li>