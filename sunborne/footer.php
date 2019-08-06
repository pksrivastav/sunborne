<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
</section>

<footer class="footer-section">
    <div class="copyright">Copyright &copy; <?php echo date('Y');?> All rights reserved.  </div>
</footer>
</div><!-- #page -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.owl-filter.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/magnific-popup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/circle-progress.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owlcarousel.js"></script>

<script>
      $(document).ready(function() {
    $("#stay-slider1").owlCarousel({   
      items : 1,
    itemsCustom : false,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [980,1],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,
autoPlay : false,
 navigation:true,   
        });
      });
    </script>

<?php wp_footer(); ?>

</body>
</html>
