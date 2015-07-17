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


<div id="wrap" class="container"><!-- this encompasses the entire Web site -->
<div class="contact-bar">
<a href="<?php bloginfo( 'url'); ?>/contact/" class="contact-link">contact</a>
<div id="mc_embed_signup">
<!--"//sassalina.us9.list-manage.com/subscribe/post?u=4447e56fae25233ff8fef3421&amp;id=0d9c0e782c"-->
<form  action="http://eepurl.com/bfhO8f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate navbar-form navbar-left" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll" class="form-group">

  <input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Sign up to our Newsletter" required size="24">
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_4447e56fae25233ff8fef3421_0d9c0e782c" tabindex="-1" value=""></div>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default">
    </div> <!-- .form-group -->
</form>
</div> <!-- #mc_embed_signup -->
<?php
include('social_icons.php');
?>
</div> <!-- .contact-bar  -->
<!--End mc_embed_signup-->
  <header>
    <div class="container">
      <?php if( is_front_page() || is_home() ) { ?>
        <h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
      <?php } else { ?>
        <h2><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h2>
      <?php } ?>
      <div class="logo">
        <img src="http://www.sassalina.com/wp-content/uploads/2015/04/logo-sharp.jpg" class="img-responsive">
      </div>
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
