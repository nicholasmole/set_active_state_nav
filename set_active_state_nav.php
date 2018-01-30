<?php
 /**
 * Plugin Name: Set Active State Nav
 * Description: Create extra user fields
 * Version: 1.0x
 * Author: Nick Mole
 * Text Domain: sasn-set-active-state-nav
 */

//Paths for fields
require_once plugin_dir_path(__FILE__) . 'src/Helpers.php';
require_once plugin_dir_path(__FILE__) . 'src/SetActiveStateNav.php';


use Mole\SASN;
use Mole\SASN\SetActiveStateNav;
use Mole\SASN\Helpers;

new SetActiveStateNav();




?>