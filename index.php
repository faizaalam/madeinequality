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
 *
 * @package Madeinequality
 */

get_header(); ?>

	<div id="primary" class="content-area">


				<div class="home background preload-background-image" style="opacity: 1; background-image: url(&quot;http://demo.majesticjungle.com/hit-the-road/content/images/2015/10/15134065586_45ff6f3a1b_k.jpg?rw=1583&amp;rh=745&quot;);"></div>


		<main id="main" class="site-main container" role="main">
      <div class="row posts">
        <?php

      	while ( have_posts() ) : the_post(); ?>

            <div class="post preload-background">

                    <a href="#" class="post-image">

                      <?php
                      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
                      ?>
                        <div class="preload-background-image" style="background: url(<?php echo $src[0]; ?> ) ;">

                                <header class="post-header">
                                    <h2 class="post-title"><?php echo the_title(); ?></h2>

                                </header>
                        </div>

                    </a>
                </div>
        <?php 	endwhile;
        global $wp_query;

        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages
        ) );
        ?>

      </div>
    		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
