<?php

/**
 * Template Name: home
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package madeinequality
 */


get_header(); ?>


<div class="main store">

<?php

$post_categories = wp_get_post_categories( $post_id );
$cats = array();
     
foreach($post_categories as $c){
    $cat = get_category( $c );
    $args = array( 'post_type' => 'post','name' => $cat->name, 'slug' => $cat->slug, '$cat_id'=$category->cat_ID; );


             $loop = new WP_Query($args);
            // echo "<ul class='products'>";

            ?>
            <div class="container main cat-page">
            	 <div class="row posts">
                    <h2 class="classic-heading"><?php echo $cat->name ?></h2>
            <?php
            while ($loop->have_posts()):
                $loop->the_post();
                global $post;
?>

<div class="col-sm-4 post">
    <div class="img-wrapper">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->post->ID, 'thumbnail') );
      $product = new WC_Product( $loop->post->ID );
      $price = $product->price;
       ?>
        <a href="<?php echo get_permalink($loop->post->ID);?>"><img src="<?php echo $url ?>"></a>
    </div>

    <div class="details">
      <h2 class="title"><a href="<?php echo get_permalink($loop->post->ID);?>"><?php echo the_title();?></a></h2>
      <p class="desc">৳<?php echo $price; ?> </p>

      <a class="btn view-details-cat"  href="<?php echo get_permalink($loop->post->ID);?>">View Product</a>
  </div>
</div>
<?php
            endwhile;
?>
</div>
</div>

</div>

<?php
            wp_reset_query();
      
    } 

?>

<?php
get_footer();
?>