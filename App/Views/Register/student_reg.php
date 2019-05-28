<form id="frm_register_student" class="px-lg-4">
    <div class="input-group input-group--focus mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white ti-user"></span>
        </div>
        <input id="first_name" name="first_name" type="text" class="form-control border-left-0 pl-0 form-control  input--air" placeholder="First Name" required>
    </div>
    <div class="input-group input-group--focus mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white ti-user"></span>
        </div>
        <input id="last_name" name="last_name" type="text" class="form-control border-left-0 pl-0 form-control  input--air" placeholder="Last Name" required>
    </div>
    <div class="input-group input-group--focus mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text bg-white ti-email form-control  input--air"></span>
          </div>
          <input id="user_email" name="user_email" type="email" class="form-control border-left-0 pl-0 input--air" placeholder="Email" required>
    </div>
      <div class="input-group input-group--focus mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white ti-user"></span>
        </div>
        <?php 
        $Profession=$admin->getProfessionDegree(1);
        ?>
        <select id="user_profession" name="user_profession" class="form-control custom-select form-control border-left-0 pl-0 form-control  input--air"  required>
          <option selected>Select Profession</option>
          <?php 
          foreach ($Profession as $key => $value) {
            ?>
              <option value="<?php echo $value['id']; ?>">
                <?php echo $value['name']; ?>
              </option>
            <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group mb-3">
      </div>
      <div class="input-group input-group--focus mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white ti-user"></span>
        </div>
        <?php 
        $Degree=$admin->getProfessionDegree(2);
        ?>
        <select id="user_degree" name="user_degree" class="form-control custom-select form-control border-left-0 pl-0 form-control  input--air"  required>
          <option selected>Select Degree</option>
          <?php 
          foreach ($Degree as $key => $value) {
            ?>
              <option value="<?php echo $value['id']; ?>">
                <?php echo $value['name']; ?>
              </option>
            <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group input-group--focus mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text bg-white ti-headphone"></span>
          </div>
          <input id="user_phone" name="user_phone" type="text" class="form-control border-left-0 pl-0 form-control  input--air" placeholder="Phone Number" required>
        </div>
      <div class="input-group input-group--focus mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white ti-location-pin"></span>
        </div>
        <input id="user_country" name="user_country" type="text" class="form-control border-left-0 pl-0 form-control  input--air" placeholder="Country" required>
      </div>
      <div class="input-group input-group--focus mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white ti-location-pin"></span>
        </div>
        <input id="user_city" name="user_city" type="text" class="form-control border-left-0 pl-0 form-control  input--air" placeholder="city" required>
      </div>
   
      <div class="input-group input-group--focus mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white ti-lock"></span>
        </div>
        <input id="user_password" name="user_password" type="password" class="form-control border-left-0 pl-0 input--air" placeholder="Choose Password">
      </div>
      <div class="input-group input-group--focus mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white ti-lock"></span>
        </div>
        <input id="confirm_pwd" name="confirm_pwd" type="password" class="form-control border-left-0 pl-0 input--air" placeholder="Confirm Password">
      </div>
  
  <div class="my-4">
    <label class="ec-checkbox check-sm my-2 clearfix">
      <input type="checkbox" name="checkbox">
      <span class="ec-checkbox__control mt-1"></span>
      <span class="ec-checkbox__lebel">
        By signing up, you agree to our 
        <a href="privacy-policy.html" class="text-primary">Terms of Use</a>
         and
        <a href="privacy-policy.html" class="text-primary">Privacy Policy.</a>
      </span>
    </label>
  </div>
  <button class="btn btn-block btn-primary">Register Now</button>
  <?php include DIV_LOADER; ?>
  <p class="my-5 text-center">
    Already have an account? <a href="login" class="text-primary">Login</a>
  </p>
</form>