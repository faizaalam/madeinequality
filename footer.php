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
<div class="footer-logo"> <img src="http://madeinequality.webable.digital/wp-content/uploads/2016/05/CNA-grey.png"></div>
    <div class="social-icons">
      <a href="#" target="_blank" class="wow zoomIn "> <i class="fa fa-twitter hvr-bob "></i> </a>
      <a href="#" target="_blank" class="wow zoomIn " data-wow-delay="0.2s"> <i class="fa fa-facebook hvr-bob"></i> </a>
      <a href="#" target="_blank" class="wow zoomIn " data-wow-delay="0.4s"> <i class="fa fa-youtube hvr-bob"></i> </a>
    </div>
    <div class="foot">Made with <i class="fa fa-heart heart-pulse"></i> by WebAble</div>
  </footer><!-- #colophon -->
  <div class="sticky-nav home-sticky-nav">
            <div class="sticky-nav-wrap mobile">
                <a class="main-title" href="/"> Made in Equality </a>
                <div class="hanging-right burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            <div class="sticky-nav-wrap desktop">
                <div class="hangin-left">
                    <a href="/">STORIES</a><span class="space-dot"></span>
                    <a href="/about">ABOUT</a><span class="space-dot"></span>
                    <a href="#" class="share-menu">SHARE</a><span class="space-dot"></span>
                    
                </div>

                <div class="fb-like-footer" style="float:right;"><span class="fb-like fb_iframe_widget" data-href="#" style="text-align:right !important; height: 25px !important; display: inline-block !important;" data-width="380" data-height="25" data-layout="standard" data-action="like" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=869885766467319&amp;container_width=0&amp;height=25&amp;href=https%3A%2F%2Ffacebook.com%2Fhumansofnewyork&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=380"><span style="vertical-align: bottom; width: 380px; height: 20px;"><iframe name="f33a167f0808e48" width="380px" height="25px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.5/plugins/like.php?action=like&amp;app_id=869885766467319&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df1a982c08f833e8%26domain%3Dwww.humansofnewyork.com%26origin%3Dhttp%253A%252F%252Fwww.humansofnewyork.com%252Ff378870d8ca32e%26relation%3Dparent.parent&amp;container_width=0&amp;height=25&amp;href=https%3A%2F%2Ffacebook.com%2Fhumansofnewyork&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=380" style="border: none; visibility: visible; width: 380px; height: 20px;" class=""></iframe></span></span>
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
</div><!-- #page -->


</body>
</html>
