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
 * Template Name: white
 * @package Madeinequality
 */

 get_header();?>




    <div id="primary" class="content-area">
    <main id="main" class="site-main " role="main"> 
    
   
    
   




<section class="post-section" style="background:white;">

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
                                  <?php $excerpt = get_the_excerpt(); echo mb_strimwidth($excerpt, 0, 300, "..."); ?> 
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