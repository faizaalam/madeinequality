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
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Made in Equality</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hover-min.css">
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    
     <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
     

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.js" charset="utf-8"></script>
    <link rel="icon" type="image/x-icon" href="/wp-content/uploads/2016/06/favicon-16x16.png" sizes="any" />
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
  
           <!-- <div class=""> -->
                      <nav class="">
                           <nav id="TopNavigation">  
          <ul>
            <li><a href="/about/">About</a></li>
            <li><a href="#" class="share-menu">Share</a></li>
          
          </ul>
        </nav>
        <?php if(!is_page( 'white' )){ ?>
        <div id="LogoContainer" style="opacity: 1;">
         <a href="/"><img src="http://madeinequality.webable.digital/wp-content/uploads/2016/05/Made-in-Equality-White.png"></a>
        </div>
        <?php } ?>

<?php if(is_page( 'white' )){ ?>
 <div id="LogoContainer" style="opacity: 1;">
         <a href="/"><img src="http://madeinequality.webable.digital/wp-content/uploads/2016/05/Made-in-Equality-blue.png"></a>
        </div>
  <?php  } ?>
        </nav>

        <nav class="FixedNavigation">  
  <a href="/"><img src="http://madeinequality.webable.digital/wp-content/uploads/2016/05/Made-in-Equality-White.png" style="
    width: 110px;
"></a>
          <ul style="
    float: right;
">
            <li><a href="/about/">About</a></li>
            <li><a href="#" class="share-menu">Share</a></li>
          
          </ul>
        </nav>



                              
                       
                        
            <!--                    <div class="alignright menu">
                            

                               <div class="burger-menu mobile">
                
                <div class="hanging-right burger">
                    <span class="line top"></span>
                    <span class="line middle"></span>
                    <span class="line bottom"></span>
                </div>
            </div>
                          </div> -->
                      <!-- </nav> -->

  
       <!--  
</div>
       <div class="overlay">
  <div class="wrap">
    <ul class="wrap-nav">
      <li><a href="#">About</a></li>
      <li><a href="#">Work</a></li>
    </ul>

  </div> 
</div> -->
      </header>
   





<!-- 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description" content="Lorem Ipsum" />

    <meta property="og:site_name" content="The GolfHouse" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The GolfHouse" />
    <meta property="og:description" content="Bangladesh's First Ever Golf Magazine." />
    <meta property="og:url" content="thegolfhousebd.com" />
    <meta property="og:image" content="http://thegolfhousebd.com/images/gf_logo.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="The GolfHouse" />
    <meta name="twitter:description" content="Bangladesh's First Ever Golf Magazine." />
    <meta name="twitter:url" content="thegolfhousebd.com" />

 -->