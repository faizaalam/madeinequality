<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package Madeinequality
*/
get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
  <div class="row">
  <?php
  while ( have_posts() ) : the_post(); ?>

  <header class="story-header">

    <div class="story-header-container small-11 small-centered large-12 large-centered  medium-12 medium-centered columns ">

        <div class="story-header-text"><?php echo the_title(); ?></div>
        <div class="story-header-location"></div>
    </div>
  </header>
  <div class="hony-wrapper row ">

  <div class="story-post  small-11 small-centered large-12 large-centered  medium-12 medium-centered columns">
    <div class="story-post-image">
      <?php
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
      ?>

        <div class="actual-image" >
          <?php echo the_post_thumbnail(); ?>
        </div>
    </div>
    <div class="story-post-text">
        <p><?php  the_content(); ?></p>
    </div>
  </div>
  <button class="share-button">SHARE THIS STORY<span></span></button>
  <?php
  endwhile; // End of the loop.
  ?>

<!-- <div class="read-more-stories">
  <div class="read-more-header">Read More Stories</div>
  <div class="read-more-stories-container">
      <div class="root-post">
          <div class="root-post-image" style="border-color: rgb(190, 214, 230);">
              <div class="root-post-actual-image" style="border-color: rgb(190, 214, 230); background-image: url(&quot;https://66.media.tumblr.com/82b5a3d159e6b82bdfbb52a57cd57081/tumblr_nvaydcNWNb1qggwnvo1_1280.jpg&quot;);"></div>
          </div>
          <div class="root-post-location">Kos, Greece</div>
          <div class="root-post-quote"></div>
          <button class="root-post-read">READ STORY<span></span></button>
      </div>





  </div>
</div> -->

</div>
</div>
</main>
</div>
<?php
get_footer(); ?>
