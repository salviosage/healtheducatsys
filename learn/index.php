<?php 
define("CONSTANTS", $_SERVER['DOCUMENT_ROOT'].'/lean/learn/App/Views/Utils/const.php');
require CONSTANTS;
require LOADER;
include ROUTER_HEAD;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>
            <?php echo $main_text; ?>
        </title>
        <?php include VIEWS.'Utils/styles.php'; ?>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">
            <?php include VIEWS.'Utils/navbar.php'; ?>
            <?php include VIEWS.'Utils/sidebar.php'; ?>
            <?php include VIEWS.'Modal/add_quiz.php'; ?>
            <?php include VIEWS.'Modal/add_question.php'; ?>
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <?php include VIEWS.'Utils/breadcrumb.php'; ?>
                        <?php 
                        if(isset($_GET['request']) && $_GET['request']!=''){
                            $request=$_GET['request'];
                            $admin_request=array("course_listing","create_course","manage_teachers","create_teacher");
                            $teacher_request=array("assigned_courses","course_credits","add_course_credit","list_credits","credit_quiz");
                            if(USER_TYPE==1){
                                if(in_array($request, $admin_request)){
                                    include VIEWS.'Admin/'.$request.'.php';
                                }
                            }elseif(USER_TYPE==2){
                                if(in_array($request, $teacher_request)){
                                   include VIEWS.'Teacher/'.$request.'.php'; 
                                }
                            }
                        }else{
                            if(USER_TYPE==1){
                                include VIEWS.'Admin/dashboard.php';
                            }
                        }
                        ?>
                    </div>

                </div>
                <?php include VIEWS.'Utils/footer.php'; ?>
            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->
        <?php include VIEWS.'Utils/script.php'; ?>
    </body>
</html>