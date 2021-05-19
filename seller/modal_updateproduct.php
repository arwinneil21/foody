<div class="modal update-product-modal<?php echo $value['id']; ?>">

  <!-- Modal content -->
  <div class="modal-content">
      
    <p><h3> Update Product </h3><br>
    <form method="post" action="pro_updateproduct.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label>Product Name</label>
          <input type="text" name="name" value="<?php echo $value['name']; ?>" class="form-control" autofocus="true" required>
        </div>     
        <div class="form-group">
          <label>Price</label>
          <input type="text" name="price" value="<?php echo $value['price']; ?>" class="form-control" required >
        </div> 
        <div class="form-group">
          <label>Unit of Measure</label>
          <input type="text" name="unit" class="form-control" value="<?php echo $value['unit']; ?>" required >
        </div> 
      </div>
      <div class="col">
        <div class="form-group">
          <label>Description</label>
          <textarea name="description" class="form-control" required ><?php echo $value['description']; ?></textarea>
        </div> 
        <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status" required >
            <option></option>
            <option <?php if ($value['status'] == 'Available') { echo 'selected'; } ?>>Available</option>
            <option <?php if ($value['status'] == 'Not Available') { echo 'selected'; } ?>>Not Available</option>
          </select>
        </div>   
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image" value="<?php echo $value['target_file']; ?>" required>
        </div>                  
        <div class="modal-buttons">
          <button class="btn btn-sm btn-success" value="<?php echo $value['id'] ?>" name="submit"><i class="fas fa-save"></i> Save</button>
          <a href="#" class="close-modal btn btn-sm btn-warning"> <i class="fas fa-times"></i> Close </a>
        </div>
      </div>
    </div>
    </form>

  </div>

</div>