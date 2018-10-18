<?php 
/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
 

 
    
    
    add_theme_support( 'title-tag' );

   

function maiazinc_scripts() {
	
    
     wp_register_style( 'maiazinc-style', get_stylesheet_uri());
    
    wp_enqueue_style( 'maiazinc-style' );
    
    wp_enqueue_script( 'jquery');
    
    
 
     
        wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );

    
    
  
 
}
add_action( 'wp_enqueue_scripts', 'maiazinc_scripts' );




 

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

 

register_nav_menus( array(
	'header-menu' => 'Header Menu',
 	 
) );



function maiazinc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'underscores' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'underscores' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    
    	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'underscores' ),
		'id'            => 'sidebar-footer',
		'description'   => esc_html__( 'Add widgets here.', 'underscores' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    
    
        	register_sidebar( array(
		'name'          => esc_html__( 'Greetings', 'underscores' ),
		'id'            => 'greetings',
		'description'   => esc_html__( 'Add widgets here.', 'underscores' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    
    
    
    
}
add_action( 'widgets_init', 'maiazinc_widgets_init' );

 

function my_home_category( $query ) {
 if ( $query->is_home() && $query->is_main_query() ) {
 $query->set( 'cat', '50,52');
 }
}
add_action( 'pre_get_posts', 'my_home_category' );







// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );




add_theme_support( 'automatic-feed-links' );