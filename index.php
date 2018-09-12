<?php

require_once ('class.inc.php');
require_once ('sites.php');
require_once ('config.inc.php');

if (login) {

    $page = new site();

if (isset($_GET['site'])) {

    $page->show_site($_GET['site']);

    } else {
    $page->show_site('error');
}


}

?>