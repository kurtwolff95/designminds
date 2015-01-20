<!DOCTYPE html>
<head>
  <!--Page title formatting for browser bar-->
  <title>
    <?php
      if ( is_single() ) 
        {
          single_post_title();
        }
      elseif ( is_home() || is_front_page() ) 
        {
          bloginfo('name'); print ' | '; bloginfo('description'); get_page_number();
        }
      elseif ( is_page() ) 
        {
          single_post_title('');
        }
      elseif ( is_search() ) 
        {
          bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number();
        }
      elseif ( is_404() ) 
        {
          bloginfo('name'); print ' | Not Found';
        }
      else 
        {
          bloginfo('name'); wp_title('|'); get_page_number(); 
        }
    ?>
  </title>
  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <script src="//ajax.googleapis.com/ajax/libs/webfont/1.5.6/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ['Arimo', 'Titillium Web', 'Passion One', 'Montserrat']
      }
    });
  </script>
  <?php 
    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
    wp_head(); 
  ?>
</head>
<body>

  <div id="wrapper" class="hfeed">
    <div id="header">
      <div id="headerback">
        <img src="background">
      </div><!-- #headerback -->
      <div id="logocontainer">
        <img src="logo"> 
      </div><!-- #logocontainer -->
      <div id="navigationbar"> 
        <div id="navigationcontainer">
          <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
        </div><!-- #navigationcontainer -->
      </div><!-- #navigationbar -->
    </div><!-- #header -->