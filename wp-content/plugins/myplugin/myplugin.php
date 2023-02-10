<?php
/*
* Plugin Name:       ECV
* Plugin URI:        https://example.com/plugins/the-basics/
* Description:       Super plugin ECV.
* Version:           1.10.3
* Requires at least: 5.2
* Requires PHP:      7.2
* Author:            Florian
* Author URI:        https://author.example.com/
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Update URI:        https://example.com/ecv/
* Text Domain:       myplugin
* Domain Path:       /languages
*/

if(!defined('ABSPATH')) {
	exit;
}

class ECVPlugin {
	public function __construct() {
	}

	public function initialize() {

		//i18n
		load_plugin_textdomain('myplugin', false, dirname(plugin_basename(__FILE__)) . '/languages/');

		// Register assets
		function myplugin_enqueue_assets() {

		}
		add_action('wp_enqueue_scripts', 'myplugin_enqueue_assets');

		include_once plugin_dir_path(__FILE__) . 'includes/admin/myplugin-admin-config.php';

		if(is_admin()) {

		}

		$this->sayHello();
	}

	public function sayHello() {
		add_action('admin_footer_text', function () {echo "Le plugin ECV est activé";});
		add_action('init',[(new MyPlugin_Admin()), 'register']);
	}

}

function myplugin()
{
	global $myplugin;

	// Instantiate only once.
	if (!isset($myplugin)) {
		$myplugin = new ECVPlugin();
		$myplugin->initialize();
	}
	return $myplugin;
}

myplugin();
