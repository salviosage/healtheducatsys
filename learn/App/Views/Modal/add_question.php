<div id="question_modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="question_quiz" class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form id="frm_save_question">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Question?</label>
                                <textarea id="question_text" name="question_text" class="form-control autogrow"  placeholder="Write something about Question?" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Answer 1</label>
                                <input id="answer1" name="answer1" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Answer 2</label>
                                <input id="answer2" name="answer2" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Answer 3</label>
                                <input id="answer3" name="answer3" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Answer 4</label>
                                <input id="answer4" name="answer4" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Answer 5</label>
                                <input id="answer5" name="answer5" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input id="quiz_id" type="hidden" name="quiz_id">
                        <button type="submit" class="btn btn-primary">
                            SAVE QUESTION & ANSWERS
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>