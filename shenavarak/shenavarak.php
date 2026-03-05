<?php
/*
Plugin Name: شناورک 
Description: شناورک یک افزونه دکمه شناور چندکاره برای وب‌سایت شما است که امکان برقراری چت آنلاین، تماس مستقیم و دسترسی به شبکه‌های اجتماعی را به صورت سریع و آسان فراهم می‌کند
Author: mohammad darvish
Author URI: https://darvishweb.com
Version: 1.0.0
License: GPLv2 or later
*/

if( !defined( 'ABSPATH' ) ) {
	exit;
}


define('DW_CALL_PLUGIN_PATH' , plugin_dir_path( __FILE__ ));
define('DW_CALL_PLUGIN_INCLUDES' , DW_CALL_PLUGIN_PATH . 'includes');
define('DW_CALL_PLUGIN_URL' , plugin_dir_url( __FILE__ ));

require DW_CALL_PLUGIN_PATH . '/view/dw_call_main_template.php' ;
require DW_CALL_PLUGIN_PATH . '/admin/settings.php' ;