<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
            	<li class="menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="index" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span> </a>
                </li>
                <?php 
                if(USER_TYPE==1){
                    ?>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-file-pdf-o"></i> <span>Manage Courses </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="?request=create_course">Create new Course</a></li>
                            <li><a href="?request=course_listing">Courses Listing</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-users"></i> <span>Manage Clients </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="?create_course">Create new Client</a></li>
                            <li><a href="?request=clients_list">Clients Listing</a></li>
                            <li><a href="?request=requested_courses">
                                Requested Courses
                            </a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="?request=system_users" class="waves-effect"><i class="fa fa-user-times"></i><span> System Users </span> </a>
                    </li>
                   <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-plus"></i> <span>Manage Teachers </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="?request=create_course">Create new Teacher</a></li>
                            <li><a href="?request=unverified_teachers">Unverified Teachers</a></li>
                            <li>
                                <a href="?request=manage_teachers">
                                    All Teachers
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="has_sub">
                    <a href="index?request=contact_us" class="waves-effect"><i class="fa fa-download"></i><span> Contact Us
                        <?php 
                        $Messages=$admin->getPublicMessage("UNREAD",0);
                        if(count($Messages)>0){
                            ?>
                            <span class="label label-danger pull-right">
                                <?php echo count($Messages); ?>
                            </span>
                            <?php
                        }
                        ?>
                            
                        </span> </a>
                </li>
                <li class="has_sub">
                    <a href="?request=newsletters_subscribers" class="waves-effect"><i class="fa fa-newspaper-o"></i>
                        <span> NewsLetters </span> </a>
                </li>
                    <?php
                }elseif(USER_TYPE==2){
                    ?>
                    <li class="has_sub">
                        <a href="?request=assigned_courses" class="waves-effect"><i class="fa fa-file-word-o"></i><span> Assigned Courses</span> </a>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-file-pdf-o"></i> <span>Course Credits </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="?request=add_course_credit">Create new Credit</a></li>
                            <li><a href="?request=list_credits">Credit Listing</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="?request=manage_quiz" class="waves-effect"><i class="fa fa-comments-o"></i><span> Manage Quiz</span> </a>
                    </li>
                    <?php
                }elseif(USER_TYPE==4){
                ?>
                    <li class="has_sub">
                        <a href="?request=clients_list" class="waves-effect">
                            <i class="fa fa-users"></i>
                            <span> Clients </span> </a>
                    </li>
                    <li class="has_sub">
                        <a href="?request=manage_teachers" class="waves-effect">
                            <i class="fa fa-user-plus"></i>
                            <span> Instructors </span> </a>
                    </li>
                    <li class="has_sub">
                        <a href="?request=course_listing" class="waves-effect">
                            <i class="fa fa-book"></i>
                            <span> Courses </span> </a>
                    </li>
                <?php
                }
                ?>
                    <li class="has_sub">
                        <a href="logoff" class="waves-effect"><i class="fa fa-sign-out"></i><span> Sign Out</span> </a>
                    </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

        <div class="help-box">
            <h5 class="text-muted m-t-0">For Help ?</h5>
            <p class=""><span class="text-custom">Email:</span> <br/> support@support.com</p>
            <p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+123) 123 456 789</p>
        </div>

    </div>
    <!-- Sidebar -left -->

</div>