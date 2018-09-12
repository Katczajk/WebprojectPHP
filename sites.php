<?php
/**
 * Created by PhpStorm.
 * User: Pilz
 * Date: 10.09.2018
 * Time: 15:08
 */

require_once ('config.inc.php');
require_once ('class.inc.php');

class site
{
    function show_site($site) {

        switch ($site) {
            case 'home':
                include ('home.inc.php');
                break;
            case 'menu';
                include('menu.inc.php');
                break;
            case 'impressum';
                include ('impressum.inc.php');
                break;
            case 'about';
                include ('about.inc.php');
                break;
             case 'error';
                  include ('error.inc.php');
                  break;
            case true;
                include ('error.inc.php');
                break;
            }

    }
    public function doBr() {
        echo '<br>';
    }

}

?>