  </div><!--.container-->
  <div class="clear"></div>
  <footer id="footer">
  <img src="<?php bloginfo('template_url'); ?>/images/footer_logo.png" alt="" title="" class="img-responsive ">
<hr class="left-line">
<hr class="right-line">
    <div class="container">
      <?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>
        <!--Wigitized Footer-->
      <?php endif ?>
      <nav class="footer">
        <?php// wp_nav_menu( array('menu' => 'Footer Menu' )); /* editable within the Wordpress backend */ ?>
      </nav>
   <nav class="navbar navbar-default" role="navigation">
  <ul id="navbar" class="nav nav-justified">
    <li id="nav-privacy"><a href="<?php bloginfo( 'url'); ?>/wp-content/uploads/2015/05/cookies.pdf" target="_blank" title="privacy and cookies">privacy and cookies</a></li>
    <li id="nav-contact"><a href="<?php bloginfo( 'url'); ?>/contact/" title="contact">contact</a></li>
    <li id="nav-terms"><a href="<?php bloginfo( 'url'); ?>/wp-content/uploads/2015/05/terms_and_conditions.pdf" target="_blank" title="terms and conditions">terms and conditions</a></li>
  </ul>
  </nav>
</div><!--.container-->
<?php include('social_icons.php'); ?>
  </footer>
</div><!--#main-->
<?php wp_footer(); /* this is used by many Wordpress features and for plugins to work proporly */ ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
  (function() {
  'use scrict';
// main navbar layout
  jQuery('.primary').addClass('navbar navbar-default');
  jQuery('#menu-main-menu').attr('id', 'navbar');
  jQuery('.menu').addClass('nav nav-justified');
// sub-menu or dropdown-menu
  var $sub_menu = jQuery('.sub-menu');
  var $bespoke = $sub_menu.parent().find('a').first();
  $sub_menu.parent().addClass('dropdown');
  $bespoke.attr('href', '#');
  $bespoke.addClass('dropdown-toggle');
  $bespoke.attr('data-toggle','dropdown');
  $sub_menu.addClass('dropdown-menu');
// swap out class names for carousel images on home page
  var carouselImg = jQuery('.carousel-inner').find('img');
  carouselImg.removeClass().addClass('img-responsive');
  carouselImg.unwrap('p');
  carouselImg.wrap('<div class="item">');
  carouselImg.first().parent().addClass('active');
  jQuery('.carousel-inner').find('br').remove();
  jQuery('.carousel').carousel({
    interval: 3000,
      cycle: true
    });
  }());
// thumbnail pages
  var $thumbLink = jQuery('.page-template-thumbnail_template #page-content');
  $thumbLink.find('a').addClass('pull-left thumbnail col-sm-4 col-xs-12 col-md-3');
  $thumbLink.find('p').filter(function() {
    return jQuery(this).text();
  }).remove();
  $thumbLink.find('a').unwrap('p');
  $thumbLink.find('img').each(function() {
  var altText = jQuery(this).attr('alt');
  var updatedAlt = altText.replace(/_/g, ' ');
  jQuery(this).attr('alt', updatedAlt);
  });
  $thumbLink.find('img').removeAttr("width height");
// thumbnail page made using gallery
  jQuery('.gallery').find('a').unwrap('dl');
  $thumbLink.find('style').remove();
  jQuery('.gallery').find('a').each(function() {
  var baseUrl = 'http://www.sassalina.com/cms/';
  var pageName = jQuery(this).find('img').attr('alt');
  pageName = pageName.replace(/ /g, '-');
  jQuery(this).attr('href', baseUrl + pageName + '/');
  });
// hovering over thumbnail images creates tooltip
    var $thumb = jQuery('.thumbnail');
    var hoverText = $thumb.find('img').attr('alt');
  $thumb.on('mouseenter', function() {
    hoverText = jQuery(this).find('img').attr('alt');
    jQuery(this).find('img').attr('title','');
    jQuery(this).append('<span>' + hoverText + '</span>');
  });
  $thumb.on('mouseleave', function() {
    jQuery(this).find('span').remove();
  });
// individual item pages
  var $details = jQuery('.details');
  var $detailsImg = $details.find('img');
  var $itemTitle = $details.find('h2');
  var $line = $details.find('hr');
  $detailsImg.removeAttr("width height");
  $detailsImg.removeClass();
  $detailsImg.addClass('img-responsive');
  $detailsImg.wrap('<div class="col-md-4 col-md-offset-4">');

  $details.find('.col-md-4').unwrap('p');
  $details.find('.col-md-4').unwrap('div');
  $details.find('p').first().wrap('<div class="col-md-6 col-md-offset-3">');
  $details.find('.col-md-6').prepend($itemTitle);
  $details.find('h2').after($line);

// testimonials
  if ($details.find('h4').length > 0) {
    jQuery('.hentry').append('<div class="testimonial">');
  }
  jQuery('.testimonial').append($details.find('h4'));
  jQuery('.testimonial').append($details.find('p').eq(1));
  jQuery('.testimonial').append($details.find('p').eq(1));

// contact page
  var $contact_page = jQuery('.post-549 #page-content');
  $contact_page.find('img').unwrap('p');
  $contact_page.find('img').wrap('<div class="col-md-6 about-pic">');
  $contact_page.find('h4').wrap('<div class="col-md-4">');
  $contact_page.find('.col-md-4').append($contact_page.find('p'));
// about page
  var $about_page = jQuery('.post-716 #page-content');
  $about_page.find('img').unwrap('p');
  $about_page.find('img').removeAttr('width height');
  $about_page.find('img').removeClass();
  $about_page.find('img').addClass('img-responsive');
  $about_page.append('<div class="row">');
  $about_page.append('<div class="row logos">');
  $about_page.find('.row').first().append($about_page.find('img').eq(0));
  $about_page.find('.row').first().find('img').wrap('<div class="col-md-6 about-pic">');
  $about_page.find('.row').first().append('<div class="col-md-6">');
  $about_page.find('.row').first().find('.col-md-6').last().append($about_page.find('p'));
  $about_page.find('.logos').append($about_page.find('img').slice(0,3));
  $about_page.find('.logos').find('img').eq(0).wrap('<div class="col-md-4 slf">');
  $about_page.find('.logos').find('img').eq(1).wrap('<div class="col-md-4 gem-soc">');
  $about_page.find('.logos').find('img').eq(2).wrap('<div class="col-md-4 leopard">');
  $about_page.find('br').remove();
// design page
  jQuery('.page-id-722').attr('id', 'design');
  var $design_page = jQuery('.post-722 #page-content');
  var row_div = '<div class="row">';
  for (var i=0; i < 3; i++) {
    $design_page.append(row_div);
  }
  var $row_div = $design_page.find('.row');
  $row_div.last().addClass('testimonial-show col-md-12');
  $row_div.last().append(
    $design_page.find('h4').last(),
    $design_page.find('.show-hide')
  );
  $design_page.find('img').unwrap('p');
  $design_page.find('img').removeAttr("width height");
  $design_page.find('img').addClass('img-responsive');
  $design_page.find('.row').first().append(
    $design_page.find('img').first(),
    '<div class="col-md-4">'
  );
  $design_page.find('.row').first().find('img').wrap('<div class="col-md-8">');
  $design_page.find('.row').first().find('.col-md-4').append(
    $design_page.find('h4').first(),
    $design_page.find('p').slice(0,3)
  );
  $design_page.find('.row').eq(1).append(
    '<div class="col-md-4">',
    '<div class="col-md-4">',
    '<div class="col-md-4">'
  );
  $design_page.find('.row').eq(1).find('.col-md-4').first().append(
    $design_page.find('h4').first(),
    $design_page.find('p').slice(0,2)
  );
  $design_page.find('.row').eq(1).find('.col-md-4').eq(1).append(
    $design_page.find('img').first(),
    '<p class="before-text">BEFORE</p>'
  );
  $design_page.find('.row').eq(1).find('.col-md-4').eq(2).append(
    $design_page.find('img').first(),
    '<p class="after-text">AFTER</p>'
  );
  $design_page.find('.row').first().after('<hr>');
  $design_page.find('.testimonial-show').find('h4').on('click', function() {
    $design_page.find('.show-hide').slideToggle();
  });
</script>
</body>
</html>
