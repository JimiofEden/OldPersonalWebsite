<?php 
	// Template Name: Call For Artists
	get_header(); 
?>

	<article>
		<?php include_once('section-page.php');?>
		
		<?php if(get_field('images_section')) { ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<section id="project-images">
					<div class="container">
						<?php the_field('images_section');?>
					</div>
				</section>
			<?php endwhile; ?>
		<?php } ?>
	</article>

<?php get_footer(); ?>
