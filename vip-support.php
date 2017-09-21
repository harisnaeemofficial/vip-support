<?php
/**
 * Plugin Name:  WordPress.com VIP Support
 * Description:  Manages the WordPress.com Support Users on your site
 * Version:      3.1.0
 * Author:       <a href="http://automattic.com">Automattic</a>
 * License:      GPLv2 or later
 */

namespace Automattic\VIP\Support_User;

require_once( __DIR__ . '/class-vip-support-role.php' );
require_once( __DIR__ . '/class-vip-support-user.php' );
require_once( __DIR__ . '/class-vip-support-api.php' );
if ( defined('WP_CLI') && WP_CLI ) {
	require_once( __DIR__ . '/class-vip-support-cli.php' );
}
