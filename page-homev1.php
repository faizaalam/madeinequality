<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Homev1 *
 * @package Madeinequality
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main " role="main">

				<div class="home background preload-background-image"></div>


	<div class="container">
      <div class="row posts">
        <?php

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
                               
                        </div>

                    </a>
                </div>
          
  <?php 	endwhile; ?>




      </div>
		<!-- 	<?php
			kriesi_pagination(); ?> -->
		</div>
    		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
