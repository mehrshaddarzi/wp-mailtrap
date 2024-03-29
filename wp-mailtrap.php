<?php
/*
Plugin Name: Mailtrap.io Test Email
Plugin URI: https://mailtrap.io/
Description: Mailtrap.io Test Email
Author: Mehrshad Darzi
Version: 500.0
Author URI: https://realwp.net
*/
function wp_mailtrap( $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->Host     = 'smtp.mailtrap.io';
	$phpmailer->SMTPAuth = true;
	$phpmailer->Port     = 2525;
	$phpmailer->Username = MAILTRAP_USERNAME;
	$phpmailer->Password = MAILTRAP_PASSWORD;
}

// If only in LocalHost
// in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) and 

if ( defined('MAILTRAP_USERNAME') and defined('MAILTRAP_PASSWORD') ) {
	add_action( 'phpmailer_init', 'wp_mailtrap', 99 );
}
