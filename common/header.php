<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bashet
 * Date: 24/03/13
 * Time: 17:36
 * To change this template use File | Settings | File Templates.
 */
require_once('./config.php');

global $CFG;

$content = '';

$content .= '<div data-role="header" class="jqm-header">
                <h1 class="jqm-logo"><a href=""><img src="./images/abdulbashet.png" alt="Abdul Bashet"></a></h1>
                <a href="#" class="jqm-navmenu-link" data-icon="bars" data-iconpos="notext">Navigation</a>
                <a href="#" class="jqm-search-link" data-icon="search" data-iconpos="notext">Search</a>

                <div class="jqm-search">
                    <ul class="jqm-list">

                    </ul>
                </div>

            </div>';

echo $content;

?>