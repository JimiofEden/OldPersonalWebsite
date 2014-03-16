		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<!--Intro-->
			<section class="main-content-container">
				<div class="title-container">
						<h2 class="page-title"><?php the_title();?></h2>
				</div>

				<!--Main Content-->

				<article class="main-content">
					<?php if(has_post_thumbnail()) { ?>
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							<div class="sub-hero">
								<img src="<?php echo $url; ?>">
							</div>
					<?php } ?>
					<div class="content-container">
						<?php the_content();?>
					</div>
				</article>
			</section>
		<?php endwhile; ?>
		<hr />