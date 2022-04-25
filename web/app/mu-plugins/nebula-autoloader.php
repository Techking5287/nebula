<?php
/**
 * Plugin Name:  Nebula Autoloader
 * Plugin URI:   https://github.com/eighteen73/nebula/
 * Description:  An autoloader that enables standard plugins to be required just like must-use plugins. The autoloaded plugins are included during mu-plugin loading. An asterisk (*) next to the name of the plugin designates the plugins that have been autoloaded.
 * Version:      1.0.0
 * Author:       eighteen73
 * Author URI:   https://1873.agency/
 * License:      MIT License
 *
 * @package Nebula
 */

namespace eighteen73\Nebula;

use Roots\Bedrock\Autoloader;

if ( is_blog_installed() && class_exists( Autoloader::class ) ) {
	new Autoloader();
}
