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
        <p class="jqm-intro">
            <img class="profilepic" src="../images/profilepic.jpg">
            <strong>My Contact Details:</strong>
            <br><br>
            Mobile Phone: +44 (0) 792 656 9744
            <br>
            Land Phone: +44 (0) 203 648 2935
            <br><br>
            Emails: <br>
            <a href="mailto:a_bashet@yahoo.com?Subject=Hello%20from%20your%20website">a_bashet@yahoo.com</a><br>
            <a href="mailto:a.bashet@gmail.com?Subject=Hello%20from%20your%20website">a.bashet@gmail.com</a><br>
            <a href="mailto:a.bashet@ulcc.ac.uk?Subject=Hello%20from%20your%20website">a.bashet@ulcc.ac.uk</a><br>
            <a href="mailto:info@abdulbashet.com?Subject=Hello%20from%20your%20website">info@abdulbashet.com</a><br>
            <br>
            Also you can fill the form below and send it to me.
        </p>
        <form method="post" id="contact" action="thankyou.php">
            <fieldset>
                <label for="name">Enter you name:</label>
                <input name="name" id="name" value="" type="text" required="required">
                <label for="cntactno">Contact No:</label>
                <input name="cntactno" id="cntactno" value="" type="text" required="required">
                <label for="email">Email:</label>
                <input name="email" id="email" value="" type="email" required="required">
                <label for="subject">Subject:</label>
                <input name="subject" id="subject" value="" type="text" required="required">
                <label for="message">Message:</label>
                <textarea cols="40" rows="10" name="message" id="message" required="required"></textarea>
            </fieldset>
            <input value="Send to message to Abdul Bashet" data-icon="check" data-mini="true" data-theme="a" name="submit" type="submit" class="button">
        </form>
    </div><!-- /content -->

    <?php include('../common/footer.php');?><!-- /footer -->
    <?php include('../common/panel.php');?>
</div><!-- /page -->
</body>
</html>
