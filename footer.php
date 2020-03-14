<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alter_Ego
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer flex-l justify-between regular pa3 pv4-l mt4">
		<?php
	  wp_nav_menu( array(
	    'theme_location' => 'menu-2',
	    'menu_id'        => 'footer-menu',
	    'menu_class'     => 'footer-menu list flex pa0 ma0 mb3 mb0-l'
	  ) );
	  ?>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-3',
			'menu_id'        => 'social-menu',
			'menu_class'     => 'social-menu list flex pa0 ma0-l mb3'
		) );
		?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
