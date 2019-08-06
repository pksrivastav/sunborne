<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
}

/**** Add Google Font  ****/
function wpb_add_google_fonts() { 
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700', false ); 
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

/****** Create Widget   *****/

register_sidebar(
		array(
			'name'          => __( 'Header Social Links', 'twentyseventeen' ),
			'id'            => 'header-social-links',
			'description'   => __( 'Add widgets here to appear in your header.', 'twentyseventeen' ),
			'before_widget' => '<div class="left-bar">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title" style="display:none;">',
			'after_title'   => '</h2>',
		)
	);

	/****** Custom Logo *********/

add_filter( 'get_custom_logo', 'change_logo' );
function change_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf( '<a href="%1$s" class="logo-area">%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, array(279, 106), false, array(
                'class'    => 'img-responsive',
            ) )
        );
    return $html;   
}


// add active class in menu

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
?>