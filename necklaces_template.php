<?php
/* Template Name: Necklaces Pages */
?>
<?php get_header(); ?>

<div id="contents">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
      <div class="container">
<h2>necklaces</h2>
<a href="<?php bloginfo('url'); ?>/necklaces/" title="back to necklaces" class="btn btn-default back-button"><i class="fa fa-angle-double-left"></i> necklaces</a>
<div class="details">
        <h2><?php the_title(); ?></h2>
<hr>
        <div id="page-content">
          <?php the_content(); ?>
        </div><!--#pageContent -->
</div><!-- .details -->
      </div>

    </div><!--#post-# .post-->


  <?php endwhile; ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
