<?php
/**

 Functions
 
 */
 
 
//.................. BASIC FUNCTIONS .................. //

/* language include.*/
$lang = TEMPLATE_PATH . '/languages';
load_theme_textdomain('misfitlang', $lang);

if (!is_admin()) {
	add_action("wp_enqueue_scripts", "my_jquery_enqueue", 10);
	function my_jquery_enqueue() {

		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '3.1.1');
		wp_enqueue_script('jquery');


	}
}

//.................. BASIC FUNCTIONS .................. //

/* Below is an include to default custom fields for the posts.*/
include(TEMPLATEPATH . '/library/simple_functions.php');


/* Include Super Furu Custom Options Panel*/
require_once(TEMPLATEPATH .  '/options/options_panel.php');


 /* ................. CUSTOM POST TYPES .................... */
/* Below is an include to a default custom post type.*/
include(TEMPLATEPATH . '/library/post_types.php');

 /* ................. SOME OPTIONS FOR POSTS .................... 
/* Below is an include to a few options for your posts. */
include(TEMPLATEPATH . '/options/single-options.php');



 /* ................. SOME OPTIONS FOR PROJECTS .................... */
/* Below is an include to a few options for your projects. */
// include(TEMPLATEPATH . '/options/project-options.php');


 /* ................. CUSTOM FIELDS .................... */
/* Below is an include to a few options for your projects. */
// include(TEMPLATEPATH . '/library/custom_fields.php');



/* .................. SHORTCODES ...…… */
/* Below is an include to default custom fields for the posts.*/
// include(TEMPLATEPATH . '/library/shortcodes.php');


/* .................. SHORTCODES ...…… */
/* Below is an include to default custom fields for the posts.*/
// include(TEMPLATEPATH . '/library/widgets.php');


 /* ................. ADDITIONAL INFO FOR SHORTCODES .................... */
/* Below is an include to a few options for your projects.*/

define( 'SS_BASE_DIR', TEMPLATEPATH . '/' );
define( 'SS_BASE_URL', get_template_directory_uri() . '/' );

if (!is_admin()) add_action( 'wp_enqueue_scripts', 'enqueue_footer_scripts', 11 );
function enqueue_footer_scripts() {

	// add globals if you use to test templates
	// global $post;

	//examples:
	// wp_register_script('misfit-datepicker-ui', SS_BASE_URL . 'js/jquery-ui-1.11.4.min.js');
	// wp_enqueue_script('debounce', SS_BASE_URL . 'assets/debouncedEvents.jquery-993f82ae025551ed23406ea8216611c5.js', 'jquery', '', true);
	wp_enqueue_script('jquery');

	// wp_register_script('nexus-staging', '//nexus.ensighten.com/marriott/stage-thirdpartysites/Bootstrap.js', false);

	// testing templates
	// if(is_single() && 'meetings' == $post->post_type) {}

}