		<!--News & Updates-->
	
		<section id="news">
			<div class="container">
				<h2>News &amp; Updates</h2>
				
				<?php $i=1; $query = new WP_Query('posts_per_page=2&category_name=news-updates'); if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
					<a class="post post<?php echo $i;?>" title="<?php the_title();?>" href="<?php the_permalink();?>">
						<?php the_post_thumbnail();?>
						<h3><?php the_title();?></h3>
						<?php wpe_excerpt('wpe_excerptlength_index', 'wpe_excerptmore'); ?>
					</a>
				<?php $i++; } } wp_reset_postdata(); ?>
				
				<a title="Read more news" class="btn" href="<?php bloginfo('url');?>/category/news-updates">More News</a>
			</div>
		</section>