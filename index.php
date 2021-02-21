<?php
/**
 * @file    index.php
 * @brief   This file is the rooter managing the link with controllers.
 * @author  Craeted by Mikael Juillet
 * @author  Updated by Mikael Juillet
 * @version 0.1 || 13.02.2021
 */

require "controler/navigation.php";

if (isset($_GET["action"])){
    $action = $_GET["action"];
    switch ($action){
        case 'home':
            home();
        break;
        default:
            home();
    }

}else {
    home();
}




?>