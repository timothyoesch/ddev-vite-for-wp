<?php
/**
 * Plugin Name:     DDEV Vite For Wp
 * Plugin URI:      https://github.com/timothyoesch/ddev-vite-for-wp
 * Author:          github/timothyoesch
 * Author URI:      https://github.com/timothyoesch
 * Text Domain:     ddev-vite-for-wp
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ddev_Vite_For_Wp
 */
require_once __DIR__ . '/vendor/autoload.php';


/**
 * Enqueue Vite assets
 *
 */
use Kucrut\Vite;
add_action( 'wp_enqueue_scripts', function (): void {
	Vite\enqueue_asset(
		__DIR__ . '/js/dist',
		'js/src/main.js',
		[
			'handle' => 'ddev-vite-wp-script',
			'css-media' => 'all',
			'css-only' => false,
			'in-footer' => true
		]
	);
} );
