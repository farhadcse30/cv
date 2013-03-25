<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bashet
 * Date: 23/03/13
 * Time: 16:49
 * To change this template use File | Settings | File Templates.
 */
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
        <h1>Work History</h1>
        <?php include('content.php');?>
    </div><!-- /content -->

    <?php include('../common/footer.php');?><!-- /footer -->
    <?php include('../common/panel.php');?>
</div><!-- /page -->
</body>
</html>
