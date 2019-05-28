<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <div class="card-box">
            <div class="row">
                <form id="frm_add_course"  method="POST" action="upload.php">
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                        Course Title
                        </label>
                        <input id="course_title" name="course_title" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                        Course Price
                        </label>
                        <input id="course_price" name="course_price" type="number" class="form-control" name="price" required>
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
                    <textarea class="course_summary" id="elm1"></textarea>
                    <div class="form-group" style="margin: 10px;">
                        <input type="hidden" value="0">
                        <button id="btn_save_course" type="submit" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5">SAVE COURSE</button>
                        <a href="#" class="btn btn-default btn-bordered waves-effect w-md m-b-5">CANCEL</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>