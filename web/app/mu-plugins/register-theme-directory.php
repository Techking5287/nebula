<?php
/**
 * Plugin Name:  Register Theme Directory
 * Plugin URI:   https://github.com/eighteen73/nebula/
 * Description:  Register default theme directory
 * Version:      1.0.0
 * Author:       eighteen73
 * Author URI:   https://eighteen73.agency/
 * License:      MIT License
 *
 * @package Nebula
 */

namespace eighteen73\Nebula;

if ( ! defined( 'WP_DEFAULT_THEME' ) ) {
	register_theme_directory( ABSPATH . 'wp-content/themes' );
}
