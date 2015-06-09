<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" ng-app="oSystems">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

    <!-- modernizr -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/css/default.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/includes/linkeffects/css/normalize.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/includes/linkeffects/css/demo.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/includes/linkeffects/css/component.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/css/component.css"/>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/includes/linkeffects/js/modernizr.custom.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/js/modernizr.custom.js"></script>

    <!-- elastic -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/includes/elastic/css/normalize.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/includes/elastic/fonts/font-awesome-4.2.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/includes/elastic/css/demo.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/includes/elastic/css/sidebar.css"/>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/includes/elastic/js/snap.svg-min.js"></script>

    <!-- blueprint CSS framework -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
          media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
          media="print"/>
    <link rel="stylesheet"
          href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/bootstrap/dist/css/bootstrap.css">
    <!--link rel="stylesheet" href="http://css-spinners.com/css/spinners.css" type="text/css"-->

    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
          media="screen, projection"/>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css"/>

    <!-- Angular CSS Injectors -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/ng-notify/dist/ng-notify.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/ngDialog/css/ngDialog.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/ngDialog/css/ngDialog-theme-plain.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/app/js/directives/slider/css/slider.css"/>

    <!-- Bootstrap JS -->
    <script type="text/javascript"
            src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/moment/min/moment.min.js"></script>
    <script
        src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


    <!--  DatePicker  -->
    <script type="text/javascript"
            src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet"
          href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"/>

    <!-- Angular Controllers -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/angular/angular.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/app.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/routing.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/site/controllers/siteController.js"></script>
    <script
        src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/angular-bootstrap/ui-bootstrap.min.js"></script>
    <script
        src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
    <script
        src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/userManager/controllers/userManagerController.js"></script>
    <script
        src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/userManager/controllers/addUserController.js"></script>
    <script
        src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/admission/controllers/admissionController.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/admission/controllers/testsController.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/studentMonitoring/controllers/studentMonitoringController.js"></script>


    <!-- Angular Injectors -->
    <script
        src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/angular-animate/angular-animate.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/ng-notify/dist/ng-notify.min.js"></script>
    <script
        src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/angular-route/angular-route.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/ngDialog/js/ngDialog.min.js"></script>


    <!-- Angular Services -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/userManager/services/userManagerService.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/admission/services/admissionService.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/admission/services/testsService.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/site/services/lookUpService.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/studentMonitoring/services/studentMonitoringService.js"></script>

    <!-- Angular Factories -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/factories/globals.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/underscore/underscore-min.js"></script>

    <!-- Angular Directives -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/app/js/directives/slider/slider.js"></script>

    <!-- Bootstrap Components -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/bootstrap/js/transition.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/bootstrap/js/tooltip.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/bootstrap/js/collapse.js"></script>


    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <style type="text/css">

        #menu-link-effect a {
            font-family: 'Raleway', sans-serif;
            position: relative;
            display: inline-block;
            margin: 10px 10px;
            outline: none;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 400;
            text-shadow: 0 0 1px rgba(255, 255, 255, 0.3);
            font-size: 1.10em;
        }

        nav a:hover,
        nav a:focus {
            outline: none;
        }
    </style>
</head>

<body>
<?php if (!Yii::app()->user->isGuest) { ?>
<div id="menu-link-effect">
    <section class="color-1">
        <nav class="cl-effect-1">
            <?php echo CHtml::link("Home", array('site/index')) ?>
            <?php echo CHtml::link("School Setup", array('site/index')) ?>
            <?php echo CHtml::link("Settings", array('site/admin#/userManagement')) ?>
            <?php echo CHtml::link("Logout", array('site/logout')) ?>
        </nav>
    </section>
    <!-- mainmenu -->
</div>
<br/>
<br/>
<br/>
<?php } ?>
<div class="container-fluid" id="page">
    <?php if (!Yii::app()->user->isGuest) { ?>

    <?php } else { ?>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    <?php } ?>


    <?php echo $content; ?>

    <div class="clear"></div>
    <!-- footer -->

</div>
<!-- page -->

</body>
</html>
