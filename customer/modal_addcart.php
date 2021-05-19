    <form method="post" action="pro_addcart.php" enctype="multipart/form-data">

<div class="modal add-cart-modal<?php echo $value['id']; ?>">

  <!-- Modal content -->
  <div class="modal-content">
    <p><h3>Add Cart </h3><br>
            <div class="col-md-12 card-small">
              <div class="row">
                <div class="col">
                  <img src="../<?php echo $value['target_file']; ?>" style="width: 140px;height: 170px;" class="item-image">
                  <div class="info">
                    <span class="item-title"> <?php echo $value['name']; ?> </span> <br>
                    <span class="item-price">P<?php echo $value['price']; ?>/<?php echo $value['unit']; ?></span>
                  </div>
                </div>
                <div class="col">
                <p>Description</p>
                <?php echo $value['description']; ?>
                </div>
                <div class="col">
                <form action="pro_addcart.php" method="post">
                  <div class="form-group">
                    <label>Quantity:</label>
                    <input type="number" name="quantity">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-sm btn-success" name="submit" value="<?php echo $value['id'].'*'.$value['user_id'].'*'.$value['price'].'*'.$value['unit']; ?>"> Save</button>
                  </div>
                </form>
                </div>

              </div>
            </div>
  </div>

</div>
    </form>