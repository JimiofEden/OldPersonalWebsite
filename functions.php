<?php


// ******************* Sidebars ****************** //

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Pages',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

// ******************* Add Custom Menus ****************** //

add_theme_support( 'menus' );

// ******************* Add Custom Excerpt Lengths ****************** //

function wpe_excerptlength_index($length) {
    return 100;
}

function wpe_excerptlength_blog($length) {
    return 125;
}

function wpe_excerptmore($more) {
    return '...';
}

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

// ******************* Add Post Thumbnails ****************** //

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 491, 246, true );
add_image_size( 'blog', 752, 377, true );
add_image_size( 'staff', 313, 157, true );

// ******************* Add Custom Post Types & Taxonomies ****************** //

register_post_type('staff', array(
	'label' => __('Staff'),
	'singular_label' => __('Staff'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => true,
	'query_var' => false,
	'has_archive' => true,
	'supports' => array('title', 'editor', 'thumbnail')
));

register_post_type('slider', array(
	'label' => __('Slider'),
	'singular_label' => __('Slider'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => true,
	'query_var' => false,
	'has_archive' => true,
	'supports' => array('title', 'thumbnail')
));

add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
    register_taxonomy( 'staff-categories', 'staff', array( 'hierarchical' => true, 'label' => 'Staff Categories', 'query_var' => true, 'rewrite' => true ) );
}


// ******************* Add Options to Theme Customizer ****************** //


function adam_customize_register($wp_customize){

	/**Social Media**/

    $wp_customize->add_section('adam_social', array(
	    'title' => __('Social Media', 'adam'),
	    'priority' => 130,
	));

	// Facebook

	$wp_customize->add_setting('adam_theme_options[adam_fb]', array(
	    'default'        => '',
	    'capability'     => 'edit_theme_options',
	    'type'           => 'option',
	));

	$wp_customize->add_control('adam_fb', array(
	    'label'      => __('Facebook URL', 'adam'),
	    'section'    => 'adam_social',
	    'settings'   => 'adam_theme_options[adam_fb]',
	));

	// Instagram

	$wp_customize->add_setting('adam_theme_options[adam_ig]', array(
	    'default'        => '',
	    'capability'     => 'edit_theme_options',
	    'type'           => 'option',
	));

	$wp_customize->add_control('adam_ig', array(
	    'label'      => __('Instagram Username', 'adam'),
	    'section'    => 'adam_social',
	    'settings'   => 'adam_theme_options[adam_ig]',
	));

	// Twitter

	$wp_customize->add_setting('adam_theme_options[adam_tw]', array(
	    'default'        => '',
	    'capability'     => 'edit_theme_options',
	    'type'           => 'option',
	));

	$wp_customize->add_control('adam_tw', array(
	    'label'      => __('Twitter Username', 'adam'),
	    'section'    => 'adam_social',
	    'settings'   => 'adam_theme_options[adam_tw]',
	));

	/**Footers**/

    $wp_customize->add_section('adam_footer', array(
	    'title' => __('Footers', 'adam'),
	    'priority' => 135,
	));

	// Supported By Message

	$wp_customize->add_setting('adam_theme_options[adam_supported]', array(
	    'default'        => '',
	    'capability'     => 'edit_theme_options',
	    'type'           => 'option',
	));

	$wp_customize->add_control('adam_supported', array(
	    'label'      => __('Supported By Message', 'adam'),
	    'section'    => 'adam_footer',
	    'settings'   => 'adam_theme_options[adam_supported]',
	));

	// Email

	$wp_customize->add_setting('adam_theme_options[adam_email]', array(
	    'default'        => '',
	    'capability'     => 'edit_theme_options',
	    'type'           => 'option',
	));

	$wp_customize->add_control('adam_email', array(
	    'label'      => __('Email', 'adam'),
	    'section'    => 'adam_footer',
	    'settings'   => 'adam_theme_options[adam_email]',
	));
}

add_action('customize_register', 'adam_customize_register');


// ******************* Add Shortcode ****************** //

function secondaryCallout($atts, $content = null) {
	extract(shortcode_atts(array(
	'link'	=> '#',
    'link_title'	=> '',
    'content'	=> '',
    ), $atts));

	$out = '
		<div class="secondaryCallout tertiaryColorBkg">
			'.$content.' <a class="secondaryColorText" title="'.$link_title.'" href="'.$link.'">'.$link_title.' &gt;</a>
		</div>
	';

    return $out;
}

add_shortcode('secondary_callout', 'secondaryCallout');

add_filter('widget_text', 'do_shortcode');

?>