<?php 
if(isset($_GET['course']) && $_GET['course']!='' && isset($_GET['title']) && $_GET['title']!=''){
    $course_id=$function->sanitize($_GET['course']);
    $title=$function->sanitize($_GET['title']);
    $Tolearn=$admin->getWhatToLearn($course_id);
    //var_dump($Tolearn);
}else{
    $function->backHome();
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
        <button class="btn btn-danger btn_add_to_learn" course="<?php echo $course_id; ?>">ADD WHAT TO LEARN</button>
        <ul class="list-group" style="margin: 10px;">
            <?php 
            foreach ($Tolearn as $key => $value) {
                ?>
                <li class="list-group-item">
                    <a to_learn="<?php echo $value['id']; ?>" class="btn btn-danger btn-sm pull-right btn_delete_to_learn">
                        <i class="fa fa-close"></i>
                    </a>
                    <?php echo $value['to_learn']; ?>
                </li>
                <?php
            }
            ?>
        </ul>        
    </div>

    </div>
</div>
