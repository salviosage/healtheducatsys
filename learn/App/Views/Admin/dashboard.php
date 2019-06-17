<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="card-box widget-box-three">
            <div class="bg-icon pull-left">
                <i class="fa fa-users"></i>
            </div>
            <div class="text-right">
                <p class="text-success m-t-5 text-uppercase font-600 font-secondary">Clients</p>
                <h2 class="m-b-10">
                    <span data-plugin="counterup">
                        <?php 
                        $Clients=$admin->clientsList();
                        echo count($Clients);
                        ?>
                    </span>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card-box widget-box-three">
            <div class="bg-icon pull-left">
                <i class="fa fa-user-plus"></i>
            </div>
            <div class="text-right">
                <p class="text-success m-t-5 text-uppercase font-600 font-secondary">Instructors</p>
                <h2 class="m-b-10">
                    <span data-plugin="counterup">
                        <?php 
                        $total_teachers=count($admin->loadUsers(2,1));
                        echo $total_teachers;
                        ?>
                    </span>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card-box widget-box-three">
            <div class="bg-icon pull-left">
                <i class="fa fa-book"></i>
            </div>
            <div class="text-right">
                <p class="text-success m-t-5 text-uppercase font-600 font-secondary">
                    Total Courses
                </p>
                <h2 class="m-b-10">
                    <span data-plugin="counterup">
                        <?php 
                        $total_course=count($admin->loadCourses('*'));
                        echo $total_course;
                        ?>
                    </span>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card-box widget-box-three">
            <div class="bg-icon pull-left">
                <i class="fa fa-hand-pointer-o"></i>
            </div>
            <div class="text-right">
                <p class="text-success m-t-5 text-uppercase font-600 font-secondary">
                    Total Client Request
                </p>
                <h2 class="m-b-10">
                    <span data-plugin="counterup">
                        <?php 
                        $CourseRequest=$admin->StudentCourseRequest();
                        echo count($CourseRequest);
                        ?>
                    </span>
                </h2>
            </div>
        </div>
    </div>
</div>