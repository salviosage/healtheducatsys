<?php 
$courses=$admin->loadCourses('*');
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Available Courses</b></h4>
            <p>You can export Resultset</p>
            <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="dt-buttons btn-group">
                </div>
                <div id="datatable-buttons_filter" class="dataTables_filter">

                </div>
                <table class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                <thead>
                <tr role="row">
                    <th class="sorting" style="width:350px;" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Title</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">No. Credits</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Action</th>
                </tr>
                </thead>


                <tbody>
                    <?php 
                        foreach ($courses as $key => $course) {
                            $edit_url="?request=edit_course&action=edit&course=".$course['token'];
                            ?>
                            <tr role="row" class="even">
                                <td>
                                    <strong><?php echo $course['title']; ?></strong>
                                </td>
                                <td>
                                    <span class="badge badge-success">
                                        <?php echo number_format($course['course_price']).' RWF'; ?>
                                    </span>
                                </td>
                                <td>
                                    <?php echo $course['credit_no']; ?>
                                </td>
                                <td>
                                    <?php 
                                        if($course['status']=='ACTIVE'){
                                            ?>
                                            <span class="badge badge-success">
                                                <?php echo $course['status']; ?>
                                            </span>
                                            <?php
                                        }elseif($course['status']=='SUBMMITTED'){
                                            ?>
                                            <span class="badge badge-warning">
                                                <?php echo $course['status']; ?>
                                            </span>
                                            <?php
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    if(USER_TYPE==1){
                                        ?>
                                        <div class="btn-group m-b-10">
                                            <a course_id="<?php echo $course['id']; ?>" href="#" class="btn btn-info btn-sm btn_add_credit_no">
                                                ADD CREDIT NO
                                            </a>
                                            <a href="<?php echo $edit_url; ?>" class="btn btn-default waves-effect">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a course_id="<?php echo $course['id']; ?>" class="btn btn-default waves-effect btn_add_poster" data-toggle="tooltip" data-placement="top" data-original-title="Add Poster">
                                                <i class="fa fa-photo"></i>
                                            </a>
                                            <a course_id="<?php echo $course['id']; ?>" href="#" class="btn btn-danger waves-effect btn_delete_course">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
            <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">
                
            </div>
            <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate"></div>
        </div>
        </div>
    </div>
</div>