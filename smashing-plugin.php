<?php
/*
	Plugin Name: Smashing Plugin
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.1
	Author: Matthew Ray
	Author URI: http://www.matthewray.com
*/
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'werjeroen' );
$updater->set_repository( 'updater-test' );

$updater->initialize();
