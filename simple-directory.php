<?php
/**
 * Plugin Name: Phone Directory
 * Plugin URI: http://contexta.ca/phone-directory/
 * Description: Creates a very simple business listing post type.
 * Version:1.0
 * Plugin Type: Piklist
 * Text Domain: simple-dir
 * Domain Path: /languages
 */

// Launch the plugin.
//Include the Piklist Checker

	define('SDIR_PLUGIN_URL', untrailingslashit(plugins_url('', __FILE__)));

	global $sdir_version;

	 $sdir_version = '1.6.3';

	  if (!defined('SDIR_VERSION_KEY'))
	      define('SDIR_VERSION_KEY', 'sdir_version');

	  if (!defined('SDIR_VERSION_NUM'))
	      define('SDIR_VERSION_NUM', '1.0.0');


	  add_option(SDIR_VERSION_KEY, SDIR_VERSION_NUM);
	  global $sdir_current_version;
	  $sdir_current_version = get_option(SDIR_VERSION_NUM);
		if ($sdir_version != $current_version){

		update_option('SDIR_VERSION_NUM',$sdir_version);
		 }
add_action('init', 'simple_dir_check_piklist');
function simple_dir_check_piklist()
{
  if(is_admin())
  {
   include_once('class-piklist-checker.php');

   if (!piklist_checker::check(__FILE__))
   {
     return;
   }
  }
}
add_action( 'plugins_loaded', 'simple_dir_load_textdomain' );
/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function simple_dir_load_textdomain() {
  load_plugin_textdomain( 'simple-dir', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}


//Load The Templates
add_filter( 'template_include', 'simple_dir_load_templates' );
function simple_dir_load_templates( $template )
{
 if ( 'listing' === get_post_type() && is_single() )
 return dirname( __FILE__ ) . '/templates/single-listing.php';
	if ( 'listing' === get_post_type() && is_archive())
		return dirname(__FILE__) . '/templates/archive-listing.php';

 return $template;
}

//Create The Listing
include_once ('includes/create-listing.php');
//Edit The List Post Page

//Activate Sitelinks Search Box
include_once ('includes/sitelinks-searchbox-markup.php');
//Get The Shortcodes
include_once ('includes/shortcodes.php');

//Get The Template Functions
include_once('includes/template-classes.php');
include_once('includes/template-link-bar-functions.php');
//include_once('includes/template-parts.php');
include_once('includes/template-title-functions.php');
include_once('includes/template-address-functions.php');
include_once('includes/template-map-directions-functions.php');
//Output the Settings
include_once ('includes/settings-output.php');
//Output Custom css
include_once('includes/custom-css.php');
//Customize the Query
include_once ('includes/query.php');
//Allow HTML in Category Descriptions
include_once('includes/html-in-categories.php');
//Enable Category images
include_once('includes/category-images.php');
//Enable Advanced Search
include_once('includes/advanced-search.php');

//Enable Import/ Export Feature
if(is_admin()){
//	include_once('includes/tools.php');
}
//Create The Settings Page
  add_filter('piklist_admin_pages', 'simple_directory_setting_pages');
  function simple_directory_setting_pages($pages)
  {
     $pages[] = array(
      'page_title' => __('Simple Directory Settings')
      ,'menu_title' => __('Settings', 'piklist')
      ,'sub_menu' => 'edit.php?post_type=listing'
      ,'capability' => 'manage_options'
      ,'menu_slug' => 'sdir-settings'
      ,'setting' => 'simple_directory_settings'
      ,'menu_icon' => plugins_url('piklist/parts/img/piklist-icon.png')
      ,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
      ,'single_line' => true
      ,'default_tab' => 'Basic'
      ,'save_text' => 'Save  Settings'
    );
		return $pages;
  }

  

add_action('wp_head','hook_font_css');
function hook_font_css() {

	$output="<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>";
	echo $output;

}

  
  
// Load Styles
function simple_directory_styles() {

	wp_register_style ('normalize', plugins_url('phone-directory/css/normalize.css', dirname(__FILE__)), false, false);

	wp_enqueue_style ('normalize');
	$directory_settings = get_option('simple_directory_settings');


        wp_enqueue_script( 'custome-js', plugins_url('phone-directory/js/custom-js.js', dirname(__FILE__)), array('jquery'), '3.3.7', true );
        
        wp_enqueue_script( 'jui', 'http://code.jquery.com/ui/1.12.0/jquery-ui.js', array('jquery'), '3.3.7', true );

        wp_register_style('phone-directory-style', plugins_url('phone-directory/style.css', dirname(__FILE__)),false, false);
        wp_enqueue_style('phone-directory-style');


}

add_action( 'wp_enqueue_scripts', 'simple_directory_styles');



function eh_add_product_tracking_code(){
      ?>
      <style>
      .modal-backdrop.in{
        opacity: 0 !important;
    }
    </style>
<?php
    }

  add_action('wp_footer', 'eh_add_product_tracking_code');