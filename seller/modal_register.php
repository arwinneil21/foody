<div class="modal register-modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p><h3> Register Online Home Business </h3><br>
    <form method="post" action="pro_addproduct.php" enctype="multipart/form-data">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label>Online Business Name</label>
            <input type="text" name="name" class="form-control" autofocus="true" required>
          </div>     
          <div class="form-group">
            <label>Contact Number</label>
            <input type="text" name="price" class="form-control" required >
          </div> 
          <div class="form-group">
            <label>Upload Header Picture</label>
            <input type="text" name="unit" class="form-control" required >
          </div> 
        </div>
        <div class="col">
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required ></textarea>
          </div> 
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status" required >
              <option></option>
              <option>Available</option>
              <option>Not Available</option>
            </select>
          </div>   
          <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" required>
          </div>                  
          <div class="modal-buttons">
            <button class="btn btn-sm btn-success" name="submit"><i class="fas fa-save"></i> Save</button>
            <a href="#" class="close-modal btn btn-sm btn-warning"> <i class="fas fa-times"></i> Close </a>

          </div>
        </div>
      </div>
    </form>
  </div>

</div>