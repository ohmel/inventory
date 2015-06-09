<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/includes/elastic/css/pullupmenu.css" />
<ul class="grid cs-style-4" style="padding: 0px">
    <li>
        <figure>
            <div><img style="width: 400px; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/7.jpg" alt="Admissions"></div>
            <figcaption>
                <h3>Admissions</h3>
                <span style="font-size: 11px">School Management System</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                    Enrollment, Conduct Tests, and Course Placement
                </div>
                <?php echo CHtml::link("Enter Admissions", array('admission/index')) ?>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <div><img style="width: 400px; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/8.jpg" alt="Grading"></div>
            <figcaption>
                <h3>Grading</h3>
                <span style="font-size: 11px">School Management System</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                Student Grades, Grading Computation, and, Report Cards
                </div>
                <a href="http://dribbble.com/shots/1118904-Game-Center">Manage Grades</a>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <div><img src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/9.jpg" alt="StudentManagement"></div>
            <figcaption>
                <h3>Student Management</h3>
                <span style="font-size: 11px">School Management System</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                    Monitor and Manage Students
                </div>
                <?php echo CHtml::link("Manage Students", array('studentMonitoring/index#/studentMonitoring')) ?>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <div><img src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/10.jpg" alt="Registrar"></div>
            <figcaption>
                <h3>Registrar</h3>
                <span style="font-size: 11px">School Management System</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                    Just Registrar
                </div>
                <a href="http://dribbble.com/shots/1116685-Settings">Manage Registry</a>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <div><img src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/11.jpg" alt="HumanResource"></div>
            <figcaption>
                <h3>Human Resource</h3>
                <span style="font-size: 11px">School Management System</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                    Master Files, Time Keeping, Performance Evaluation, and Payroll
                </div>
                <a href="http://dribbble.com/shots/1115632-Camera">Manage Workforce</a>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <div><img src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/12.jpg" alt="Library"></div>
            <figcaption>
                <h3>Library</h3>
                <span style="font-size: 11px">School Management</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                    Book Listings, Borrowing, Inventory, and Tracking
                </div>
                <a href="http://dribbble.com/shots/1117308-Phone">Enter Library</a>
            </figcaption>
        </figure>
    </li>
</ul>
