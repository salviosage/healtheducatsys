<?php 
if(isset($_GET['course']) && $_GET['course']!='' && isset($_GET['title']) && $_GET['title']!=''){
	$course_id=$function->sanitize($_GET['course']);
	$course_title=$function->sanitize($_GET['title']);
}else{
	backHome();
}
function backHome(){
	?>
	<script type="text/javascript">
		window.location='index?request=assigned_courses';
	</script>
	<?php
}
?>
<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <div class="card-box">
            <div class="row">
                <form id="frm_add_credit"  method="POST" action="upload.php">
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                        Course Title
                        </label>
                        <input id="course_title" name="course_title" value="<?php echo $course_title; ?>" type="text" class="form-control" required disabled>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                        Credit Title
                        </label>
                        <input id="credit_title" name="credit_title" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                            Select Credit Type
                        </label>
                        <select id="credit_type" name="credit_type" class="form-control">
                            <option value="WRITTEN">
                                Written Based
                            </option>
                            <option value="VIDEO">
                                Video Based
                            </option>
                        </select>
                    </div>
                    <div id="div_video" class="form-group" style="display: none;">
                        <label>
                            Video URL
                        </label>
                        <input id="video_url" name="video_url" type="text" placeholder="Ex:https://youtube.com/watch?q=sjhdsd76ds677" class="form-control">
                    </div>
                    <textarea class="credit_summary" name="credit_summary" id="elm1"></textarea>
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                        	Attach Respective Files
                        </label>
                        <input id="file" type="file" name="file[]" class="form-control" required>
                    </div>
                    <div class="form-group" style="margin: 10px;">
                        <input id="course_id" name="course_id" type="hidden" value="<?php echo $course_id; ?>">
                        <button id="btn_save_course" type="submit" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5">SAVE CREDITS</button>
                        <a href="#" class="btn btn-default btn-bordered waves-effect w-md m-b-5">CANCEL</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>