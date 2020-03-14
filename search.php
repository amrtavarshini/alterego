<?php
/**
 * The template for displaying search results pages
 Template Name: Search page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Alter_Ego
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- if we have a search query and some results -->
			<?php if ( have_posts() and get_search_query() ) : ?>
			  <header class="page-header pa3 measure-wide center">
			    <h1 class="page-title">
			      <?php
			      printf( esc_html__( 'Search Results for: %s', 'alterego' ), '<span>' . get_search_query() . '</span>' );
			      ?>
			    </h1>
			  </header><!-- .page-header -->
			  <ul class="products w-100">
			    <?php while ( have_posts() and get_search_query() ) : the_post();
			      wc_get_template_part( 'content', 'product' );
			    endwhile; ?>
			  </ul>
			<?php endif; ?>

			<!-- if we no search query, show the search form -->
			<?php if ( !get_search_query() or !have_posts() ) : ?>
				<div class="pa3 measure-wide center">
				</div>
			  <h1 class="page-title">Search</h1>
			  <?php get_search_form(); ?>
			<?php endif; ?>

			<?php if (!have_posts()) : ?>

			<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
