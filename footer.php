  </div><!--.container-->
  <div class="clear"></div>
  <footer>
    <div class="container">
      <?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>
        <!--Wigitized Footer-->
      <?php endif ?>
      <nav class="footer">
        <?php wp_nav_menu( array('menu' => 'Footer Menu' )); /* editable within the Wordpress backend */ ?>
      </nav>
    </div><!--.container-->
  </footer>
</div><!--#main-->
<?php wp_footer(); /* this is used by many Wordpress features and for plugins to work proporly */ ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
