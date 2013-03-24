<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bashet
 * Date: 24/03/13
 * Time: 20:00
 * To change this template use File | Settings | File Templates.
 */
include('../config.php');
global $CFG;

$mysqli = new mysqli($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$user =1;
$sql = "Select description from personal where user=$user";

if ($result = $mysqli->query($sql)) {
    while($obj = $result->fetch_object()){
        $description = $obj->description;
    }
    $result->close();
}
$mysqli->close();

$content = '';

$content .= $description;

echo $content;

?>