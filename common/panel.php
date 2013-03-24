<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bashet
 * Date: 23/03/13
 * Time: 20:33
 * To change this template use File | Settings | File Templates.
 */

include('../config.php');
global $CFG;

$panel = '';
$panel .= '<div data-role="panel" class="jqm-nav-panel jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="c">
                <ul data-role="listview" data-theme="d" data-divider-theme="d" data-icon="false" class="jqm-list">
                <li data-role="list-divider">Abdul Bashet</li>
                <li><a href="'.$CFG->wwwroot.'">Home</a></li>
                <li><a href="'.$CFG->wwwroot.'/PersonalBiography/">Personal Biography</a></li>
                <li><a href="'.$CFG->wwwroot.'/WorkHistory/">Work History</a></li>
                <li><a href="'.$CFG->wwwroot.'/EducationHistory/">Education History</a></li>
                <li><a href="'.$CFG->wwwroot.'/HobbiesnInterests/">Hobbies and Interests</a></li>
                <li><a href="'.$CFG->wwwroot.'/ContactMe/">Contact Me</a></li>
            </ul>
        </div>';

echo $panel;

?>