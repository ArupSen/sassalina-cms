<?php
/* Template Name: Home Page */
?>
<?php get_header(); ?>

<div id="content">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
      <article>
        <div id="page-content">
          <div id="carousel-sassalina" class="carousel slide col-lg-offset-1" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-sassalina" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-sassalina" data-slide-to="1"></li>
              <li data-target="#carousel-sassalina" data-slide-to="2"></li>
              <li data-target="#carousel-sassalina" data-slide-to="3"></li>
              <li data-target="#carousel-sassalina" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
          <?php the_content(); ?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-sassalina" role="button" data-slide="prev">
              <span class="fa fa-caret-left fa-2x" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-sassalina" role="button" data-slide="next">
              <span class="fa fa-caret-right fa-2x" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div><!--#pageContent -->
      </article>

    </div><!--#post-# .post-->

  <?php endwhile; ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
