<?php 
$CourseRequest=$admin->StudentCourseRequest();
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Client Course Requesting</b></h4>
            <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="dt-buttons btn-group">
                </div>
                <div id="datatable-buttons_filter" class="dataTables_filter">

                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Course</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" >Client Info</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" >Course Price</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" >Status</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1">Action</th>
                </tr>
                </thead>


                <tbody>
                    <?php 
                        foreach ($CourseRequest as $key => $value) {
                            $course_name=$admin->getFieldValue(Tables::courses(),"title","id",$value['course_id']);
                            $courseInfo=$admin->loadCourseInfo($value['course_id']);
                            $course_price=$function->extract_array($courseInfo,"course_price");
                            $clientInfo=$user->getUserPersonalInfo($value['student_id']);
                            $client_name=$admin->getFieldValue(Tables::users(),"names","id",$value['student_id']);
                            ?>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">
                                   <a href="#">
                                       <?php echo $course_name; ?>
                                   </a>
                                </td>
                                <td>
                                    <strong>
                                        <a data-toggle="collapse" href="#" data-target="#demo">
                                            <?php echo $client_name; ?>
                                        </a>
                                        <div id="demo" class="collapse">
                                            <?php 
                                            foreach ($clientInfo as $key => $client) {
                                                echo '<p>'.$client['email'].'</p>';
                                                echo '<p>'.$client['phone'].'</p>';
                                            }
                                            ?>
                                        </div>
                                    </strong>
                                </td>
                                <td>
                                    <span class="badge badge-success">
                                       <?php echo number_format($course_price).' RWF' ?>
                                    </span>
                                </td>
                                <td>
                                    <?php 
                                     if($value['status']=='REQUESTED'){
                                        ?>
                                        <span class="badge badge-warning">
                                            <?php echo $value['status']; ?>
                                        </span>
                                        <?php
                                     }elseif($value['status']=='APPROVED'){
                                        ?>
                                        <span class="badge badge-success">
                                            <?php echo $value['status']; ?>
                                        </span>
                                        <?php
                                     }elseif($value['status']=='DENIED'){
                                        ?>
                                        <span class="badge badge-danger">
                                            <?php echo $value['status']; ?>
                                        </span>
                                        <?php
                                     }
                                    ?>
                                </td>
                                <td>
                                    <div class="btn-group m-b-10">
                                        <a request="<?php echo $value['id']; ?>" href="#" class="btn btn-success btn-sm waves-effect btn_approve_request">
                                            <i class="fa fa-check"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm waves-effect">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </div>
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