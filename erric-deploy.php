<?php
/**
 * Plugin Name: Erric Deploy
 * Plugin URI: https://www.smashingmagazine.com/2015/08/deploy-wordpress-plugins-with-github-using-transients/
 * Description: Erric Playground for Testing Deploy from GitHub
 * Version: 1.1.0
 * Author: Eric Gunawan
 * Author URI: http://erricgunawan.com
 *
 */

if( ! class_exists( 'Erric_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}
$updater = new Erric_Updater( __FILE__ );
$updater->set_username( 'erricgunawan' );
$updater->set_repository( 'erric-deploy' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // auth code goes here for private repos
*/
$updater->initialize();