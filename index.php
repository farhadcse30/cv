<?php
include('config.php');
global $CFG;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.:: Abdul Bashet ::.</title>

    <link rel="stylesheet" href="style.css">

	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.3.0.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="js/jquery.js"></script>
	<script src="assets/js/jquery.mobile.demos.js"></script>
	<script src="js/jquery.mobile-1.3.0.js"></script>
</head>
<body>
    <div data-role="page" class="jqm-demos jqm-demos-index">
        <?php include("$CFG->dirroot/common/header.php");?>

	    <div data-role="content" class="jqm-content">
            <p class="jqm-intro">
                <?php
                    echo '<img class="profilepic" src="'.$CFG->pic.'">';
                    echo $CFG->intro;
                ?>
            </p>
            <?php include("$CFG->dirroot/common/nav.php");?>
        </div><!-- /content -->

        <?php include("$CFG->dirroot/common/footer.php");?><!-- /footer -->
        
        <!-- Panel Start -->
        <div data-role="panel" class="jqm-nav-panel jqm-navmenu-panel" data-position="left" data-display="reveal" data-theme="c">
            <ul data-role="listview" data-theme="d" data-divider-theme="d" data-icon="false" data-global-nav="" class="jqm-list">
                <li data-role="list-divider">Abdul Bashet</li>
                <li><a href="./">Home</a></li>
                <li><a href="PersonalBiography/">Personal Biography</a></li>
                <li><a href="WorkHistory/">Work History</a></li>
                <li><a href="EducationHistory/">Education History</a></li>
                <li><a href="HobbiesnInterests/">Hobbies and Interests</a></li>
		<li><a href="'.$CFG->wwwroot.'/Projects/">Projects</a></li>
                <li><a href="ContactMe/">Contact Me</a></li>
            </ul>
        </div> <!-- Panel End -->
    </div><!-- /page -->
</body>
</html>
