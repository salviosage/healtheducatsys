<div id="posterModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Add Course Poster Image
                </h4>
            </div>
            <div class="modal-body">
                <form id="frm_upload_course_poster">
                    <div class="form-group">
                        <label>Select Image  File?</label>
                        <input id="uploadFile" type="file" name="file" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input id="course_id" type="hidden" name="course_id">
                        <button id="btnUpload" type="submit" class="btn btn-success">
                            UPLOAD COURSE POSTER
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>