<?php 
if(isset($_GET['course']) && $_GET['action']=='edit'){
    $token=$_GET['course'];
    //get course information
    $CourseInfo=$admin->getCourseInfo($token);
    if(count($CourseInfo)==0){
      $function->backHome();  
    }
}else{
    $function->backHome();
}
$course_id=$function->extract_array($CourseInfo,"id");
$title=$function->extract_array($CourseInfo,"title");
$course_price=$function->extract_array($CourseInfo,"course_price");
$summary=$function->extract_array($CourseInfo,"summary");
$teacher_id=$function->extract_array($CourseInfo,"assigned_teacher");

?>
<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <div class="card-box">
            <div class="row">
                <form id="frm_edit_course"  method="POST">
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                        Course Title
                        </label>
                        <input id="course_title" name="course_title" type="text" value="<?php echo $title; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                        Course Price
                        </label>
                        <input id="course_price" name="course_price" type="number" value="<?php echo $course_price; ?>" class="form-control" name="price" required>
                    </div>
                    <div class="form-group">
                        <?php 
                            $teachers=$admin->loadUsers(2,1);
                        ?>
                        <label>Assign Course to teacher</label>
                        <select id="assigned_teacher" name="assigned_teacher" class="form-control" required>
                            <?php 
                            foreach ($teachers as $key => $teacher) {
                                ?>
                                <option value="<?php echo $teacher['id']; ?>">
                                    <?php echo $teacher['names']; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <textarea class="course_summary" id="elm1"><?php echo $summary; ?></textarea>
                    <div class="form-group" style="margin: 10px;">
                        <input id="course_id" type="hidden" value="<?php echo $course_id; ?>">
                        <input id="edit_counter" value="0" type="hidden" name="">
                        <button id="btn_save_course" type="submit" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5">EDIT COURSE</button>
                        <a href="#" class="btn btn-default btn-bordered waves-effect w-md m-b-5">CANCEL</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>