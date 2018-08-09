<?php
/**
 * The template for displaying all single posts and pages
 *
 * @package terzoni
 * @since terzoni 1.0.3
 * @license GPL 2.0
 * 
 */
get_header(); ?>

<section class="archive__container">

	<div class="archive__header">
		<h1>I nostri prodotti</h1>
	</div>

<div class="archive__wrap module">
	
	<div class="archive__filter">
		<h3>Tipologia</h3>
		
<!--
			<label>
				<input type="radio" name="type" value="*" class="filter" checked> 
				<div class="check"></div>
				<span>Tutte</span>
			</label>
-->
			  <?php $terms = get_terms("wine_type", array(
													'hide_empty' => false,
												) );

			foreach ( $terms as $term ) {?>
			
			
			<label>
				<input type="radio" name="type" value=".<?php echo $term->slug;?>" class="filter"> 
				<div class="check"></div>
				<span><?php echo $term->name;?></span>
			</label>

			<?php }; ?>	
		
		<div class="reset">
			<img src="<?php bloginfo('template_directory');?>/frontend/img/x.svg" class="svg"> RESETTA FILTRO
		</div>
		
		
		
		
	</div>


	<?php global $post;
$loop = new WP_Query(array('post_type' => 'wine', 'posts_per_page' => -1));
	if ($loop->have_posts()):
 ?>
	<section class="archive_wine ">
	<?php while ($loop->have_posts()) : $loop->the_post();
		
			$post_id = $post->ID;
			$taxonomy = "wine_type";
				
			$array =  wp_get_post_terms($post_id, $taxonomy);
		
			$categories = $array[0]->slug;
			$thumb_id = get_post_thumbnail_id();
			$url_array = wp_get_attachment_image_src($thumb_id, 'thumb_archive_bottle');
			$label = $url_array[0];
		
		?> 
	
		<article class="archive_wine__item <?php foreach ( $array as $term ) {echo $term->slug . " "; }?>">
			<a href="<?php the_permalink();?>">
				<div class="archive_wine__item_thumb">
					<img src="<?php echo $label;?>" alt="<?php the_title();?>" title="<?php the_title();?>"> 
				</div>

				<div class="archive_wine__item_data">
					<h1><span><?php the_title();?></span></h1>
					<h2><?php the_field('annata');?></h2>
				</div>
			</a>	

		</article>

	<?php endwhile;?>
		
	</section>

	<?php endif; ?>
	
</div>
</section>	

<?php get_footer(); ?>