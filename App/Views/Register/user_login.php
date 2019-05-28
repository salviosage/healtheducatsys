<form id="frm_user_login" class="px-lg-4">
  <div class="input-group input-group--focus mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text bg-white ti-email"></span>
    </div>
    <input id="user_email" name="user_email" type="email" class="form-control border-left-0 pl-0" placeholder="Email" required>
  </div>
  <div class="input-group input-group--focus mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text bg-white ti-lock"></span>
    </div>
    <input id="user_password" name="user_password" type="password" class="form-control border-left-0 pl-0" placeholder="Password" required>
  </div>
  <div class="d-md-flex justify-content-between my-4">
    <label class="ec-checkbox check-sm my-2 clearfix">
      <input type="checkbox" name="checkbox">
      <span class="ec-checkbox__control"></span>
      <span class="ec-checkbox__lebel">Remember Me</span>
    </label>
    <a href="recover-password.html" class="text-primary my-2 d-block">Forgot password?</a>
  </div>
  <button class="btn btn-block btn-primary">Log In</button>
  <?php include DIV_LOADER; ?>
  <p class="my-5 text-center">
    Don’t have an account? <a href="register" class="text-primary">Register</a>
  </p>
</form>