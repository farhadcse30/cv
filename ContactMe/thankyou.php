<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bashet
 * Date: 23/03/13
 * Time: 16:49
 * To change this template use File | Settings | File Templates.
 */


if(isset($_POST['submit'])==true){
    $to             = 'info@abdulbashet.com';
    $sender         = $_POST['name'];
    $sender_phone   = $_POST['cntactno'];
    $sender_email   = $_POST['email'];
    $subject        = $_POST['subject'];
    $message        = $_POST['message'];

    $sub    = 'A message received from your CV site! Please respond as quick as possible';

    $msg  = "Sender Name: $sender\n";
    $msg .= "Phone No: $sender_phone\n";
    $msg .= "Subject: $subject\n";
    $msg .= "Message: $message\n";

    $headers = "From: $sender_email";


    $ok = mail($to, $sub, $msg, $headers);
}
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
            require_once('../config.php');
            global $CFG;
            if($ok){
                echo 'Thank you very much for your message. Your message has been successfully sent to Abdul Bashet.
                    <br><br>
                    You ware advised to call to mobile phone for faster response.<br><br>
                    <a href="'.$CFG->wwwroot.'">Please click here to go to main page</a>';
            }else{
                echo 'It was not possible to send your message. Please call to 07926569744.';
            }
            ?>

        </p>

    </div><!-- /content -->

    <?php include('../common/footer.php');?><!-- /footer -->
    <?php include('../common/panel.php');?>
</div><!-- /page -->
</body>
</html>
