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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
     <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.6.7/jquery.lazy.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.js" charset="utf-8"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php  if (!is_single()){ ?>
      <header>
          <div class="map-header light header">
                      <nav class="header-nav ">
                          <a class="align-left hony" href="/">
                              <span>Made in</span><span>Equality</span>
                        </a>
                          <span class="alignright menu">
                              <a href="/home" class="more-stuff">Home</a>
                              <span class="spacer"></span>
                              <a href="/about" class="more-stuff">About</a>
                              <span class="spacer"></span>
                              <a href="/contact" class="more-stuff">Contact</a>
                              
                          </span>
                      </nav>

  </div>
      </header>
    <?php } ?>
    <?php  if (is_single()){ ?>
      <header>
          <div class="map-header light header">
                      <nav class="header-nav dark">
                          <a class="align-left hony" href="/">
                              <span>Made in</span><span>Equality</span>
                        </a>
                          <span class="alignright menu">
                              <a href="/home" class="more-stuff">Home</a>
                              <span class="spacer"></span>
                              <a href="/about" class="more-stuff">About</a>
                              <span class="spacer"></span>
                              <a href="/contact" class="more-stuff">Contact</a>
                           
                          </span>
                      </nav>

  </div>
      </header>
    <?php } ?>
