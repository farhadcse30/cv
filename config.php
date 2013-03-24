<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bashet
 * Date: 23/03/13
 * Time: 20:50
 * To change this template use File | Settings | File Templates.
 */

$CFG = new stdClass();

$CFG->www       = 'http://localhost';
$CFG->wwwroot   = $CFG->www.'/cv';
$CFG->dirroot   = 'C:\\wamp\\www\\cv';

$CFG->dbtype    = 'mysqli';
$CFG->dbhost    ='localhost';
$CFG->dbname    = 'cv';
$CFG->dbuser    = 'cv';
$CFG->dbpass    = 'ZA6Ttvj8jv2D9axB';

$mysqli = new mysqli($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$sql = "Select * from user where username='bashet'";

if ($result = $mysqli->query($sql)) {
    while($obj = $result->fetch_object()){
        $CFG->userid     = $obj->id;
        $CFG->username   = $obj->username;
        $CFG->intro      = $obj->intro;
        $CFG->pic        = $obj->pic;

    }
    $result->close();
}
$mysqli->close();

?>