<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: About
 *
 * @package madeinequality
 */

get_header();

?>

<div class="row">
  <?php

  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $args = array(
    'posts_per_page' => 8,
    'paged'          => $paged,
    'offset' => 0,
  );

  $the_query = new WP_Query( $args );

  if ($the_query->have_posts()) {
  	while ($the_query->have_posts()) {
  	$the_query->the_post();
?>
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
  <?php 	}
  }
  ?>
</div>
