<?php
/**
 * paperlink functions and definitions
 *
 * @package WordPress
 * @subpackage paperlink
 * @since paperlink 1.0
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since paperlink 1.0
 */
 load_theme_textdomain( 'paperlink' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'paperlink' ),
		'header'  => __( 'Header menu', 'paperlink' ),
		'footer'  => __( 'Footer menu', 'paperlink' ),
	) );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );
	/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */
 
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>
<?php
}
/*
* Creating a function to create widget
*/
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'paperlink' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'paperlink' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );




/*
* Creating a function to create our slider
*/

function slider_post_type() {
	$labels = array(
		'name'                => _x( 'Slider', 'Post Type General Name', 'paperlink' ),
		'singular_name'       => _x( 'slider', 'Post Type Singular Name', 'paperlink' ),
		'menu_name'           => __( 'slider', 'paperlink' ),
		'parent_item_colon'   => __( 'Parent slider', 'paperlink' ),
		'all_items'           => __( 'All slider', 'paperlink' ),
		'view_item'           => __( 'View slider', 'paperlink' ),
		'add_new_item'        => __( 'Add New slider', 'paperlink' ),
		'add_new'             => __( 'Add New', 'paperlink' ),
		'edit_item'           => __( 'Edit slider', 'paperlink' ),
		'update_item'         => __( 'Update slider', 'paperlink' ),
		'search_items'        => __( 'Search slider', 'paperlink' ),
		'not_found'           => __( 'Not Found', 'paperlink' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'paperlink' ),
	);
	$args = array(
		'label'               => __( 'Slider', 'paperlink' ),
		'description'         => __( 'Slider news and reviews', 'paperlink' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post_type', 0 );





/*
* Creating a function to create our Strategy
*/

function Strategy_post_type() {
	$labels = array(
		'name'                => _x( 'Strategy', 'Post Type General Name', 'paperlink' ),
		'singular_name'       => _x( 'Strategy', 'Post Type Singular Name', 'paperlink' ),
		'menu_name'           => __( 'Strategy', 'paperlink' ),
		'parent_item_colon'   => __( 'Parent Strategy', 'paperlink' ),
		'all_items'           => __( 'All Strategy', 'paperlink' ),
		'view_item'           => __( 'View Strategy', 'paperlink' ),
		'add_new_item'        => __( 'Add New Strategy', 'paperlink' ),
		'add_new'             => __( 'Add New', 'paperlink' ),
		'edit_item'           => __( 'Edit Strategy', 'paperlink' ),
		'update_item'         => __( 'Update Strategy', 'paperlink' ),
		'search_items'        => __( 'Search Strategy', 'paperlink' ),
		'not_found'           => __( 'Not Found', 'paperlink' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'paperlink' ),
	);
	$args = array(
		'label'               => __( 'Strategy', 'paperlink' ),
		'description'         => __( 'Strategy news and reviews', 'paperlink' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'Strategy', $args );
}
add_action( 'init', 'Strategy_post_type', 0 );






/*
* Creating a function to create our service
*/

function service_post_type() {
	$labels = array(
		'name'                => _x( 'service', 'Post Type General Name', 'paperlink' ),
		'singular_name'       => _x( 'service', 'Post Type Singular Name', 'paperlink' ),
		'menu_name'           => __( 'service', 'paperlink' ),
		'parent_item_colon'   => __( 'Parent service', 'paperlink' ),
		'all_items'           => __( 'All service', 'paperlink' ),
		'view_item'           => __( 'View service', 'paperlink' ),
		'add_new_item'        => __( 'Add New service', 'paperlink' ),
		'add_new'             => __( 'Add New', 'paperlink' ),
		'edit_item'           => __( 'Edit service', 'paperlink' ),
		'update_item'         => __( 'Update service', 'paperlink' ),
		'search_items'        => __( 'Search service', 'paperlink' ),
		'not_found'           => __( 'Not Found', 'paperlink' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'paperlink' ),
	);
	$args = array(
		'label'               => __( 'service', 'paperlink' ),
		'description'         => __( 'service news and reviews', 'paperlink' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'service', $args );
}
add_action( 'init', 'service_post_type', 0 );













// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');
/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_excerpt_support_for_pages' );
/**
 * Add Subtitle in admin post
 *
 * @param WP_Post $post Post object.
 *
 * @return void
 */
function subtitle( $post ) {

	if ( ! in_array( $post->post_type, [ 'post', 'page' ], true ) ) {
		return;
	}

	// The subtitle field.
	$_stitle = sanitize_text_field( get_post_meta( $post->ID, '_subtitle', true ) );
	
    echo '<div class="inside">';
	echo '<div id="edit-slug-box" class="hide-if-no-js">';
	echo '<label for="subtitle"><strong>' . __( 'Sub Title: ' ) . '</strong></label>';
    echo '<input type="text" name="subtitle" id="subtitle" value="' .  $_stitle . '" size="30" spellcheck="true" autocomplete="off" />';
	echo '</div>';
    echo '</div>';	
}

/**
 * Save Subtitle
 *
 * @param int     $post_ID Post ID.
 * @param WP_Post $post    Post object.
 * @param bool    $update  Whether this is an existing post being updated or not.
 *
 * @return void
 */
function save_subtitle( $post_ID, $post, $update ) {

	if ( ! in_array( $post->post_type, [ 'post', 'page' ], true ) ) {
		return;
	}

	// Prevent to execute twice.
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return;
	}

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

	// Get the subtitle value from $_POST.
	$_stitle = filter_input( INPUT_POST, 'subtitle', FILTER_SANITIZE_STRING );

	if ( $update ) {
		// Update the post meta.
		update_post_meta( $post_ID, '_subtitle', sanitize_text_field( $_stitle ) );
	} else if ( ! empty ( $_stitle ) ) {
		// Add unique post meta.
		add_post_meta( $post_ID, '_subtitle', sanitize_text_field( $_stitle ), true );
	}
}

add_action( 'edit_form_after_title', 'subtitle', 20 );
add_action( 'wp_insert_post', 'save_subtitle', 20, 3 );