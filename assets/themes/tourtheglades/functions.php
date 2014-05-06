<?php
/**
 * AIT WordPress Theme
 *
 * Copyright (c) 2013, Affinity Information Technology, s.r.o. (http://ait-themes.com)
 */
// ==================================================
// Enables theme custom post types, widgets, etc...
// --------------------------------------------------
$aitThemeCustomTypes = array('service-box' => 33, 'testimonial' => 34, 'partners' => 35, 'icon-menu' => 36, 'grid-portfoliob' => 37, 'team' => 38);
$aitThemeWidgets = array('post', 'flickr', 'submenu', 'twitter', 'person');
$aitEditorShortcodes = array('custom','columns','images','posts','buttons','boxesFrames','lists','notifications','modal','social','video','gMaps','gChart','language','tabs','teams','gridgalleryb');
$aitThemeShortcodes = array('custom'=> 1,'columns'=> 1,'images'=> 1,'posts'=> 1,'buttons' => 1,'boxesFrames' => 2,'lists' => 1,'notifications'=> 1,'modal'=> 1,'social'=> 1,'sitemap'=> 1,'video' => 1,'gMaps'=> 1,'gChart'=> 1,'language' => 1,'tabs'=> 1,'teams' => 1,'gridgalleryb'=> 2);

// ==================================================
// Loads AIT WordPress Framework
// --------------------------------------------------
require dirname(__FILE__) . '/AIT/ait-bootstrap.php';

// ==================================================
// Metaboxes settings for Posts and Pages
// --------------------------------------------------
$pageOptions = array(
	'sections-order' => new WPAlchemy_MetaBox(array(
		'id' => '_ait_sections_order',
		'title' => __('Sections Order', 'ait'),
		'types' => array('page', 'post'),
		'context' => 'normal',
		'priority' => 'core',
		'config' => dirname(__FILE__) . '/conf/sections-order.neon'
	)),
	'slider' => new WPAlchemy_MetaBox(array(
		'id' => '_ait_slider',
		'title' => __('Slider settings', 'ait'),
		'types' => array('page', 'post'),
		'context' => 'normal',
		'priority' => 'core',
		'config' => dirname(__FILE__) . '/conf/slider.neon'
	)),
	'service-boxes' => new WPAlchemy_MetaBox(array(
		'id' => '_ait_service_boxes',
		'title' => __('Service Boxes settings', 'ait'),
		'types' => array('page', 'post'),
		'context' => 'normal',
		'priority' => 'core',
		'config' => dirname(__FILE__) . '/conf/service-boxes.neon'
	)),
	'testimonials' => new WPAlchemy_MetaBox(array(
		'id' => '_ait_testimonials',
		'title' => __('Testimonials settings', 'ait'),
		'types' => array('page', 'post'),
		'context' => 'normal',
		'priority' => 'core',
		'config' => dirname(__FILE__) . '/conf/testimonials.neon'
	)),
	'icon-menu' => new WPAlchemy_MetaBox(array(
		'id' => '_ait_icon_menu',
		'title' => __('Icon Menu settings', 'ait'),
		'types' => array('page', 'post'),
		'context' => 'normal',
		'priority' => 'core',
		'config' => dirname(__FILE__) . '/conf/icon-menu.neon'
	)),
	'partners' => new WPAlchemy_MetaBox(array(
		'id' => '_ait_partners',
		'title' => __('Partners settings', 'ait'),
		'types' => array('page', 'post'),
		'context' => 'normal',
		'priority' => 'core',
		'config' => dirname(__FILE__) . '/conf/partners.neon'
	)),
);

// ==================================================
// Theme's scripts and styles
// --------------------------------------------------
function aitEnqueueScriptsAndStyles(){
	if(!is_admin()){
		// just shortcuts
		$s = THEME_CSS_URL;
		$j = THEME_JS_URL;

		aitAddStyles(array(
			'ait-colorbox'   => array('file' => "$s/libs/colorbox.css"),
			'ait-fancybox'   => array('file' => "$s/libs/fancybox.css"),
			'jquery-ui' 	 => array('file' => "$s/libs/jquery-ui.css"),
			'prettysociable' => array('file' => "$s/libs/prettySociable.css"),
			'hoverzoom' 	 => array('file' => "$s/libs/hoverZoom.css"),
		));

		aitAddScripts(array(
			'jquery-ui-tabs'      			=> true,
			'jquery-ui-accordion' 			=> true,
			'jquery-infieldlabel' 			=> array('file' => "$j/libs/jquery-infieldlabel.js", 'deps' => array('jquery'), 'inFooter' => true),
			'jquery-iconmenu' 				=> array('file' => "$j/libs/jquery-iconmenu.js", 'deps' => array('jquery'), 'inFooter' => true),
			'jquery-plugins'	 			=> array('file' => "$j/libs/jquery-plugins.js", 'deps' => array('jquery')),
			'modernizr'						=> array('file' => "$j/libs/modernizr-2.6.1-custom.js", 'deps' => array('jquery'), 'inFooter' => true),

			'ait-gridgallery'      			=> array('file' => "$j/gridgallery.js", 'deps' => array('jquery', 'jquery-plugins'), 'inFooter' => true),
			'ait-testimonials'     			=> array('file' => "$j/testimonials.js", 'deps' => array('jquery'), 'inFooter' => true),
			'ait-script'          			=> array('file' => "$j/script.js", 'deps' => array('jquery', 'jquery-infieldlabel', 'jquery-iconmenu', 'jquery-plugins', 'modernizr'), 'inFooter' => true),
		));
	}
}
add_action('wp_enqueue_scripts', 'aitEnqueueScriptsAndStyles');

// ==================================================
// Theme setup
// --------------------------------------------------
function aitThemeSetup(){
	load_theme_textdomain('ait', get_template_directory() . '/languages');
	add_editor_style();
	add_theme_support('woocommerce');
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support( 'structured-post-formats', array('link', 'video'));

	register_nav_menu('primary-menu', __('Primary Menu', 'ait'));
	register_nav_menu('footer-menu', __('Footer Menu', 'ait'));

	add_image_size('fairytale-image-post', 723, 1391);
}
add_action('after_setup_theme', 'aitThemeSetup');

// ==================================================
// Plugins
// --------------------------------------------------
aitAddPlugins(array(
	array(
		'name'     => 'Contact Form 7',
		'slug'     => 'contact-form-7',
		'required' => false,
	),
	array(
		'name'     => 'Revolution Slider',
		'slug'     => 'revslider',
		'required' => false,
		'source'   => dirname(__FILE__) . '/plugins/revslider.zip',
	),
));

// ==================================================
// Register our sidebars and widgetized areas.
// --------------------------------------------------
function aitWidgetsInit(){
	aitRegisterWidgetAreas(array(
		'home-sidebar'		=> array('name' => __('Home Sidebar', 'ait')),
		'page-sidebar'		=> array('name' => __('Page Sidebar', 'ait')),
		'blog-sidebar'		=> array('name' => __('Blog Sidebar', 'ait')),
		'post-sidebar'		=> array('name' => __('Post Sidebar', 'ait')),
		'footer-sidebar'	=> array('name' => __('Footer Widgets Area', 'ait'))
	));
}
add_action('widgets_init', 'aitWidgetsInit');

// ==================================================
// Some helper functions and filters for theme
// --------------------------------------------------
add_filter('widget_title', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');
add_filter('home_template', 'aitIndexTemplate');

// ==================================================
// Custom functions
// --------------------------------------------------
function isHomePageTemplate($id){
	global $wpdb;
	$result = false;
	$pages = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."postmeta WHERE `meta_key` = '_wp_page_template' AND `meta_value` = 'homepage.php' ");

	foreach($pages as $page){
		if($page->post_id == $id){
			$result = true;
		}
	}

	return $result;
}

// ==================================================
// Custom filters & actions
// --------------------------------------------------
if(!isset($content_width))
	$content_width = 1000;

function aitChangeEmbedDefaults($defaults){
	$defaults['width'] = 1000;
	return $defaults;
}
add_filter('embed_defaults', 'aitChangeEmbedDefaults');


function aitWpVideoShortocdeAttrs($atts){
	$atts['width'] = 1000;
	$atts['height'] = 563;
	return $atts;
}
add_filter('shortcode_atts_video', 'aitWpVideoShortocdeAttrs');

// ==================================================
// Custom styling of admin interface of Revolution slider
// --------------------------------------------------
if(isset($revSliderVersion)){
	function aitRevSliderAdminStyles(){ wp_enqueue_style('ait-revolution-slider-admin-css', THEME_URL . '/design/admin-plugins/revslider.css'); }
	function aitRevSliderAdminScripts(){ wp_enqueue_script('ait-revolution-slider-admin-js', THEME_URL . '/design/admin-plugins/revslider.js'); }
	function addSliderSelectInputScript(){wp_enqueue_script('ait-slider-select-input-js', THEME_URL.'/design/admin-plugins/slider.js');}

	add_action('admin_print_styles', 'aitRevSliderAdminStyles');
	add_action('admin_print_scripts', 'aitRevSliderAdminScripts');
	add_action('admin_print_scripts', 'addSliderSelectInputScript');
}

function default_menu() {
	wp_nav_menu(array('menu' => 'Main Menu', 'fallback_cb' => 'default_page_menu', 'container' => 'nav', 'container_class' => 'mainmenu', 'menu_class' => 'menu clear'));
}
function default_page_menu() {
	echo '<nav class="mainmenu">';
	wp_page_menu(array('menu_class' => 'menu clear'));
	echo '</nav>';
}
