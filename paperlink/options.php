<?php

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}
function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'paperlink' ),
		'two' => __( 'Two', 'paperlink' ),
		'three' => __( 'Three', 'paperlink' ),
		'four' => __( 'Four', 'paperlink' ),
		'five' => __( 'Five', 'paperlink' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'paperlink' ),
		'two' => __( 'Pancake', 'paperlink' ),
		'three' => __( 'Omelette', 'paperlink' ),
		'four' => __( 'Crepe', 'paperlink' ),
		'five' => __( 'Waffle', 'paperlink' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'Basic Settings', 'paperlink' ),
		'type' => 'heading'
	);
    $options[] = array(
		'name' => __( 'Add Logo', 'paperlink' ),
		'placeholder' => __( 'upload logo.', 'paperlink' ),
		'id' => 'paperlink_logo',
		'type' => 'upload'
	);

	    $options[] = array(
		'name' => __( 'Add Ratina Logo', 'paperlink' ),
		'placeholder' => __( 'upload ratina logo.', 'paperlink' ),
		'id' => 'ratina_logo',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Add Footer Logo', 'paperlink' ),
		'placeholder' => __( 'upload Footer logo.', 'paperlink' ),
		'id' => 'footer_logo',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'Download Form', 'paperlink' ),
		'placeholder' => __( 'upload form', 'paperlink' ),
		'id' => 'link',
		'type' => 'upload'
	);
	
	
	
	
	$options[] = array(
		'name' => __( 'Phone No:', 'paperlink' ),
		'placeholder' => __( 'Enter Phone No.', 'paperlink' ),
		'id' => 'phone',
		'std' => '+61 0280064761',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Email:', 'paperlink' ),
		'placeholder' => __( 'Enter Email Address.', 'paperlink' ),
		'id' => 'email',
		'std' => 'sales@yourwebsite.com',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Address:', 'paperlink' ),
		'placeholder' => __( 'Your Address.', 'paperlink' ),
		'id' => 'address',
		'type' => 'textarea'
	);

		$options[] = array(
		'name' => __( 'Linkdin:', 'paperlink' ),
		'placeholder' => __( 'Linkdin link.', 'paperlink' ),
		'id' => 'linkdin',
		'std' => '#',
		'type' => 'text'
	);

    $options[] = array(
		'name' => __( 'Facebook:', 'paperlink' ),
		'placeholder' => __( 'Enter Facebook link.', 'paperlink' ),
		'id' => 'facebook',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Instagram:', 'paperlink' ),
		'placeholder' => __( 'Enter instagram link', 'paperlink' ),
		'id' => 'instagram',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Youtube:', 'paperlink' ),
		'placeholder' => __( 'Enter Youtube link', 'paperlink' ),
		'id' => 'youtube',
		'std' => '#',
		'type' => 'text'
	);



	$options[] = array(
		'name' => __( 'Footer Text', 'paperlink' ),
		'type' => 'heading'
	);

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Footer About Text', 'paperlink' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'paperlink' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'footer_text',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	return $options;
}