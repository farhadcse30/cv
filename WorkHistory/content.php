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

$sql = "SELECT work_history.title as title, work_history.employer as employer, work_history.startdate as startdate,
        work_history.enddate as enddate, work_history.descriptions as description
        FROM mywork INNER JOIN work_history ON mywork.id = work_history.work_id
        WHERE (((mywork.user)=$CFG->userid))
        ORDER BY work_history.display_order";

$content .= '<table data-role="table" id="table" data-mode="reflow" class="ui-responsive table-stroke">
                  <thead>
                        <tr>
                              <th data-priority="1">SN</th>
                              <th data-priority="persist">Job Title</th>
                              <th data-priority="2">Employer</th>
                              <th data-priority="2">Start</th>
                              <th data-priority="2">End</th>
                              <th data-priority="3">Responsibilities</th>
                             </tr>
                  </thead>
                  <tbody>';
if ($result = $mysqli->query($sql)) {
    $index = 1;
    while($obj = $result->fetch_object()){
        $content .= '<tr>
                        <th>'.$index.'</th>
                        <td>'.$obj->title.'</td>
                        <td>'.$obj->employer.'</td>
                        <td>'.$obj->startdate.'</td>
                        <td>'.$obj->enddate.'</td>
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

?>