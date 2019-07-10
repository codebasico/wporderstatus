<?php
/*
Plugin Name: WP Order Status
Plugin URI: http://www.mywebsite.com/my-first-plugin
Description: Con un Shortcode tu clientes podran ver el estado de sus pedidos
Version: 0.1
Author: Nelson Herrera
Author URI: https://www.soynelsonherrera.com
*/


require 'update/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/codebasico/wporderstatus',
	__FILE__,
	'udpate'
);

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('0c83ecaf8450b5057ccfd3918c9c45211963e80f');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');

//menu items
add_action('admin_menu','modifymenu',);
function modifymenu() {
	
	//this is the main item for the menu
	add_menu_page('Estado de Pedidos',  //page title
	'Estado de Pedidos', //menu title
	'manage_options', //capabilities
	'wp-order-status', //menu slug
	'wp_order_status_list', //function
	'dashicons-clock', //icono
	57 //Posicion
	
	);
	
	//this is a submenu
	add_submenu_page('wp-order-status', //parent slug
	'Configuración', //page title
	'Configuración', //menu title
	'manage_options', //capability
	'wp-setting', //menu slug
	'wp_orden_status_setting'); //function

	
	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Update School', //page title
	'Update', //menu title
	'manage_options', //capability
	'sinetiks_schools_update', //menu slug
	'sinetiks_schools_update'); //function
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'wp-order-status-list.php');
require_once(ROOTDIR . 'wp-order-status-setting.php');


// Example 2 : WP Shortcode to display text on page or post.
function wp_first_shortcode(){
echo "Probando codigo para ver estados de pedidos";
}
add_shortcode('wp_order_status', 'wp_first_shortcode');


