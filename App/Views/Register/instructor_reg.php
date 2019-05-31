  <form id="frm_reg_instructor" class="mt-4">
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
        <span class="input-group-text bg-white ti-email form-control  input--air"></span>
      </div>
      <input id="email" name="email" type="email" class="form-control border-left-0 pl-0 input--air" placeholder="Email" required>
    </div>
    <div class="input-group input-group--focus mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text bg-white ti-headphone form-control  input--air"></span>
      </div>
      <input id="phone" name="phone" type="number" class="form-control border-left-0 pl-0 input--air" placeholder="Phone" required>
    </div>
    <div class="input-group input-group--focus mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text bg-white ti-user"></span>
      </div>
      <input id="country" name="country" type="text" class="form-control border-left-0 pl-0 form-control  input--air" placeholder="Country" required>
    </div>
    <div class="input-group input-group--focus mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text bg-white ti-user"></span>
      </div>
      <input id="city" name="city" type="text" class="form-control border-left-0 pl-0 form-control  input--air" placeholder="city" required>
    </div>    
    <div class="input-group input-group--focus mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text bg-white ti-lock"></span>
      </div>
      <input id="t_password" name="password" type="password" class="form-control border-left-0 pl-0 input--air" placeholder="Choose Password" required>
    </div>
    <div class="input-group input-group--focus mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text bg-white ti-lock"></span>
      </div>
      <input id="confirm_pwd" name="confirm_pwd" type="password" class="form-control border-left-0 pl-0 input--air" placeholder="Confirm Password" required>
    </div>
    <div class="input-group my-4">
    <label class="ec-checkbox">
      <input type="checkbox" name="checkbox">
      <span class="ec-checkbox__control"></span>
      <span class="ec-checkbox__lebel text-left">
        I agree to the 
        <a href="privacy-policy.html" class="text-primary" target="_blank">
          terms and conditions.
        </a>
      </span>
    </label>
    </div>
    <button class="btn btn-primary btn-block">Register Now</button>
    <?php include DIV_LOADER; ?>
    <p class="marginTop-40">
      Already have an account? <a href="login" class="text-primary">Log In</a>
    </p>
  </form>