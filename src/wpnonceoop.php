<?php
/*
Plugin Name:  WP Nonce URL via OOP
Plugin URI:   https://github.com/neilbannet/nonces-wp-oop
Description:  Demonstration of using WordPress nonces with object oriented approach
Version:      0.1
Author:       WordPress.org
Author URI:   https://github.com/neilbannet/nonces-wp-oop
License:      MIT
License URI:  https://opensource.org/licenses/MIT
Text Domain:  wpnonceoop
*/

define( 'NONCE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( NONCE_PLUGIN_DIR . 'class.WP_Nonce_Class.php' );