<?php
/**
 * Plugin Name: Jetpack Unplugged by ASU Engineering
 * Description: This is a export of a few of our favorite features from Jetpack into a stand-alone plugin which doesn't require a connection to WordPress.com. (Many thanks to the plugin contributors on GitHub. <a href="https://github.com/Automattic/jetpack" target=_blank>Join the fun</a>!)
 * Author:      Steve Ryan, Fulton Schools of Engineering @ ASU
 * Author URI:  https://engineering.asu.edu
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html

 * GitHub Plugin URI: https://github.com/asuengineering/jetpack-unplugged
 * Version: 0.1
 */

// Basic security, prevents file from being loaded directly.
defined( 'ABSPATH' ) or die( 'Cheaters never prosper.' );

/** ====================================================================
 * Modules
====================================================================  */
require_once( __DIR__ . '/modules/latex.php');
require_once( __DIR__ . '/modules/widget-visibility/widget-conditions.php');


/** ====================================================================
 * Shortcodes
====================================================================  */
require_once( __DIR__ . '/modules/shortcodes/quiz.php');
require_once( __DIR__ . '/modules/shortcodes/presentations.php');
require_once( __DIR__ . '/modules/shortcodes/sitemap.php');
require_once( __DIR__ . '/modules/shortcodes/pinterest.php');
require_once( __DIR__ . '/modules/shortcodes/wufoo.php');

