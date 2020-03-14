<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alter_Ego
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<!-- here we have our scrolling banner text -->
			<h1 class="woocommerce-products-header__title page-title">
				<span class="marquee">
					New Arrivals
				</span>
			</h1>
			<!-- in here, we want to display our featured products -->
			<ul class="products">
			  <?php
			    $args = array(
			      'post_type' => 'product',
			      'posts_per_page' => 3,
						'orderby' => 'menu_order',
						'order' => 'ASC',
			      'tax_query' => array(
			        array(
			          'taxonomy' => 'product_visibility',
			          'field'    => 'name',
			          'terms'    => 'featured',
			        ),
			      ),
			    );
			    $loop = new WP_Query( $args );
			    if ( $loop->have_posts() ) {
			      while ( $loop->have_posts() ) : $loop->the_post();
			        wc_get_template_part( 'content', 'product' );
			      endwhile;
			    } else {
			      echo __( 'No products found' );
			    }
			    wp_reset_postdata();
			  ?>
			</ul><!--/.products-->

			<div class="home-video">
				<!-- in here goes our video which loops and autoplays -->
				<video src="<?php echo get_template_directory_uri() . '/images/alter-ego-video-SD.mp4' ?>" class="db w-100 h-auto" autoplay loop></video>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
