<?php
	// Template Name: adam hollock
	get_header();
?>

	<article>
		<?php include_once('section-page.php');?>

		<section id="staff">
			<div class="container">

				<?php $i=1; $query = new WP_Query('posts_per_page=-1&post_type=staff&staff-categories=industry'); if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
					<div class="staff-item staff<?php echo $i;?>">
						<?php the_post_thumbnail('staff');?>
						<h3><?php the_title();?><span><?php the_field('position');?></span></h3>
						<?php the_content();?>
					</div>
				<?php if($i==3) $i=1; else $i++; } } wp_reset_postdata(); ?>

			</div>
		</section>
	</article>

<?php get_footer(); ?>