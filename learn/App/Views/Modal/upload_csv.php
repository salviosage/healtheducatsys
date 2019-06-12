<div id="csvModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Upload Clients List in a Csv
                </h4>
            </div>
            <div class="modal-body">
                <form id="frm_upload_csv">
                    <div class="form-group">
                        <label>Select Client CSV File?</label>
                        <input id="uploadFile" type="file" name="files" class="form-control" accept=".csv" required>
                    </div>
                    <div class="form-group">
                        <button id="btnUpload" type="submit" class="btn btn-success" style="display: none;">
                            UPLOAD CLIENT CSV FILE
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