<div id="quiz_modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; padding-right: 17px;">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="panel-title">ADD NEW QUIZ</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <div class="row">
                                    <form id="frm_add_quiz"  method="POST" action="upload.php">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">
                                            Quiz Title
                                            </label>
                                            <input id="quiz_title" name="quiz_title" type="text" class="form-control" required>
                                        </div>
                                        <p>Quiz Summary</p>
                                        <textarea class="quiz_summary" id="elm1"></textarea>
                                        <div class="form-group" style="margin: 10px;">
                                            <input id="credit_id" type="hidden" value="<?php echo $credit_id; ?>">
                                            <button id="btn_save_course" type="submit" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5">SAVE QUIZ</button>
                                            <a href="#" class="btn btn-default btn-bordered waves-effect w-md m-b-5">CANCEL</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>