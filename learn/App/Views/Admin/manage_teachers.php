<?php 
$teachers=$admin->loadUsers(2,1);
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Available Instructors</b>
                <?php 
                if(USER_TYPE==1){
                    ?>
                        <a href="?request=create_teacher" class="btn btn-success pull-right">ADD NEW TEACHER</a>
                    <?php
                }
                ?>
            </h4>
            <p>You can export Resultset</p>
            <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="dt-buttons btn-group">
                </div>
                <div id="datatable-buttons_filter" class="dataTables_filter">

                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                <thead>
                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 286px;">Names</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 130px;">Email</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 65px;">Phone</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 125px;">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;">Action</th>
                </tr>
                </thead>


                <tbody>
                    <?php 
                        foreach ($teachers as $key => $teacher) {
                            ?>
                            <tr role="row" class="even">
                                <td>
                                    <strong><?php echo $teacher['names']; ?></strong>
                                </td>
                                <td>
                                        <?php echo $teacher['email']; ?>
                                </td>
                                <td>
                                   <?php echo $teacher['phone']; ?>
                                </td>
                                <td>
                                    <?php 
                                        if($teacher['status']==1){
                                            ?>
                                            <span class="badge badge-success">
                                                <?php echo 'ACTIVE'; ?>
                                            </span>
                                            <?php
                                        }elseif($teacher['status']==0){
                                            ?>
                                            <span class="badge badge-warning">
                                                <?php echo $teacher['status']; ?>
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
                                            <a teacher_id="<?php echo $teacher['id']; ?>" class="btn btn-danger waves-effect btn_delete_teacher">
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