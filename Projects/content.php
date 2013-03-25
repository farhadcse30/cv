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
$content = '';

$mysqli = new mysqli($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$sql = "SELECT project_history.title as title, project_history.project_of as project_of, project_history.startdate as startdate,
        project_history.enddate as enddate, project_history.descriptions as description, project_history.contributer as contributer, project_history.url as projecturl
        FROM project INNER JOIN project_history ON project.id = project_history.project_id
        WHERE (((project.user)=$CFG->userid))
        ORDER BY project_history.display_order";

$content .= '<table data-role="table" id="table" data-mode="reflow" class="ui-responsive table-stroke">
                  <thead>
                        <tr>
                              <th data-priority="1">SN</th>
                              <th data-priority="persist">Project Title</th>
                              <th data-priority="2">Project of</th>
                              <th data-priority="3">Start</th>
                              <th data-priority="4">End</th>
                              <th data-priority="5">Contributor</th>
                              <th data-priority="6"><abbr title="Open in new window/tab">Project url</abbr></th>
                              <th data-priority="7">Description</th>
                              <th data-priority="8"></th>
                             </tr>
                  </thead>
                  <tbody>';
if ($result = $mysqli->query($sql)) {
    $index = 1;
    
    while($obj = $result->fetch_object()){
        $content .= '<tr>
                        <th>'.$index.'</th>
                        <td>'.$obj->title.'</td>
                        <td>'.$obj->project_of.'</td>
                        <td>'.$obj->startdate.'</td>
                        <td>'.$obj->enddate.'</td>
                        <td>'.$obj->contributer.'</td>
                        <td><a href ="'. addhttp($obj->projecturl).'" data-rel="external" target="blank">URL</a></td>
                        <td>'.$obj->description.'</td>
                    </tr>';
        $index++;

    }
    $result->close();
}
$mysqli->close();

$content .= '</tbody>
             </table>';

echo $content;

function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    
    return $url;
}


?>