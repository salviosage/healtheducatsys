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
                <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 53px;">#</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 286px;">Title</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 130px;">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 65px;">No. Credits</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 125px;">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;">Action</th>
                </tr>
                </thead>


                <tbody>
                    <?php 
                        foreach ($courses as $key => $course) {
                            ?>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">
                                    <?php echo $course['id']; ?>
                                </td>
                                <td>
                                    <strong><?php echo $course['title']; ?></strong>
                                </td>
                                <td>
                                    <span class="badge badge-success">
                                        <?php echo $course['course_price']; ?>
                                    </span>
                                </td>
                                <td>
                                    0
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
                                    <div class="btn-group m-b-10">
                                        <button type="button" class="btn btn-default waves-effect">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-default waves-effect">
                                            <i class="fa fa-close"></i>
                                        </button>
                                        <button type="button" class="btn btn-default waves-effect">
                                            <i class="fa fa-trash-o"></i>
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