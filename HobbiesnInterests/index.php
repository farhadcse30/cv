<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bashet
 * Date: 23/03/13
 * Time: 16:49
 * To change this template use File | Settings | File Templates.
 */
include('../config.php');

global $CFG;

$nav = '';

$mysqli = new mysqli($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$sql = "Select hobbies, interests from hobbies where status=1";

if ($result = $mysqli->query($sql)) {
    while($obj = $result->fetch_object()){
        $hobbies = $obj->hobbies;
        $interests = $obj->interests;

    }
    $result->close();
}
$mysqli->close();

$MyHobbies = array();
$MyHobbies = explode(',' , $hobbies);


$MyInterests = array();
$MyInterests = explode(',', $interests);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.:: Abdul Bashet ::.</title>

    <link rel="stylesheet" href="../style.css">

    <link rel="stylesheet"  href="../css/themes/default/jquery.mobile-1.3.0.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <script src="../js/jquery.js"></script>
    <script src="../assets/js/jquery.mobile.demos.js"></script>
    <script src="../js/jquery.mobile-1.3.0.js"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-demos-index">

    <div data-role="header" class="jqm-header">
        <h1 class="jqm-logo"><a href="../"><img src="../images/abdulbashet.png" alt="Abdul Bashet"></a></h1>
        <a href="#" class="jqm-navmenu-link" data-icon="bars" data-iconpos="notext">Navigation</a>
        <a href="#" class="jqm-search-link" data-icon="search" data-iconpos="notext">Search</a>

        <div class="jqm-search">
            <ul class="jqm-list">

                <li data-section="Widgets" data-filtertext="accordions collapsible sets content formatting grouped inset mini"><a href="widgets/accordions/">Accordion</a></li>

                <li data-section="Widgets" data-filtertext="ajax navigation navigate event method"><a href="widgets/navigation/" data-ajax="false">AJAX Navigation</a></li>
            </ul>
        </div>

    </div><!-- /header -->

    <div data-role="content" class="jqm-content">

        <p class="jqm-intro">

        </p>
        <div data-role="collapsible-set" data-content-theme="c">
            <div data-role="collapsible" data-theme="b" data-content-theme="b">
                <h3>My Hobbies</h3>
                <?php
                    foreach($MyHobbies as $hb){
                        echo '<a data-role="button" data-inline="true" data-theme="c" data-mini="true">'.$hb.'</a>';
                    }
                ?>
            </div>

            <div data-role="collapsible" data-theme="e" data-content-theme="d">
                <h3>My Interests</h3>
                <?php
                foreach($MyInterests as $interest){
                    echo '<a data-role="button" data-inline="true" data-theme="c" data-mini="true">'.$interest.'</a>';
                }
                ?>
            </div>
        </div>

    </div><!-- /content -->

    <?php include('../common/footer.php');?><!-- /footer -->
    <?php include('../common/panel.php');?>
</div><!-- /page -->
</body>
</html>
