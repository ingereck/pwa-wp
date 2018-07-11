<?php
/**
 * PWA-WP
 *
 * @package      PWAWP
 * @author       XWP
 * @copyright    2018 XWP
 * @license      GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       PWA-WP
 * Plugin URI:        https://github.com/xwp/pwa-wp
 * Description:       Feature plugin to bring Progressive Web Apps (PWA) to Core
 * Version:           0.1.0-alpha
 * Author:            XWP and contributors
 * Author URI:        https://github.com/xwp/pwa-wp/graphs/contributors
 * Text Domain:       pwa-wp
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/xwp/pwa-wp
 * Requires PHP:      5.2
 * Requires WP:       4.9
 */

define( 'PWAWP_VERSION', '0.1.0-alpha' );
define( 'PWAWP_PLUGIN_FILE', __FILE__ );
define( 'PWAWP_PLUGIN_DIR', dirname( __FILE__ ) );

/** WP_Web_App_Manifest Class */
require PWAWP_PLUGIN_DIR . '/wp-includes/class-wp-web-app-manifest.php';

/** WP_HTTPS_Detection Class */
require PWAWP_PLUGIN_DIR . '/wp-includes/class-wp-https-detection.php';

/** WP_Service_Workers Class */
require PWAWP_PLUGIN_DIR . '/wp-includes/class-wp-service-workers.php';

/** WordPress Service Worker Functions */
require PWAWP_PLUGIN_DIR . '/wp-includes/service-workers.php';

/** Amend default filters */
require PWAWP_PLUGIN_DIR . '/wp-includes/default-filters.php';

/** WP_Offline_Page Class */
require PWAWP_PLUGIN_DIR . '/wp-includes/class-wp-offline-page.php';

$wp_web_app_manifest = new WP_Web_App_Manifest();
$wp_web_app_manifest->init();
$wp_https_detection = new WP_HTTPS_Detection();
$wp_https_detection->init();
$wp_offline_page = new WP_Offline_Page();
$wp_offline_page->init();
