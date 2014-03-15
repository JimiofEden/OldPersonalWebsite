<?php get_header(); ?>

	<h1 class="news-heading">News &amp; Updates</h1>
	
	<section id="news-posts">
		<div class="container">
			<article>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="post">
						<?php the_post_thumbnail('blog');?>
						
						<div class="post-meta">
							<p>Posted In<br/><?php the_category(', ');?></p>
							
							<p>
								Share<br/>
								<a class="share-fb" title="Share this on facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title();?>" target="_blank">Facebook</a>
								<a class="share-tw" title="Share this on twitter" href="http://twitter.com/home?status=<?php the_title();?> <?php the_permalink();?>" target="_blank">Twitter</a>
								<a class="share-email" title="Email this" href="mailto:?subject=<?php urlencode(the_title()) ?>&body=<?php urlencode(the_permalink()) ?>" target="_blank">Mail this</a>
							</p>
						</div>
						
						<div class="post-content">
							<h2><a title="<?php the_title();?>" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
							<?php wpe_excerpt('wpe_excerptlength_blog', 'wpe_excerptmore'); ?>
						</div>
					</div>
				<?php endwhile; ?>
				
				<div class="pagination">
					<?php previous_posts_link('&laquo; Older Posts') ?>
					<?php next_posts_link('Newer Posts &raquo;','') ?>
				</div>
			</article>
		
			<?php get_sidebar(); ?>
		</div>
	</section>
	
<?php get_footer(); ?>
