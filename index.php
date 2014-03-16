<?php get_header(); ?>

	<!--Hero-->
	<!--The hero section will contain all the blog posts and the sidebar -->
	<section id="hero">
    <?php include_once('sidebar.php');?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <!--Intro-->
      <section class="main-content-container-blog">
        <div class="title-container title-container-blog">
            <h2 class="post-title"><?php the_title();?></h2>
            <h3 class="post-time"><?php echo get_the_date();?></h2>
        </div>

        <!--Main Content-->

        <article class="main-content main-content-blog">
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
      <hr>
    <?php endwhile; ?>
	</section>

<?php get_footer(); ?>
