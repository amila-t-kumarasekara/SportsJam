<?php 
 include('header.php');
?>

    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0">
        <div class="p-3 p-lg-5 border">
          <h2 class="h3 mb-3 text-black">Login to your account</h2>
          <div class="form-group row">
            <div class="col-md-12">
              <label for="email" class="text-black">Email Address <span class="text-danger">*</span></label>
              <input name="email" type="email" required="required" class="form-control" id="email" placeholder="Email Address" autocomplete="off">
            </div>
            <div class="col-md-12">
              <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
              <input name="password" type="text" required="required" class="form-control" id="password_1" placeholder="Password" autocomplete="off">
            </div>
            <div class="col-md-6">
                <br>
              <button type="button"><a>Login</a></button>
          </div>
          <p>Don't have an account?<a href="signup.php"> Register Here</a></p>
          <p style="color: #FF0000"></p>
        </div>
      </div>

  

        <?php 
          include('footer.php');
        ?>