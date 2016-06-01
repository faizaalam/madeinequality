<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Madeinequality
 */

?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
<div class="footer-logo"> <img src="http://madeinequality.webable.digital/wp-content/uploads/2016/05/Made-in-Equality-White.png"></div>
    <div class="social-icons">
      <a href="#" target="_blank" class="wow zoomIn "> <i class="fa fa-twitter hvr-bob "></i> </a>
      <a href="#" target="_blank" class="wow zoomIn " data-wow-delay="0.2s"> <i class="fa fa-facebook hvr-bob"></i> </a>
      <a href="#" target="_blank" class="wow zoomIn " data-wow-delay="0.4s"> <i class="fa fa-youtube hvr-bob"></i> </a>
    </div>
    <div class="foot">Made with <i class="fa fa-heart heart-pulse"></i> by WebAble</div>
  </footer><!-- #colophon -->
  <div class="sticky-nav home-sticky-nav">
            <div class="sticky-nav-wrap mobile">
                <a class="main-title" style="float:left;" href="/"><span><img src="http://madeinequality.webable.digital/wp-content/uploads/2016/05/Made-in-Equality-blue.png" style="width:130px; float:left;"></span></a>
                <div class="burger-menu mobile">
                <div class="hanging-right burger ">
                    <span class="line top"></span>
                    <span class="line middle"></span>
                    <span class="line bottom"></span>
                </div>
                </div>
            </div>

            <div class="sticky-nav-wrap desktop">
                <div class="hangin-left">
                    <a href="/">Home</a><span class="space-dot"></span>
                    <a href="/about">ABOUT</a><span class="space-dot"></span>
                    <a href="#" class="share-menu">SHARE</a><span class="space-dot"></span>
                    
                </div>

                <div class="fb-like-footer" style="float:right;">
                  <div class="fb-like" data-href="https://www.facebook.com/CandaFund/?fref=ts" data-width="500px" data-layout="standard" data-action="like" data-show-faces="true" data-share="false">
                  </div>
                </div>

            </div>
        </div>

          <div class="post-full sharing">
<div class="share">
  <h3>Share this<br>
with your friends</h3>
<div class="share-icons">
 <a class="follow t" href="javascript:window.open('http://twitter.com/intent/tweet?status=<?php echo urlencode(get_the_title()); ?>+<?php echo wp_get_shortlink(); ?> via @WebAbleDigital','Sharing <?php echo get_the_title() ?> ','width=500,height=800')"><i class="fa fa-twitter"></i></a>
 <a  class="follow i" href="http://www.linkedin.com/" onclick="popUp=window.open(
         'http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>&source=<?php bloginfo('name'); ?>',
         'popupwindow',
         'scrollbars=yes,width=800,height=400');
     popUp.focus();
     return false"><i class="fa fa-linkedin"></i></a>
 <a class="follow g" href="http://www.plus.google.com/" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo get_permalink($ID); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><i class="fa fa-google-plus"></i></a>
 <a class="follow f" href="javascript:window.open('http://www.facebook.com/share.php?u=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>','Sharing <?php echo get_the_title() ?> ','width=500,height=800')" ><i class="fa fa-facebook"></i> </a>
   </div>
   </div>
   </div>
           <div class="overlay">
  <div class="wrap">
    <ul class="wrap-nav">
      <li><a href="/">Home</a></li>
      <li><a href="/home2">Home-V2</a></li>
      <li><a href="/about">About-1</a></li>
      <li><a href="#" class="share-menu">Share</a></li>
      
    </ul>

  </div>
</div>
</div><!-- #page -->


</body>
</html>
