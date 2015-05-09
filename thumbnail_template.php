<?php
/* Template Name: Thumbnail Page */
?>
<?php get_header(); ?>

<div id="contents">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
      <article>
        <h2><?php the_title(); ?></h2>
        <div id="page-content">
          <?php the_content(); ?>
        </div><!--#pageContent -->
      </article>

    </div><!--#post-# .post-->

  <?php endwhile; ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
