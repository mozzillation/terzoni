<?php
/**
 * Template Name: Contatti
 * The template for displaying all single posts and pages
 *
 * @package terzoni
 * @since terzoni 1.0.3
 * @license GPL 2.0
 * 
 */
get_header(); ?>
	<section class="contacts">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

			<?php the_content();?>

		<?php endwhile; endif; ?>
	</section>	

<?php get_footer(); ?>