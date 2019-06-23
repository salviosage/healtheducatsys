<?php 
$Teachers=$admin->clientsList();
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Client List</b></h4>
            <?php 
            if(USER_TYPE==1){
                ?>
                <button class="btn btn-success" style="margin:5px;" data-toggle="modal" data-target="#csvModal">UPLOAD CLIENT CSV</button>
                <?php
            }
            ?>
            <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="dt-buttons btn-group">
                </div>
                <div id="datatable-buttons_filter" class="dataTables_filter">

                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 53px;">Email</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 286px;">Names</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 130px;">Phone</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 65px;">Profession</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 125px;">Degree</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;">Action</th>
                </tr>
                </thead>


                <tbody>
                    <?php 
                        foreach ($Teachers as $key => $value) {
                            ?>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">
                                    <?php echo $value['email']; ?>
                                </td>
                                <td>
                                    <strong><?php echo $value['names']; ?></strong>
                                </td>
                                <td>
                                    <span class="badge badge-success">
                                        <?php echo $value['phone']; ?>
                                    </span>
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    <?php 
                                    if(USER_TYPE==1){
                                        ?>
                                        <div class="btn-group m-b-10">
                                            <a client_id="<?php echo $value['id']; ?>" names="<?php echo $value['names']; ?>" class="btn btn-danger waves-effect btn_delete_client">
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