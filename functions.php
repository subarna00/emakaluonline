<?php 
	add_theme_support( 'post-thumbnails' );

function appharu_scripts() {
    wp_enqueue_style('uikit','https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css');
	// wp_enqueue_style( 'base-style', get_stylesheet_directory_uri().'/css/style.css' );
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Mukta:400,500,700&amp;subset=devanagari' );
    wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.1.0/css/all.css');
	wp_enqueue_style( 'appharu-style', get_stylesheet_uri(),array(),'2.3.4' );

	wp_enqueue_script( 'jquery-slim-js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1.slim', true );
    wp_enqueue_script('uikit','https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js',array(),'' , true);
    wp_enqueue_script('uikit1','https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js',array(),'',true);
}
add_action( 'wp_enqueue_scripts', 'appharu_scripts' );

// LOGO
function appharu_custom_logo_setup() {
	$defaults = array(
	'height'      => 150,
	'width'       => 450,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'appharu_custom_logo_setup' );


// MENU
function register_my_menus() {
	register_nav_menus(
	  array(
		'main-menu' => __( 'Main Menu Header' ),
		'sub-menu' => __( 'Sub Menu' )
	  )
	);
  }
add_action( 'init', 'register_my_menus' );
function wp_get_menu_array($current_menu) {
 
	$array_menu = wp_get_nav_menu_items($current_menu);
	$menu = array();
	foreach ($array_menu as $m) {
		if (empty($m->menu_item_parent)) {
			$menu[$m->ID] = array();
			$menu[$m->ID]['ID']      =   $m->ID;
			$menu[$m->ID]['title']       =   $m->title;
			$menu[$m->ID]['url']         =   $m->url;
			$menu[$m->ID]['children']    =   array();
		}
	}
	$submenu = array();
	foreach ($array_menu as $m) {
		if ($m->menu_item_parent) {
			$submenu[$m->ID] = array();
			$submenu[$m->ID]['ID']       =   $m->ID;
			$submenu[$m->ID]['title']    =   $m->title;
			$submenu[$m->ID]['url']  =   $m->url;
			$menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
		}
	}
	return $menu;
	 
  }


//   WIDGET
function appharu_widgets_init() {
	$widgets = array(
		array('id' => 'sidebar-1','name'=>'Primary Sidebar' ),
		array('id' => 'logo-right','name'=>'Logo Right' ),
		array('id' => 'below-nav','name'=>'below-nav' ),
		array('id' => 'slide-muni','name'=>'slide-muni' ),
		array('id' => 'side-add','name'=>'side-add' ),


	);
	foreach ($widgets as $widget) {
		register_sidebar( array(
			'name'          => esc_html__( $widget['name'], 'appharu' ),
			'id'            => $widget['id'],
			'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
			'before_widget' => '<section class="widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	
}
add_action( 'widgets_init', 'appharu_widgets_init' );
function jetpackme_more_related_posts( $options ) {
    $options['size'] = 6;
    return $options;
}

// PAGING
require get_template_directory().'/paging.php';