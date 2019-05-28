<?php 
if(isset($_GET['course']) && $_GET['course']!='' && isset($_GET['title']) && $_GET['title']!=''){
    $course_id=$function->sanitize($_GET['course']);
    $title=$function->sanitize($_GET['title']);
    $addCreditUrl="?request=add_course_credit&title=".$title."&course=".$course_id;
    //load credit credits
    $Credits=$admin->getCourseCredits($course_id,USER_ID);
}else{
    backHome();
}
function backHome(){
    ?>
    <script type="text/javascript">
        window.location='index?request=assigned_credits';
    </script>
    <?php
}
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Available credits</b><a href="<?php echo $addCreditUrl; ?>" class="btn btn-success pull-right">ADD NEW CREDIT</a></h4>
            <p>Course: <?php echo $title; ?></p>
            <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="dt-buttons btn-group">
                </div>
                <div id="datatable-buttons_filter" class="dataTables_filter">

                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 53px;">#</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 286px;">Credit</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 130px;">Attachment</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 125px;">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;">Action</th>
                </tr>
                </thead>


                <tbody>
                    <?php 
                        foreach ($Credits as $key => $credit) {
                            $quiz_url="?request=credit_quiz&title=".$credit['credit']."&credit=".$credit['id'];
                            $attach_url='Uploads/'.$credit['attachment'];
                            ?>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">
                                    <?php echo $credit['id']; ?>
                                </td>
                                <td>
                                    <strong><?php echo $credit['credit']; ?></strong>
                                </td>
                                <td>
                                    <a href="<?php echo $attach_url; ?>" target="_blank">
                                        <?php echo 'Click to View Attachment'; ?>
                                    </a>
                                </td>
                                <td>
                                    <?php 
                                        if($credit['status']=='ACTIVE'){
                                            ?>
                                            <span class="badge badge-success">
                                                <?php echo $credit['status']; ?>
                                            </span>
                                            <?php
                                        }elseif($credit['status']=='SUBMMITTED'){
                                            ?>
                                            <span class="badge badge-warning">
                                                <?php echo $credit['status']; ?>
                                            </span>
                                            <?php
                                        }
                                    ?>
                                </td>
                                <td>
                                    <div class="btn-group m-b-10">
                                        <a href="<?php echo $quiz_url; ?>" class="btn btn-success waves-effect">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger waves-effect">
                                            <i class="fa fa-eye"></i>
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