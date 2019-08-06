<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="description" content="Sunborne Enegry Template">
<meta name="keywords" content="Sunborne Enegry">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->   
	<link href="/wp-content/uploads/2019/07/favicon-16x16.png" rel="shortcut icon"/>
<link rel="profile" href="http://gmpg.org/xfn/11">


<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owltheme.css"/>

<?php wp_head(); ?>

</head>

<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
<div id="preloder">
		<div class="loader"></div>
	</div> 
	<header  class="header-area">
	<?php the_custom_logo(); ?>
    <!-- <a href="<?php echo site_url(); ?>" class="logo-area">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="logo">
		</a> -->
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
		<?php  endif; ?>

	</header><!-- #masthead -->
<?php
global $post;
$img_src =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
$image_url = $img_src[0];

if(is_front_page()) {
?>
<section class="hero-section" style="background-image: url('<?php echo $image_url; ?>')">
<?php } else {  ?> 
<section class="hero-section">
<?php } ?>
	
<?php
		if(is_active_sidebar('header-social-links')): dynamic_sidebar('header-social-links'); endif; 
?>
