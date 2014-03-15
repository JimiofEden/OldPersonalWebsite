		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<!--Hero-->
<!--
			<?php if(has_post_thumbnail()) { ?>
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<div class="sub-hero" style="background: url('<?php echo $url; ?>') no-repeat; background-size: cover;"></div>
			<?php } ?>
 -->
			<!--Intro-->

			<section class="intro">
				<div class="container">
					<h1 class="page-title" <?php if ( is_front_page() ) echo "style='text-align:left'";?>><?php the_title();?></h1>
				</div>
			</section>

			<!--Main Content-->

			<section class="main-content">
				<?php if(has_post_thumbnail()) { ?>
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<div class="sub-hero" style="background: url('<?php echo $url; ?>') no-repeat; background-size: cover;"></div>
				<?php } ?>
				<div class="container">
					<?php the_content();?>
				</div>
			</section>
		<?php endwhile; ?>