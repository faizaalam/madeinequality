<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * Template Name: Homev2 
 * @package Madeinequality
 */

 get_header();?>



      <header>
        <nav id="TopNavigation">  
          <ul>
            <li><a href="/" class="current">Home</a></li>
            <li><a href="/about/">About</a></li>
            <li><a href="#">Share</a></li>
            <li><a href="/home2">home2</a></li>
          </ul>
        </nav>
        <div id="LogoContainer" style="opacity: 1;">
         <a href="/"><img src="http://madeinequality.webable.digital/wp-content/uploads/2016/05/Made-in-Equality-blue.png"></a>
        </div>
      </header>

    <div id="primary" class="content-area">
    <main id="main" class="site-main " role="main"> 
    
   
    
   




<section class="post-section">

    <div class="container">
      
      <div class="row posts">



  
<?php

query_posts('posts_per_page=8' );

        while ( have_posts() ) : the_post(); ?>
          
            <div class="post preload-background wow zoomIn" data-wow-delay="0.3s" >

                    <a href='<?php echo get_permalink($post->ID); ?>' class="post-image">
                     
                      <?php
                      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
                      ?>
                        <div class="preload-background-image " style="background:url(<?php echo $src[0]; ?> ) ;">

                   
                                <header class="post-header">
                                    <h2 class="post-title"><?php echo the_title(); ?></h2>

                                </header>
                                <div class="excerpt">
                                  <?php the_excerpt(); ?>
                                </div>
                               
                        </div>

                    </a>
                </div>
          
  <?php     endwhile; 

  wp_reset_query();
  ?>




      </div>
  
        </div>


    </section>    
            </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>