<?php
/**
 * Plugin Name:       Use MailHog
 * Plugin URI:        https://github.com/csalzano/use-mailhog
 * Description:       Configure WordPress on Valet to use MailHog
 * Author:            Daniel Bishop, Corey Salzano
 * Version:           1.0.1
 * Tags:              laravel valet, mailhog, local, email
 *
 * @since             1.0.0
 * @package           use-mailhog
 * @author            Daniel Bishop <bishless@gmail.com>
 * @author            Corey Salzano <938411+csalzano@users.noreply.github.com>
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'phpmailer_use_mailhog' ) ) {
	add_action( 'phpmailer_init', 'phpmailer_use_mailhog', 10, 1 );
	/**
	 * Callback function on phpmailer_init. Initializes phpmailer to use MailHog
	 * while running WordPress in Laravel Valet.
	 *
	 * @param  PHPMailer $phpmailer The PHPMailer instance (passed by reference).
	 * @return void
	 */
	function phpmailer_use_mailhog( $phpmailer ) {
		// Define that we are sending with SMTP.
		$phpmailer->isSMTP();

		// The hostname of the mailserver.
		// phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase
		$phpmailer->Host = 'localhost';

		// Use SMTP authentication.
		// phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase
		$phpmailer->SMTPAuth = false;

		// SMTP port number.
		// Mailhog normally run on port 1025.
		// phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase
		$phpmailer->Port = defined( 'WP_DEBUG' ) && WP_DEBUG ? '1025' : '25';
	}
}
