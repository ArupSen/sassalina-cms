<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php if ( is_tag() ) {
  echo 'Tag Archive for &quot;'.$tag.'&quot; | '; bloginfo( 'name' );
} elseif ( is_archive() ) {
  wp_title(); echo ' Archive | '; bloginfo( 'name' );
} elseif ( is_search() ) {
  echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
} elseif ( is_home() ) {
  bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
}  elseif ( is_404() ) {
  echo 'Error 404 Not Found | '; bloginfo( 'name' );
} else {
  echo wp_title( ' | ', false, right ); bloginfo( 'name' );
} ?></title>
  <meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
  <meta name="robots" content="noindex, nofollow">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="generator" content="WordPress" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
  <!-- Google webfonts Lato -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
<?php 
  // The HTML5 Shim is required for older browsers, mainly older versions IE
?>
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <?php wp_head(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
</head>

<body <?php body_class(); ?>>


<div id="main"><!-- this encompasses the entire Web site -->
  <header>
    <div class="container">
      <?php if( is_front_page() || is_home() ) { ?>
        <h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
      <?php } else { ?>
        <h2><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h2>
      <?php } ?>
      <p><?php bloginfo('description'); ?></p>
      <nav class="primary">
        <?php wp_nav_menu( array('menu' => 'Header Menu' )); /* editable within the Wordpress backend */ ?>
      </nav><!--.primary-->
      <?php if ( ! dynamic_sidebar( 'Header' ) ) : ?>
        <!-- Wigitized Header -->
      <?php endif ?>
    </div><!--.container-->
  </header>
  <div class="clear"></div>
  <div class="container">
