<?php
/**
 * Plugin Name: WordPress Hide Dashboard Notifictions
 * Plugin URI:  https://github.com/buddhikaperera/WordPress-Dashboard-Notifications
 * Description: A plugin to remove WordPress Core, Theme and Plugin Notifictions in WordPress Dashboard
 * Author:      Buddhika Perera
 * Author URI:  https://www.buddhikaperera.com
 * Version:     1.0
 * Text Domain: wp-dash-ntfs
 * Domain Path: languages
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

 // If this file is called directly, abort.
 if ( ! defined( 'ABSPATH' ) ) {
     exit;
 }

// hide update notifications
function remove_core_updates(){
global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}

add_filter('pre_site_transient_update_core','remove_core_updates'); //hide updates for WordPress itself
add_filter('pre_site_transient_update_plugins','remove_core_updates'); //hide updates for all plugins
add_filter('pre_site_transient_update_themes','remove_core_updates'); //hide updates for all themes
