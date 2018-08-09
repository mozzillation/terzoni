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

	<section class="wine">
		
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			$thumb_id = get_post_thumbnail_id();
			$url_array = wp_get_attachment_image_src($thumb_id, 'thumb_single_bottle');
			$label = $url_array[0];
		
		?> 
	
		<div class="wine__header">
			<?php if( get_field('annata') ): ?><h2><?php the_field('annata');?></h2><?php endif;?>
			<h1 class="animated"><span class="animated"><?php the_title();?></span></h1>
			
		</div>
		
		<div class="wine__content module">
		
			
			
			
			<div class="wine__description animated">
				<div class="wine__description_text">
					<h1>
						<?php
						if( qtrans_getLanguage() == 'it' ){ ?>
							Descrizione
						<?php }else { ?>
							Description
						<?php } ?>
					</h1>
					
					<?php the_content();?>
					
				</div>
				
				<?php if( get_field('download') ): ?>
					<a href="<?php the_field('download');?>" class="download">
						<?php
						if( qtrans_getLanguage() == 'it' ){ ?>
							Download Scheda Tecnica
						<?php }else { ?>
							Download Datasheet
						<?php } ?>
					</a>
				<?php endif;?>
				
			</div>
			
			<div class="wine__bottle animated" id="bottle" style="background-image: url(<?php echo $label;?>)"></div>
			
			<div class="wine__data animated">
				
				<table class="shop_attributes table">
					<tbody>
					
					<?php if( get_field('tipologia') ): ?>
						<tr><th><?php
						if( qtrans_getLanguage() == 'it' ){ ?>
							Tipologia
						<?php }else { ?>
							Type						
						<?php } ?></th><td><?php the_field('tipologia');?></td></tr>
					<?php endif;?>		
						
					<?php if( get_field('varietà') ): ?>
						<tr><th><?php
						if( qtrans_getLanguage() == 'it' ){ ?>
							Varietà
						<?php }else { ?>
							Grapes
						<?php } ?></th><td><?php the_field('varietà');?></td></tr>
					<?php endif;?>	
						
					<?php if( get_field('alcool') ): ?><tr><th><?php
						if( qtrans_getLanguage() == 'it' ){ ?>
							Alcool
						<?php }else { ?>
							Alcohol
						<?php } ?></th><td><?php the_field('alcool');?> Vol.</td></tr>	<?php endif;?>
					
					<?php if( get_field('annata') ): ?><tr><th><?php
						if( qtrans_getLanguage() == 'it' ){ ?>
							Annata
						<?php }else { ?>
							Year
						<?php } ?></th><td><?php the_field('annata');?></td></tr><?php endif;?>		
					<?php if( get_field('colore') ): ?><tr><th><?php
						if( qtrans_getLanguage() == 'it' ){ ?>
							Colore
						<?php }else { ?>
							Color
						<?php } ?></th><td><?php the_field('colore');?></td></tr><?php endif;?>	
					<?php if( get_field('profumo') ): ?><tr><th><?php
						if( qtrans_getLanguage() == 'it' ){ ?>
							Profumo
						<?php }else { ?>
							Flavour
						<?php } ?></th><td><?php the_field('profumo');?></td></tr>	<?php endif;?>	
					<?php if( get_field('sapore') ): ?><tr><th><?php
						if( qtrans_getLanguage() == 'it' ){ ?>
							Sapore
						<?php }else { ?>
							Taste
						<?php } ?></th><td><?php the_field('sapore');?></td></tr><?php endif;?>
					<?php if( get_field('volume') ): ?><tr><th>Volume</th><td><?php the_field('volume');?>ml</td></tr>	<?php endif;?>	

					</tbody></table>
			
			
			</div>
			
		</div>
			
		<div class="wine__back">
		</div>
		
		
		
		
	<?php endwhile; else: ?>

		<p>Nope</p>

	<?php endif; ?>
	</section>	

<?php get_footer(); ?>