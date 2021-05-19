<?php include('head.php') ?>
<?php include('menu.php') ?>
<div class="container grand-container">

  <div class="row main-container">
    
    <div class="col-md-3"> 
      <?php include('admin-sidebar.php') ?>
    </div>
    <div class="col-md-9">
      <div class="card-full">
        <h2> Product </h2>
        <a class="add-product btn btn-sm btn-success" href="#" style="float: right;"><i class="fas fa-plus"></i> Add Product</a>
        <br>
        <br>
        <br>
        <br>
          <!-- change here -->
          <div class="row">
          <?php
            $view_product = $viewing_function -> view_product();
            foreach ($view_product as $key => $value) {
          ?>
            <div class="col-md-3 col-6 card-small">
              <div>
                <div onclick="$('.update-product-modal<?php echo $value['id']; ?>').slideDown();" class="click-item-info update-product<?php echo $value['id']; ?>" title="Click for more info."><span class="fas fa-info"></span></div>
                <img src="../<?php echo $value['target_file']; ?>" class="item-image">
                <div class="info">
                  <span class="item-title"> <?php echo $value['name']; ?> </span> <br>
                  <span class="item-price">P<?php echo $value['price']; ?>/<?php echo $value['unit']; ?></span>
                  <div class="quantity-count">
                    <form hidden="true">
                      <div class="order-increment">
                        <button type="button" class="button increment-button sub">-</button>
                        <input type="number" name="" value="1">
                        <button type="button" class="button increment-button add">+</button>
                      </div>
                    </form>
                    <div class="order-increment">
                      <a href="" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script>
              $('.update-product<?php echo $value['id']; ?>').click( function(){
                $('.update-product-modal<?php echo $value['id']; ?>').slideDown();
              });
            </script>
          <?php
            include("modal_updateproduct.php");
            }
          ?>
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