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

$mysqli = new mysqli($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$username = 'bashet';
$sql = "Select intro,pic from user where username='$username'";

if ($result = $mysqli->query($sql)) {
    while($obj = $result->fetch_object()){
        $intro = $obj->intro;
        $pic = $obj->pic;

    }
    $result->close();
}
$mysqli->close();
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
    </div><!-- /header -->

    <div data-role="content" class="jqm-content">
        <p class="jqm-intro">
            <?php
                echo '<img class="profilepic" src="../'.$pic.'">';
                echo $intro;
            ?>
        </p>
        <?php include('content.php');?>
    </div><!-- /content -->

    <?php include('../common/footer.php');?><!-- /footer -->
    <?php include('../common/panel.php');?>

</div><!-- /page -->
</body>
</html>
