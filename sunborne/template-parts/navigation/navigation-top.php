<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav class="nav-menu">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
			'container' => false,
			'menu'  =>  'top_menu',
		)
	);
	?>

</nav><!-- #site-navigation -->
