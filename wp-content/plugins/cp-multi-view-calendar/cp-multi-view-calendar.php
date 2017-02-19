<?php
/*
Plugin Name: Calendar Event Multi View
Plugin URI: http://wordpress.dwbooster.com/calendars/cp-multi-view-calendar
Description: This plugin allows you to insert event calendars into your WP website.
Version: 1.2.79
Author: CodePeople.net
Author URI: http://codepeople.net
License: GPL
*/


/* initialization / install */

define('CP_MVC_DEFER_SCRIPTS_LOADING', (get_option('CP_MVC_LOAD_SCRIPTS',"0") == "1"?true:false));

include_once dirname( __FILE__ ) . '/classes/cp-base-class.inc.php';
include_once dirname( __FILE__ ) . '/cp-main-class.inc.php';

$cp_plugin = new CP_MultiViewCalendar;
register_activation_hook(__FILE__, array($cp_plugin,'install') ); 
add_action( 'plugins_loaded', array($cp_plugin, 'data_management'));


if ( is_admin() ) {    
    add_action('admin_enqueue_scripts', array($cp_plugin,'insert_adminScripts'), 1);    
    add_filter("plugin_action_links_".plugin_basename(__FILE__), array($cp_plugin,'plugin_page_links'));   
    add_action('admin_menu', array($cp_plugin,'admin_menu') );    
} else {    
    add_shortcode( $cp_plugin->shorttag, array($cp_plugin, 'filter_content') );    
}  

?>