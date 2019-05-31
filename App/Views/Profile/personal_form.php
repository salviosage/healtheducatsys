<form id="form_edit_bio" action="sam.php">
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
	       <div class="p-4 border border-light border-top-0">
	        <div class="form-group row">
	          <label class="col-md-3 col-form-label text-dark">Full Name</label>
	          <div class="col-md-9">
	            <input id="full_names" name="full_names" type="text" class="form-control" value="<?php echo $names; ?>" required>
	          </div>
	        </div>

	        <div class="form-group row">
	          <label class="col-md-3 col-form-label text-dark">Profession</label>
	          <div class="col-md-9">
	            <input id="profession" name="profession" type="text" class="form-control" value="<?php echo $profession; ?>" required>
	          </div>
	        </div> 
	         
	        <div class="form-group row">
	          <label class="col-md-3 col-form-label text-dark">Email</label>
	          <div class="col-md-9">
	            <input id="email" name="email" type="email" class="form-control" value="<?php echo $email; ?>" required>
	          </div>
	        </div>
	        
	        <div class="form-group row">
	          <label class="col-md-3 col-form-label text-dark">Phone</label>
	          <div class="col-md-9">
	            <input id="phone" name="phone" type="tel" class="form-control" value="<?php echo $phone; ?>" required> 
	          </div>
	        </div> 
	        
	        <div class="form-group row">
	          <label class="col-md-3 col-form-label text-dark">Location</label>
	          <div class="col-md-9">
	            <input id="address" name="address" type="text" class="form-control" value="<?php echo $address; ?>" required>
	          </div>
	        </div>
	        <div class="form-group row">
	        	<button type="submit" class="btn btn-success">SAVE INFORMATION</button>
	        </div>
	       </div>
	     </div>
	   </div>
	 </div> 
</form>