<div class="signup-modal modal">

  <!-- Modal content -->
  <div class="modal-content login-content">
    <div class="m1">
      <img src="img/01.jpg">
    </div>
    <div class="m2">
        <form action="pro_register.php" method="post">
      ***** Register *****<br><br>
        <div class="login">
          <label>Last Name</label> 
          <input type="text" name="lname" placeholder="" required>
          <label>First Name</label>
          <input type="text" name="fname" placeholder="" required>
          <label>Middle Name</label> 
          <input type="text" name="mname" placeholder="">
          <label>User type</label>
          <select style="width: 100%;max-width: 220px;display: block;margin: 0 auto;" name="user_type" required>
            <option></option>
            <option>Administrator</option>
            <option>Consumer</option>
            <option>Seller</option>
          </select>
          <label>Gender</label>
          <select style="width: 100%;max-width: 220px;display: block;margin: 0 auto;" name="gender" required>
            <option></option>
            <option>Male</option>
            <option>Female</option>
          </select>
          <label>Birthday</label> 
          <input type="date" name="bday" placeholder="" required>
          <label>Contact Number</label> 
          <input type="text" name="cnum" placeholder="" required>
          <label>Email</label> 
          <input type="email" name="email" placeholder="">
          <label>Address</label> 
          <textarea name="address" style="width: 100%;max-width: 220px;display: block;margin: 0 auto;" required></textarea>
          <label>Username</label> 
          <input type="text" name="username" placeholder="Username" required>
          <label>Password</label>
          <input type="password" name="password" placeholder="Password"required>
        </div>
        <br>
        <div class="modal-buttons">
          <button class="confirm-modal" name="submit">  Register </button>
          <span class="close-modal">  Close </span>
        </div> 
      </form>


    </div>
  </div>

</div>