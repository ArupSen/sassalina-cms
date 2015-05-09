  </div><!--.container-->
  <div class="clear"></div>
  <footer>
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
jQuery('.hentry').append('<div class="testimonial">');
jQuery('.testimonial').append($details.find('h4'));
jQuery('.testimonial').append($details.find('p').eq(1));
jQuery('.testimonial').append($details.find('p').eq(1));
</script>
</body>
</html>
