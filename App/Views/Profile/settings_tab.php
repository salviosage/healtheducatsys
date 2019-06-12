<div class="tab-pane fade" id="Tabs_1-5" role="tabpanel">
 <div class="border-bottom mb-4 pb-4">
   <h4>
     Upload Avatar
   </h4>
   <div class="media align-items-end mt-4">
    <div class="position-relative">
      <input type="file" class="opacity-0 position-absolute as-parent">
      <?php 
      if($profile_image!=''){
        ?>
          <img id="profile" src="learn/Uploads/Profiles/<?php echo $profile_image; ?>" alt="" style="max-width: 120px;">

        <?php
      }else{
        ?>
        <img id="profile" src="assets/img/placeholder-1.jpg" alt="" style="max-width: 120px;">
        <?php
      }
      ?>
    </div>
     <div class="media-body ml-4 mb-4 mb-md-0">
       <p>
         JPG or PNG 200x200 px
       </p>
       <a href="#"></a>
       <button class="btn btn-outline-primary">
         <input id="profile_image_input" name="profile_image_input" type="file" class="opacity-0 position-absolute">
         Upload
       </button>

     </div>
   </div>
 </div>
 
 <div class="border-bottom mb-4 pb-4">
   
   <div class="accordion-item mb-3">
    <a href="#acc3_manage" class="accordion__title h6 border" data-toggle="collapse" aria-expanded="true">
     <span class="accordion__icon border-right p-3">
       <i class="ti-arrow-circle-down"></i>
       <i class="ti-arrow-circle-up"></i>
     </span>
      <span class="p-3">
        Manage your Account
      </span>
    </a>
     <div id="acc3_manage" class="collapse " data-parent="#accordion-3">
      <form id="frm_change_profile">
         <div class="p-4 border border-light border-top-0">
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-dark">Full Name</label>
            <div class="col-md-9">
              <input id="user_names" name="user_names" type="text" class="form-control" value="<?php echo $names; ?>">
            </div>
          </div>         
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-dark">Email</label>
            <div class="col-md-9">
              <input id="user_email" name="user_email" type="email" class="form-control" value="<?php echo $email; ?>">
            </div>
          </div>
          
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-dark">Phone</label>
            <div class="col-md-9">
              <input id="user_phone" name="user_phone" type="tel" class="form-control" value="<?php echo $phone; ?>">
            </div>
          </div> 
          
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-dark">Address</label>
            <div class="col-md-9">
              <input id="user_address" name="user_address" type="text" class="form-control" value="<?php echo $address; ?>">
            </div>
          </div>
          <div class="form-group row">
            <button type="submit" class="btn btn-success">
              SAVE CHANGES
            </button>
          </div>
         </div>
      </form>
     </div>
   </div> <!-- END accordion-item-->
   
  
   
 
  
 </div>  
 
 <div class="border-bottom mb-4 pb-4">
  
   <div class="accordion-item mb-3">
    <a href="#acc3_security" class="accordion__title h6 border" data-toggle="collapse" aria-expanded="true">
     <span class="accordion__icon border-right p-3">
       <i class="ti-arrow-circle-down"></i>
       <i class="ti-arrow-circle-up"></i>
     </span>
      <span class="p-3">
        Security Settings
      </span>
    </a>
     <div id="acc3_security" class="collapse " data-parent="#accordion-3">
      <form id="frm_change_pwd">
         <div class="p-4 border border-light border-top-0">
            <div class="form-group row">
              <label class="col-md-3 col-form-label text-dark">Current Password</label>
              <div class="col-md-9">
                <input id="current_pwd" name="current_pwd" type="password" class="form-control" required>
              </div>
            </div>
             
            <div class="form-group row">
              <label class="col-md-3 col-form-label text-dark">New Password</label>
              <div class="col-md-9">
                <input id="new_pwd" name="new_pwd" type="password" class="form-control" required>
              </div>
            </div> 
             
            <div class="form-group row">
              <label class="col-md-3 col-form-label text-dark">Confirm Password</label>
              <div class="col-md-9">
                <input id="confirm_pwd" name="confirm_pwd" type="password" class="form-control" required>
              </div>
            </div> 
            <div class="form-group row">
              <button type="submit" class="btn btn-success">
                SAVE CREDENTIALS
              </button>
            </div>
         </div>
      </form>
     </div>
   </div> <!-- END accordion-item-->
   

 </div>  