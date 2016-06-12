<?php ?>
            <div class="post preload-background wow zoomIn jscroll" data-wow-delay="0.3s" >

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
                        <!--         <span class="read-more">Read More</span> -->
                               
                        </div>

                    </a>
                </div>

<?php ?>