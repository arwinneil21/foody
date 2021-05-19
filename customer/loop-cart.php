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
            <a href="store.php?owner=<?php echo $value['user_id']; ?>" class="button btn btn-sm btn-warning"><i class="fas fa-eye"></i> Visit Store / Inquire</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>