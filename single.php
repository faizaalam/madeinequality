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
    <div class="row container">
      <?php
      while ( have_posts() ) : the_post(); 

wpb_set_post_views(get_the_ID());

      ?>



      <header class="story-header">

        <div class="story-header-container small-12 small-centered large-12 large-centered  medium-12 medium-centered columns ">

            <div class="story-header-text"><?php echo the_title(); ?></div>
            <div class="story-header-location"></div>
        </div>
      </header>
      <div class="hony-wrapper row ">

      <div class="story-post  small-12 small-centered large-12 large-centered  medium-11 medium-centered columns">
        <div class="story-post-image ">
          <?php
          $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
          ?>

            <div class="actual-image">
              <?php echo the_post_thumbnail(); ?>
            </div>
        </div>
        <div class="story-post-text small-11 small-centered large-12 large-centered medium-12 medium-centered columns">
            
            <div class="post-full sharing">
     <a class="follow t" href="javascript:window.open('http://twitter.com/intent/tweet?status=<?php echo urlencode(get_the_title()); ?>+<?php echo wp_get_shortlink(); ?> via @WebAbleDigital','Sharing <?php echo get_the_title() ?> ','width=500,height=800')"><i class="fa fa-twitter"></i></a>

     <a class="follow g" href="http://www.plus.google.com/" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo get_permalink($ID); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><i class="fa fa-google-plus"></i></a>
     <a class="follow f" href="javascript:window.open('http://www.facebook.com/share.php?u=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>','Sharing <?php echo get_the_title() ?> ','width=500,height=800')" ><i class="fa fa-facebook"></i></a>
       </div>
        <div class="fb-like-footer">
                      <div class="fb-like" data-href="https://www.facebook.com/CandaFund/?fref=ts" data-width="200px" data-layout="standard" data-action="like" data-show-faces="true" data-share="false" data-colorscheme="light">
                      </div>
                    </div>
            <p><?php  the_content(); ?></p>
             
        </div>

      </div>
     
      <?php
      endwhile; // End of the loop.
      ?>
 </div>
    <div class="read-more-stories" style="display:none;">
      <div class="read-more-header">Read More Stories</div>
      <div class="read-more-stories-container row">


<?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>

<?php
                      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
                      ?>
                      



          <div class="root-post small-11 large-4  medium-4 columns" style="height=500px;">
              <div class="root-post-image" style="border-color: rgb(190, 214, 230);">
                  <div class="root-post-actual-image preload-background-image" style="border-color: rgb(190, 214, 230); background:url(<?php echo $src[0]; ?> ) ;"></div>
              </div>
              
              <div class="root-post-quote"><?php echo the_title(); ?></div>
              <div class="">
                                  <?php $excerpt = get_the_excerpt(); echo mb_strimwidth($excerpt, 0, 300, "..."); ?> 
                                </div>
              <button class="root-post-read">READ STORY<span></span></button>
          </div>

<?php endwhile; ?>




      </div>
    </div>

   





    </div>
  </main>

     </div>
<?php
get_footer(); ?>
