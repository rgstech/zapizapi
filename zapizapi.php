<?php

/**
 * Plugin Name: ZapiZapi
 * Plugin URI:  https://github.com/rgstech
 * Description: zapizapi icone do whatzapp.
 * Author: Rodrigo Guimarães
 * Version: 1.0.0
 * Author URI: https://github.com/rgstech
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


 if ( ! defined( 'ABSPATH' ) ) {       // Protege contra acesso direto
                                       // Protects direct file access 
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
	
}

define('ZP_PLUGIN_PATH', plugin_dir_path( __FILE__ ));

define('ZP_PLUGIN_URL', plugin_dir_url( __FILE__ ));



require_once ZP_PLUGIN_PATH . 'include/functions.php'; 

require_once ZP_PLUGIN_PATH . 'view/frontend.php';

require_once ZP_PLUGIN_PATH . 'include/init.php'; 




