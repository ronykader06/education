<?php

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/assets/images');

function edu_add_scripts() {
	wp_enqueue_style( 'edu-normalize', THEMEROOT.'/assets/css/normalize.css' );
	wp_enqueue_style( 'edu-uikit', THEMEROOT.'/assets/css/uikit.min.css' );
	wp_enqueue_style( 'edu-bootstrap', THEMEROOT.'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'edu-font-awesome', THEMEROOT.'/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'edu-slicknav', THEMEROOT.'/assets/css/slicknav.css' );
	wp_enqueue_style( 'edu-flexslider', THEMEROOT.'/assets/css/flexslider.css' );
	wp_enqueue_style( 'edu-flexslider', THEMEROOT.'/assets/css/flexisel.css' );
	wp_enqueue_style( 'edu-flexslider', THEMEROOT.'/assets/css/animate.css' );
	wp_enqueue_style( 'edu-style', THEMEROOT.'/style.css' );
	wp_enqueue_style( 'edu-responsive', THEMEROOT.'/assets/css/responsive.css' );
  

	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'edu-bootstrap', THEMEROOT .'/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'edu-mix', THEMEROOT .'/assets/js/jquery.mixitup.min.js', array('jquery'),false );
    wp_enqueue_script( 'edu-plugins', THEMEROOT .'/assets/js/plugins.js', array('jquery'), false, true);
    wp_enqueue_script( 'edu-slicknav', THEMEROOT .'/assets/js/jquery.slicknav.min.js', array('jquery' ), false, true);
    wp_enqueue_script( 'edu-jquery', THEMEROOT .'/assets/js/jquery.flexslider.js', array('jquery'), false, true);
    wp_enqueue_script( 'edu-flexisel', THEMEROOT .'/assets/js/jquery.flexisel.js', array('jquery'), false, true );
    wp_enqueue_script( 'edu-pretty', THEMEROOT .'/assets/js/jquery.prettyPhoto-3.1.4-W3C.js', array('jquery'), false, true );
    wp_enqueue_script( 'edu-inview', THEMEROOT .'/assets/js/jquery.inview.js', array('jquery'), false, true );   
    wp_enqueue_script( 'edu-custom', THEMEROOT .'/assets/js/custom.js', array('jquery'), false, true);
    wp_enqueue_script( 'edu-modernizr', THEMEROOT . '/assets/js/vendor/modernizr-2.6.2.min.js', array('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts','edu_add_scripts' );



//add_filter('ot_show_pages', '__return_false' );

add_filter('ot_show_new_layout', '__return_false' );
add_filter('ot_theme_mode', '__return_true' );
include_once('option-tree/ot-loader.php' );
include_once ('inc/edu-meta-boxes.php');
include_once ('inc/edu-theme-options.php');
// This Function for control Excerpt Length

function custom_excerpt_length( $length ) {
	global $post;
	if ($post->post_type=='post') {
		return 30;
	}
	if ($post->post_type=='fetured-items') {
		return 14;
	}
	if ($post->post_type=='event-items') {
		return 17;
	}
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_filter( 'excerpt_more', 'edu_excerpt_more' );

function edu_excerpt_more() {
	return '...';
}


//CUSTOM POST REGISTER
function edu_custom_post() {
		register_post_type( 'fetured-items',
		array(
			'labels' => array(
				'name' => __( 'Fetured Section' ),
				'singular_name' => __( 'Fetured' ),
				'add_new_item' => __( 'Add New Fetured' )
			),
			'public' => true,
			'supports' => array('editor','title', 'custom-fields','thumbnail'),
			'has_archive' => false,
		    'show_admin_column'     => true,
		     'menu_icon' => 'dashicons-list-view',
			
			'rewrite' => array('slug' => 'fetured-item'),
		)
	);

		register_post_type( 'event-items',
		array(
			'labels' => array(
				'name' => __( 'Event Section' ),
				'singular_name' => __( 'Event' ),
				'add_new_item' => __( 'Add New Event' )
			),
			'public' => true,
			'supports' => array('editor','title'),
			'has_archive' => false,
		    'show_admin_column'     => true,
		     'menu_icon' => 'dashicons-editor-ul',
			
			'rewrite' => array('slug' => 'event-item'),
		)
	);
		register_post_type( 'protfolio-items',
		array(
			'labels' => array(
				'name' => __( 'Protfolio Section' ),
				'singular_name' => __( 'Protfolio' ),
				'add_new_item' => __( 'Add New Protfolio' )
			),
			'public' => true,
			'supports' => array('editor','title','custom-fields','thumbnail'),
			'has_archive' => false,
		    'show_admin_column'     => true,
		     'menu_icon' => 'dashicons-editor-ul',
			
			'rewrite' => array('slug' => 'protfolio-item'),
		)
	);		
}

add_action('init', 'edu_custom_post');

//THIS CODE FOR REGISTER TAXONOMY

function etx_register_taxonomy(){
	register_taxonomy(
		'event_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'event-items',                  //post type name
			 array(
				'hierarchical'          => true,
				'label'                 => 'Event Category',  //Display name
				'query_var'             => true,
			    'show_admin_column'     => true,
				'rewrite'               => array(
					'slug'              => 'event-category', // This controls the base slug that will display before each term
					'with_front'    => true // Don't display the category base before
					)
			)
		);

		register_taxonomy(
		'fetured_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'fetured-items',                  //post type name
			 array(
				'hierarchical'          => true,
				'label'                 => 'Fetured Category',  //Display name
				'query_var'             => true,
			    'show_admin_column'     => true,
				'rewrite'               => array(
					'slug'              => 'fetured-category', // This controls the base slug that will display before each term
					'with_front'    => true // Don't display the category base before
					)
			)
		);
		register_taxonomy(
		'protfolio_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'protfolio-items',                  //post type name
			 array(
				'hierarchical'          => true,
				'label'                 => 'Protfolio Category',  //Display name
				'query_var'             => true,
			    'show_admin_column'     => true,
				'rewrite'               => array(
					'slug'              => 'protfolio-category', // This controls the base slug that will display before each term
					'with_front'    => true // Don't display the category base before
					)
			)
		);

	if( !term_exists( 'course', 'fetured_cat' ) )
	   wp_insert_term( 'course', 'fetured_cat' );
	if( !term_exists( 'teachers', 'fetured_cat' ) )
		wp_insert_term( 'teachers', 'fetured_cat' );
	if( !term_exists( 'about-campus', 'fetured_cat' ) )
		wp_insert_term( 'about-campus', 'fetured_cat' );
	

	if( !term_exists( 'EVENT', 'event_cat' ) )
		wp_insert_term( 'EVENT', 'event_cat' );

	if( !term_exists( 'Protfolio', 'protfolio_cat' ) )
		wp_insert_term( 'Protfolio', 'protfolio_cat' );
	if( !term_exists( 'Sponsor-Logo', 'protfolio_cat' ) )
		wp_insert_term( 'Sponsor-Logo', 'protfolio_cat' );	
	if( !term_exists( 'Testimonial', 'protfolio_cat' ) )
		wp_insert_term( 'Testimonial', 'protfolio_cat' );

	
}
add_action( 'init', 'etx_register_taxonomy' );



// Register Sidebar
function custom_sidebar() {

	$args =array( 
		array(
			'id'            => 'footer_one',
			'name'          => __( 'Footer Widget 1', 'text_domain' ),
			'description'   => __( 'Appears on posts and pages in the sidebar.', 'text_domain' ),
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
			'before_widget' => '<div class="link-area">',
			'after_widget'  => '</div>',
		),
		array(
			'id'               => 'footer_two',
			'name'			   => __( 'Footer Widget 2', 'text_domain' ),
		    'description'   => __( 'Appears on posts and pages in the sidebar.', 'text_domain' ),
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
			'before_widget' => '<div class="link-area">',
			'after_widget'  => '</div>',
		),
		array(
			'id'               => 'footer_three',
			'name'			   => __( 'Footer Widget 3', 'text_domain' ),
		    'description'   => __( 'Appears on posts and pages in the sidebar.', 'text_domain' ),
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
			'before_widget' => '<div class="addmition-area">',
			'after_widget'  => '</div>',
		)
	);
	foreach ($args as $arg) {
	register_sidebar( $arg );
	}

}
// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'custom_sidebar' );


add_theme_support( 'post-thumbnails', array('post','fetured-items','protfolio-items' ) );
add_theme_support( 'post-formats', array('aside','gallery','link') );

add_image_size( 'teacher', 200, 200, true );
add_image_size( 'blog-thum', 200, 145, true );
add_image_size( 'blog-larg', 655, 350, true );
add_image_size( 'protfolio', 270, 180, true );
add_image_size( 'sponsor-logo', 170, 69, true );
add_image_size( 'testimonial', 180, 200, true );







