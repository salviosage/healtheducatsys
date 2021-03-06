<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <div class="card-box">
            <div class="row">
            	<form id="frm_add_user">
            		<div class="row">
            			<div class="col-md-6">
		                    <div class="form-group">
		                        <label class="col-md-12 control-label">
		                        Names
		                        </label>
		                        <input id="inst_names" name="inst_names" type="text" class="form-control" required>
		                    </div>
            			</div>
            			<div class="col-md-6">
		                    <div class="form-group">
		                        <label class="col-md-12 control-label">
		                        Email
		                        </label>
		                        <input id="inst_mail" name="inst_mail" type="email" class="form-control" required>
		                    </div>
            			</div>
            			<div class="col-md-6">
		                    <div class="form-group">
		                        <label class="col-md-12 control-label">
		                         Phone
		                        </label>
		                        <input id="inst_phone" name="inst_phone" type="number" class="form-control" required>
		                    </div>
            			</div>
            			<div class="col-md-6">
		                    <div class="form-group">
		                        <label class="col-md-12 control-label">
		                         Instructor Status
		                        </label>
		                        <select id="inst_status" name="inst_status" class="form-control">
		                        	<option value="1">
		                        		ACTIVE
		                        	</option>
		                        	<option value="0">
		                        		PENDING
		                        	</option>
		                        </select>
		                    </div>
            			</div>
            			<div class="col-md-6">
		                    <div class="form-group">
		                        <label class="col-md-12 control-label">
		                         Password
		                        </label>
		                        <input id="password" name="password" type="password" class="form-control" required>
		                    </div>
            			</div>
            			<div class="col-md-6">
		                    <div class="form-group">
		                        <label class="col-md-12 control-label">
		                         Confirm Password?
		                        </label>
		                        <input id="confirm_pwd" name="confirm_pwd" type="password" class="form-control" required>
		                    </div>
            			</div>
            			<div class="col-md-6">
            				<button class="btn btn-danger" type="submit">
            					SAVE INSTRUCTOR
            				</button>
            			</div>
            		</div>
            	</form>
            </div>
        </div>
    </div>
</div>