<?php get_header(); ?>

<div id="contents">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
      <article>
        <div id="page-content">
          <?php the_content(); ?>
        </div><!--#pageContent -->
      </article>

    </div><!--#post-# .post-->

  <?php endwhile; ?>
</div><!--#content-->
<?php get_footer(); ?>
