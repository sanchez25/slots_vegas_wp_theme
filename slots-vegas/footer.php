    <footer class="footer">
      <div class="container">
        <div class="footer-content">
          <div class="footer-menu">
            <span class="footer-menu-title">Links</span>
            <div class="footer-menu-nav">
              <a href="#" class="footer-menu-nav-link">Online Slots</a>
              <a href="#" class="footer-menu-nav-link">Sitemap</a>
              <a href="#" class="footer-menu-nav-link">Bonus Codes</a>
              <a href="#" class="footer-menu-nav-link">About Us</a>
              <a href="#" class="footer-menu-nav-link">Video Poker</a>
              <a href="#" class="footer-menu-nav-link">Casino blog</a>
              <a href="#" class="footer-menu-nav-link">Real Money Casino</a>
              <a href="#" class="footer-menu-nav-link">Free Slots</a>
              <a href="#" class="footer-menu-nav-link">Roulette</a>
              <a href="#" class="footer-menu-nav-link">VIP Program</a>
              <a href="#" class="footer-menu-nav-link">Table Games</a>
              <a href="#" class="footer-menu-nav-link">Casino FAQ</a>
            </div>
            <div class="footer-menu-nav">
              <a href="#" class="footer-menu-nav-link">Baccarat</a>
              <a href="#" class="footer-menu-nav-link">Banking</a>
              <span></span>
              <a href="#" class="footer-menu-nav-link">Contact Us</a>
              <a href="#" class="footer-menu-nav-link">Blackjack</a>
              <a href="#" class="footer-menu-nav-link">Mobile Casino</a>
              <span></span>
              <a href="#" class="footer-menu-nav-link">Privacy Policy</a>
            </div>
            <div class="footer-menu-nav">
              <a href="#" class="footer-menu-nav-link">Craps</a>
              <a href="#" class="footer-menu-nav-link">Casino Guide</a>
              <span></span>
              <span></span>
              <a href="#" class="footer-menu-nav-link">Keno</a>
              <a href="#" class="footer-menu-nav-link">Bitcoin Casino</a>
              <span></span>
              <span></span>
              <a href="#" class="footer-menu-nav-link">Scratch Cards</a>
              <a href="#" class="footer-menu-nav-link">USA Casino</a>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="footer-pay">
            <div class="footer-pay-content">
              <img width="372" height="29" src="<?php echo get_template_directory_uri() ?>/images/footer-pay.svg" alt="Pays">
            </div>
            <div class="footer-text-icon">
              <div class="footer-text-item">
                <div class="footer-text-item-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/spam.svg);"></div>
                <span class="footer-text-item-title">No <span>spam</span></span>
              </div>
              <div class="footer-text-item">
                <div class="footer-text-item-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/secure.svg);"></div>
                <span class="footer-text-item-title">Secure <span>Gaming</span></span>
              </div>
              <div class="footer-text-item">
                <div class="footer-text-item-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/21-only.svg);"></div>
                <span class="footer-text-item-title">Over <span>21 Only</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <p>
            Copyright © 2021 SLOTSOFVEGAS.COM • All Rights Reserved
          </p>
          <div class="footer-bottom-list">
            <div class="footer-bottom-list-img one" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/cds.svg);"></div>
            <div class="footer-bottom-list-img two" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/cdsr.svg);"></div>
            <div class="footer-bottom-list-img three" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/rtg.svg);"></div>
          </div>
        </div>
      </div>
    </footer>
    <div class="modal">
      <div class="mobile-menu">
        <div class="mobile-menu-nav">
          <a href="#" class="mobile-menu-nav-link">Casino games</a>
          <a href="#" class="mobile-menu-nav-link">Real Money casino</a>
          <a href="#" class="mobile-menu-nav-link">Real Money slots</a>
          <a href="#" class="mobile-menu-nav-link">Online blackjack</a>
          <a href="#" class="mobile-menu-nav-link">Free slots</a>
          <a href="#" class="mobile-menu-nav-link">casino blog</a>
          <a href="#" class="mobile-menu-nav-link">Vip program</a>
          <a href="#" class="mobile-menu-nav-link">about us</a>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>
    <script>
      jQuery(document).ready(function ($) {

        $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              $('.header-block').addClass('scroll');
          } else {
              $('.header-block').removeClass('scroll');
          }
        });

        $('.menu-mobile-button').on('click', function() {
  			  $('.mobile-menu').toggleClass('active');
          return false;
		    });

        $('.menu-mobile-button').on('click', function() {
  			  $('.modal').toggleClass('active');
          return false;
		    });

        $('.modal').on('click', function() {
  			  $('.mobile-menu').removeClass('active');
          $('.menu-mobile-button').removeClass('active');
          $(this).removeClass('active');
		    });

        $('.menu-mobile-button').on('click', function() {
          $(this).toggleClass('active');
          return false;
		    });

        $('#tab-one').click(function(){
          $('.promo-item').removeClass('active');
          $(this).addClass('active');
          $('.promo-info').show();
          $('.promo-info-two').hide();
          $('.promo-info-three').hide();
        });

        $('#tab-two').click(function(){
          $('.promo-item').removeClass('active');
          $(this).addClass('active');
          $('.promo-info-two').show();
          $('.promo-info').hide();
          $('.promo-info-three').hide();
        });

        $('#tab-three').click(function(){
          $('.promo-item').removeClass('active');
          $(this).addClass('active');
          $('.promo-info-three').show();
          $('.promo-info').hide();
          $('.promo-info-two').hide();
        });

        $('img.img-svg').each(function(){
          var $img = $(this);
          var imgClass = $img.attr('class');
          var imgURL = $img.attr('src');
          $.get(imgURL, function(data) {
            var $svg = $(data).find('svg');
            if(typeof imgClass !== 'undefined') {
              $svg = $svg.attr('class', imgClass+' replaced-svg');
            }
            $svg = $svg.removeAttr('xmlns:a');
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
              $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }
            $img.replaceWith($svg);
          }, 'xml');
        });

        $('.single-slots-demo-back-play').on('click', function() {
          $('.single-slots-demo-back').removeClass('play');
          $('.single-slots-demo-block').addClass('play');
		    });
        
        document.querySelector('.full-btn').addEventListener('click', function(){
          if(document.documentElement.webkitRequestFullscreen) {
            document.querySelector('.demo-iframe').webkitRequestFullscreen();
          }
          else{
            document.documentElement.mozRequestFullScreen();
          }
        });

      });
    </script>
  </body>
</html>