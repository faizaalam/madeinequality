<?php
  /**
   * The header for our theme.
   *
   * This is the template that displays all of the <head> section and everything up until <div id="content">
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   *
   * @package madeinequality
   */

  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Made in Equality</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hover-min.css">
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
  <!--[if IE]><!-->
  <style>
  #instagrid #mosaic_insta .item_insta figure:after {
    content: ' ';
    height: 100%;
    width: 100%;
    background: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.85));
    display: block;
}
  #instagrid #mosaic_insta .item_insta:hover figure:after {
      background: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)) !important;
  }
</style>
<!--<![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    
     <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.js" charset="utf-8"></script>
    
    <script type="text/javascript" src="http://jschr.github.io/textillate/jquery.textillate.js"></script>
    <script type="text/javascript" src="http://jschr.github.io/textillate/assets/jquery.lettering.js"></script>
    <?php wp_head(); ?>
 
  </head>
  <body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
      <header>
   <!--      <nav id="TopNavigation">  
          <ul>
            <li><a href="/" class="current">Home</a></li>
            <li><a href="/about/">About</a></li>
            <li><a href="#">Share</a></li>
            <li><a href="/home2">home2</a></li>
          </ul>
        </nav>
        <div id="LogoContainer" style="opacity: 1;">
         <img src="http://madeinequality.webable.digital/wp-content/uploads/2016/05/Made-in-Equality-blue.png">
        </div>
      </header> -->
           <div class="map-header header">
                      <nav class="header-nav ">
                          
<?php  if ( is_home() || is_page( 'about' ) ) { ?>
<a class="align-left hony" href="/">
<span><img src="http://madeinequality.webable.digital/wp-content/uploads/2016/05/Made-in-Equality-White.png"></span>
                     </a>      <?php  }
else { ?>
<a class="align-left hony" href="/">
  <span><img src="http://madeinequality.webable.digital/wp-content/uploads/2016/05/Made-in-Equality-blue.png"></span>
  </a>
 <?php } ?>


                              
                       
                        
                               <div class="alignright menu">
                            <span class="mie-menu desktop">
                              <a href="/home" class="more-stuff">Home -V1</a>
                              <span class="spacer"></span>
                              <a href="/home2" class="more-stuff">Home-V2</a>
                              <span class="spacer"></span>
                              <a href="/about" class="more-stuff">About-V1</a>
                               <span class="spacer"></span>
                              <a href="/about2" class="more-stuff">About-V2</a>
                              <span class="spacer"></span>
                              <a href="#" class="more-stuff share-menu">Share</a>
                          </span>

                               <div class="burger-menu mobile">
                
                <div class="hanging-right burger">
                    <span class="line top"></span>
                    <span class="line middle"></span>
                    <span class="line bottom"></span>
                </div>
            </div>
                          </div>
                      </nav>

  </div>
        <div class="overlay">
  <div class="wrap">
    <ul class="wrap-nav">
      <li><a href="#">About</a></li>
      <li><a href="#">Work</a></li>
    </ul>

  </div> 
</div>
      </header>
   








