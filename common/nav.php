<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bashet
 * Date: 23/03/13
 * Time: 16:44
 * To change this template use File | Settings | File Templates.
 */

/*
<a href="../PersonalBiography/" data-role="button" data-icon="gear" data-theme="b">Personal Biography</a>
<a href="../WorkHistory/" data-role="button" data-icon="gear" data-theme="b">Work History</a>
<a href="../EducationHistory/" data-role="button" data-icon="gear" data-theme="b">Education History</a>
<a href="../HobbiesnInterests/" data-role="button" data-icon="gear" data-theme="b">Hobbies and interests</a>
<a href="../ContactMe/" data-role="button" data-icon="gear" data-theme="b">Contact Me</a>

*/

include('./config.php');

global $CFG;

$nav = '';

$mysqli = new mysqli($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$sql = "Select personal.intro as personal,
        mywork.intro as mywork,
        education.intro as education,
        hobbies.intro as hobbies,
        contact.intro as contact
        from personal,mywork,education,hobbies,contact
        where personal.user=mywork.user and personal.user=education.user and personal.user=hobbies.user and personal.user=contact.user";

if ($result = $mysqli->query($sql)) {
    while($obj = $result->fetch_object()){
        $personal = $obj->personal;
        $mywork = $obj->mywork;
        $education = $obj->education;
        $hobbies = $obj->hobbies;
        $contact = $obj->contact;

    }
    $result->close();
}

$mysqli->close();

$nav .='<div data-role="collapsible-set" data-content-theme="c">
            <div data-role="collapsible" data-theme="b" data-content-theme="b">
                <h3>Personal Biography</h3>
                <p>'. $personal .' <a href="'.$CFG->wwwroot.'/PersonalBiography/">Please click here for my full biography</a></p>
            </div>
            <div data-role="collapsible" data-theme="b" data-content-theme="b">
                <h3>Work History</h3>
                <p>'. $mywork .' <a href="'.$CFG->wwwroot.'/WorkHistory/">Please click here for my all work history</a></p>
            </div>
            <div data-role="collapsible" data-theme="b" data-content-theme="b">
                <h3>Education History</h3>
                <p>'. $education .' <a href="'.$CFG->wwwroot.'/EducationHistory/">Please click here for my full education history</a></p>
            </div>
            <div data-role="collapsible" data-theme="b" data-content-theme="b">
                <h3>Hobbies and Interests</h3>
                <p>'. $hobbies .' <a href="'.$CFG->wwwroot.'/HobbiesnInterests/">Please click here to see my all hobbies and interests</a></p>
            </div>
            <div data-role="collapsible" data-theme="b" data-content-theme="b">
                <h3>Contact Me</h3>
                <p>'. $contact .' or  <a href="'.$CFG->wwwroot.'/ContactMe/">Please click here to send me message directly.</a></p>
            </div>
        </div>';

echo $nav;

?>