  
  <footer class="footer">
  <div class="site-footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
		  <div class="col-md-4">
		  <?php
                dynamic_sidebar('footer1');
                wp_reset_query();
                ?>
		  </div>
  <div class="col-md-4"><?php
                dynamic_sidebar('footer2');
                wp_reset_query();
                ?></div>
  <div class="col-md-4"><?php
              dynamic_sidebar('footer4');
              wp_reset_query();
              ?></div>
  

    </div>
  </div>
  <div class="border-bottom-1px"></div>
  <div class="mid-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-5">
          <div>
            <?php
              dynamic_sidebar('footer5');
              wp_reset_query();
              ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pay_footer">
            <?php
            dynamic_sidebar('footer6');
            wp_reset_query();
            ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 social_footer">
          <h4 class="title-menu2 icon_none_first icon_title_last">
            <a>Kết nối với chúng tôi</a>
          </h4>
          <div class="social_footer">
            <ul class="follow_option">  
              
              <li>
                <a href="<?php the_field('fb','option')?>" title="Theo dõi Facebook MiHome"><i class="fa fa-facebook"></i></a>
              </li>
              
              
              <li>
                <a href="<?php the_field('tw','option')?>" title="Theo dõi Twitter MiHome"><i class="fa fa-twitter"></i></a>
              </li>
              
              
              <li>
                <a href="<?php the_field('gg','option')?>" title="Theo dõi Google Plus MiHome"><i class="fa fa-google-plus"></i></a>
              </li>
              
              
              <li>
                <a href="<?php the_field('in','option')?>" title="Theo dõi Instagam MiHome"><i class="fa fa-instagram"></i></a>
              </li>
              
              
              <li>
                <a href="<?php the_field('yt','option')?>" title="Theo dõi Youtube MiHome"><i class="fa fa-youtube-play"></i></a>
              </li>
              

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-footer-bottom copyright clearfix">
    <div class="container">
      <div class="inner clearfix">
        <div class="row tablet">
          <div id="copyright" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-center fot_copyright">
            <span class="wsp">
              <?php
              dynamic_sidebar('footer7');
              wp_reset_query();
              ?>
              
            </span>
            
          </div>

        </div>
      </div>
      
      <a href="#" id="back-to-top" class="backtop"  title="Lên đầu trang"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
      
      
    </div>
  </div>
  </div>
  <ul class="uchat">
   <a href="https://m.me/tubepphuongdong368/" target="_blank"> <li class="h8"></li></a>
    <a href="https://zalo.me/0983003464" target="_blank"><li class="c8"></li></a>
    <a href="tel:0971858996"><li class="f8"></li></a>
  </ul>
</footer>


<script type="text/javascript">
  $('.ct-mobile  .menu-item-has-children').append('<i class="ti-plus hide_close"></i>');
  $('.item_big  .menu-item-has-children > a').append('<i class="fa fa-caret-down"></i>');
  $('.aside-content ul li').addClass('nav-item lv1');
  $('.aside-content ul li .sub-menu').addClass('dropdown-menu');
  $('.aside-content ul li.menu-item-has-children ').append('<i class="fa fa-angle-right"></i>');
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>
<?php wp_footer() ?>
	  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ea0878169e9320caac6552c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>

