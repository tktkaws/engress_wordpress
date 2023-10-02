<?php

/**
 * Functions and definitions
 *
 * @package WordPress
 * @subpackage themrishvite
 */
function my_static_breadcrumb_adder($breadcrumb_trail)
{

	if (is_post_type_archive('post')) { // デフォルトの投稿一覧ページの場合

		$item = new bcn_breadcrumb('ブログ', null, array('post'));
	} elseif (get_post_type() === 'post') { // デフォルトの投稿ページの場合

		$item = new bcn_breadcrumb('ブログ', null, array('post'), home_url('post/'), null, true);
	}

	$stuck = array_pop($breadcrumb_trail->breadcrumbs); // HOME 一時退避
	$breadcrumb_trail->breadcrumbs[] = $item; // 任意の名前 追加
	$breadcrumb_trail->breadcrumbs[] = $stuck; // HOME 戻す

}
add_action('bcn_after_fill', 'my_static_breadcrumb_adder');

function post_has_archive($args, $post_type)
{
	if ('post' == $post_type) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'post'; //任意のスラッグ名
	}
	return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function console_log($data)
{
	echo '<script>';
	echo 'console.log(' . json_encode($data) . ')';
	echo '</script>';
}

function custom_excerpt_length($length)
{
	return 60;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function new_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


// admin_bar
// add_filter('show_admin_bar', '__return_false');

//develop mode config
define("IS_VITE_DEVELOPMENT", true);

//define
define('DIST_DEF', 'dist');
define('DIST_URI',  get_template_directory_uri() . '/' . DIST_DEF);
define('DIST_PATH', get_template_directory()     . '/' . DIST_DEF);

define('JS_DEPENDENCY', array()); // array( 'jquery' ) as example
define('JS_LOAD_IN_FOOTER', true); // load scripts in footer?

define('VITE_SERVER', 'http://localhost:3000');
define('VITE_ENTRY_POINT', '/main.js');

/*
 * init theme support
 */
function themrishvite_theme_support()
{
	add_theme_support('html5', array(
		'comment-form',
		'comment-list',
		'search-form',
		'gallery',
		'caption',
		'style',
		'script'
	));
	add_theme_support("post-thumbnails");
	add_theme_support('title-tag');
	add_theme_support('editor-styles');
	add_theme_support('custom-logo');
	add_theme_support('automatic-feed-links');
	register_nav_menus(array(
		'main-menu' => __('mainmenu', 'themrishvite')
	));
}
add_action('after_setup_theme', 'themrishvite_theme_support');

function cors_http_header()
{
	header("Access-Control-Allow-Origin: *");
}
add_action('send_headers', 'cors_http_header');


add_action('wp_enqueue_scripts', function () {
	if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {
		//develop mode
		function vite_head_module_hook()
		{
			echo '<script type="module" crossorigin src="' . VITE_SERVER . VITE_ENTRY_POINT . '"></script>';
		}
		add_action('wp_footer', 'vite_head_module_hook');
	} else {
		// production mode, 'npm run build' must be executed in order to generate assets

		// read manifest.json to figure out what to enqueue
		$manifest = json_decode(file_get_contents(DIST_PATH . '/manifest.json'), true);

		// is ok
		if (is_array($manifest)) {

			// get first key, by default is 'main.js'
			$manifest_key = array_keys($manifest);
			if (isset($manifest_key[0])) {
				// enqueue CSS files
				foreach (@$manifest["main.css"] as $css_file) {
					wp_enqueue_style('main', DIST_URI . '/' . $css_file);
				}
				// enqueue main JS file
				$js_file = @$manifest["main.js"]['file'];
				if (!empty($js_file)) {
					wp_enqueue_script('main', DIST_URI . '/' . $js_file, JS_DEPENDENCY, '', JS_LOAD_IN_FOOTER);
				}
			}
		}
	}
});
