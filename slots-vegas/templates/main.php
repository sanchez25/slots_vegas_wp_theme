<?php
/*Template Name: Main*/
?>

<?php get_header()?>

  <section class="main-back" style="background: linear-gradient(to bottom,#172442 0%,rgba(23,36,66,0.9) 30%,rgba(0,0,0,0) 60%),#172442 url(<?php echo get_template_directory_uri() ?>/images/main-back.jpg) center bottom/cover no-repeat;">
    <div class="container">
      <div class="main-banner">
        <div class="main-banner-content">
          <div class="main-banner-left">
            <div class="main-banner-img" style="background: url(<?php echo get_template_directory_uri() ?>/images/main-banner.png) no-repeat bottom center transparent;"></div>
          </div>
          <div class="main-banner-right">
            <span class="main-banner-title">EXCLUSIVE</span>
            <span class="main-banner-subtitle">WELCOME OFFER<br>DEPOSIT $100<br>PLAY WITH $350</span>
            <div class="main-banner-right-bottom">
              <a href="#" class="btn banner">Sign up now!</a>
              <div class="main-banner-bottom-text">
                <div class="main-banner-bottom-text-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/devices.svg);"></div>
                <span>Play best slot machines on<br>mobile, tablet, Mac or PC</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="steps-block">
    <div class="container">
      <div class="steps-content">
        <div class="step-item one">
          <div class="step-item-content">
            <span class="step-item-title">JOIN US FOR FREE</span>
            <span class="step-item-subtitle">Open your account</span>
          </div>
        </div>
        <div class="step-item two">
          <div class="step-item-content">
            <span class="step-item-title">CHOOSE YOUR BONUS & DEPOSIT</span>
            <span class="step-item-subtitle">Redeem your coupon code at Cashier</span>
          </div>
        </div>
        <div class="step-item three">
          <div class="step-item-content">
            <span class="step-item-title">PLAY AND WIN BIG</span>
            <span class="step-item-subtitle">Choose from 250+ top-rated slots</span>
          </div>
        </div>
        <div class="step-item four">
          <a href="#" class="btn step">Join now</a>
        </div>
      </div>
    </div>
  </section>
  <section class="slots-block">
    <div class="container">
      <div class="slots-content">
        <span class="slots-content-title">Amazing Online Casino Experience at Slots Of Vegas</span>
        <div class="slots-content-block">
          <div class="slots-content-tab">
            <div class="slots-content-tab-item">
              <a href="#" class="slots-content-tab-item-link">
                <img src="<?php echo get_template_directory_uri() ?>/images/menu/popular.svg" class="slots-content-tab-item-icon img-svg" alt="Popular">
                <span>Popular</span>
              </a>
            </div>
            <div class="slots-content-tab-item">
              <a href="#" class="slots-content-tab-item-link">
                <img src="<?php echo get_template_directory_uri() ?>/images/menu/jackpot.svg" class="slots-content-tab-item-icon img-svg" alt="Jackpot Slots">
                <span>Jackpot Slots</span>
              </a>
            </div>
            <div class="slots-content-tab-item">
              <a href="#" class="slots-content-tab-item-link">
                <img src="<?php echo get_template_directory_uri() ?>/images/menu/new.svg" class="slots-content-tab-item-icon img-svg" alt="New Games">
                <span>New Games</span>
              </a>
            </div>
            <div class="slots-content-tab-item">
              <a href="#" class="slots-content-tab-item-link">
                <img src="<?php echo get_template_directory_uri() ?>/images/menu/slots.svg" class="slots-content-tab-item-icon img-svg" alt="Online Slots">
                <span>Online Slots</span>
              </a>
            </div>
            <div class="slots-content-tab-item">
              <a href="#" class="slots-content-tab-item-link">
                <img src="<?php echo get_template_directory_uri() ?>/images/menu/table.svg" class="slots-content-tab-item-icon img-svg" alt="Table Games">
                <span>Table Games</span>
              </a>
            </div>
            <div class="slots-content-tab-item">
              <a href="#" class="slots-content-tab-item-link">
                <img src="<?php echo get_template_directory_uri() ?>/images/menu/poker.svg" class="slots-content-tab-item-icon img-svg" alt="Video Poker">
                <span>Video Poker</span>
              </a>
            </div>
            <div class="slots-content-tab-item">
              <a href="#" class="slots-content-tab-item-link">
                <img src="<?php echo get_template_directory_uri() ?>/images/menu/diamond.svg" class="slots-content-tab-item-icon img-svg" alt="Specialty">
                <span>Specialty</span>
              </a>
            </div>
            <div class="slots-content-tab-item">
              <a href="#" class="slots-content-tab-item-link">
                <img src="<?php echo get_template_directory_uri() ?>/images/menu/all.svg" class="slots-content-tab-item-icon img-svg" alt="All Games">
                <span>All Games</span>
              </a>
            </div>
          </div>
          <?php
            if ($items = get_posts(array('numberposts' => 6, 'post_type' => 'Slots'))) {
              echo '<div class="slots-content-cards">';
                foreach($items as $item) {

                  $genre = get_field('genre', $item->ID);
                  $new = get_field('new', $item->ID);
                  $jackpot = get_field('jackpot', $item->ID);
    
                  echo '<div class="slots-content-card-item">';
                    echo '<div class="slots-content-card-item-block">';
                      echo get_the_post_thumbnail($item->ID);
                      if($jackpot) {
                        echo '<div class="game-card-jackpot">';
                          echo '<span>Jackpot '.$jackpot.'</span>';
                        echo '</div>';
                      }
                    echo '</div>';
                    echo '<div class="slots-content-card-item-back">';
                      echo '<div class="slots-content-card-item-buttons">';
                        echo '<a href="#" class="btn real">Real money</a>';
                        echo '<a href="'.get_permalink($item->ID).'" class="btn practice">Practice</a>';
                      echo '</div>';
                    echo '</div>';
                    echo '<div class="slots-content-card-item-bottom">';
                        echo '<span class="slots-content-card-item-title">'.$item->post_title.'</span>';
                        if($genre) {
                          echo '<span class="slots-content-card-item-text">'.$genre.'</span>';
                        }
                    echo '</div>';
                    if($new) {
                      echo '<div class="slots-content-card-item-new">'.$new.'</div>';
                    }
                  echo '</div>';
                }
              echo '</div>';
            }
          ?>
        </div>
        <div class="slots-content-btn">
          <a href="/slots/" class="btn more">Show More</a>
        </div>
      </div>
    </div>
  </section>
  <section class="advantage-block">
    <div class="container">
      <div class="advantage-block-content">
        <div class="advantage-block-item">
          <div class="advantage-block-item-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/device-red.svg);"></div>
          <span class="advantage-block-item-title">Play Real Slots anywhere on <span>Mobile and Desktop</span></span>
          <p class="advantage-block-item-text"> 
            Players have access to 
            <a href="#">online casino slots</a>
            and games on the free Slots of Vegas PC app, 
            <a href="#">Mac site</a>
            , and 
            <a href="#">mobile casino</a>
            , which has been formatted for incredible gameplay on your tablet, 
            <a href="#">Android</a>
            mobile or 
            <a href="#">iPhone</a>
            . Fancy playing French roulette while lounging on a yacht on the Riviera? Be our guest! Wanna play Texas Hold ‘Em on your way to work in Austin? Go for it. You can play online slots for money anywhere with Slots of Vegas. Seriously!
          </p>
          <a href="#" class="btn advantage">Instant pay</a>
        </div>
        <div class="advantage-block-item">
          <div class="advantage-block-item-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/card.svg);"></div>
          <span class="advantage-block-item-title">Fast and Secure <span>Banking Methods</span></span>
          <p class="advantage-block-item-text"> 
            Slots of Vegas offer several forms of popular
            <a href="#">banking methods</a>
            . This is to make sure your overall experience is easy, smooth and efficient while you play slots online for real money! You can deposit using credit cards like Visa and MasterCard, 
            wire transfers, checks, and even bitcoin. Withdrawing funds is just as easy! You have the ability to deposit cash using one method, and even withdraw using another one for a quick 
            and painless payout. Because at Slots of Vegas, your safety is always guaranteed.
          </p>
          <a href="#" class="btn advantage">All payment methods</a>
        </div>
        <div class="advantage-block-item">
          <div class="advantage-block-item-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/trust.svg);"></div>
          <span class="advantage-block-item-title">Trusted <span>Online Slots Casino</span></span>
          <p class="advantage-block-item-text"> 
            We're dedicated to providing a trustworthy and entertaining experience for all our players. Our casino along with all our online slot games are certified by Gaming Labs International; 
            a company comprised of highly trained professionals including mathematicians, hardware and software engineers, and quality assurance specialists who test and certify 
            the mechanics of our games. Slots of Vegas is a McAfee and Norton Anti-virus certified site,
            <a href="#">ensuring secure navigation</a>
            and 
            <a href="#">software download</a>
            . Oh, yeah – we’ve got the stuff all right!
          </p>
          <a href="#" class="btn advantage">Download now</a>
        </div>
      </div>
    </div>
  </section>
  <section class="promo-block">
    <div class="container">
      <div class="promo-content">
        <div class="promo-title">
          <div id="tab-one" class="promo-item active">
            <img src="<?php echo get_template_directory_uri() ?>/images/promo.svg" class="promo-item-link-icon img-svg" alt="Latest Promos">
            <span>Latest Promos</span>
          </div>
          <div id="tab-two" class="promo-item">
            <img src="<?php echo get_template_directory_uri() ?>/images/article.svg" class="promo-item-link-icon img-svg" alt="Latest Articles">
            <span>Latest Articles</span>
          </div>
          <div id="tab-three" class="promo-item">
            <img src="<?php echo get_template_directory_uri() ?>/images/video.svg" class="promo-item-link-icon img-svg" alt="Latest Videos">
            <span>Latest Videos</span>
          </div>
        </div>
        <div class="promo-info">
          <div class="promo-info-content">
            <div class="promo-info-column">
              <div class="promo-info-img">
                <img width="359" height="180" src="<?php echo get_template_directory_uri() ?>/images/promo/signup-bonus.jpg" alt="Slots and Keno">
              </div>
              <span class="promo-info-title">250% SIGNUP BONUS – Slots and Keno</span>
              <p class="promo-info-text">
                Sign up today with Slots of Vegas and get a 250% sign up bonus! That’s right, all you have to do is register for a free account, 
                which takes just a minute with our quick and easy free registration process! Enter your unique username and password to sign up. 
                Then, simply head to the cashier, where you can enter the coupon code <strong>NEW250</strong>
                and get a 250% bonus up to $2,500 to play our amazing selection of online Vegas slots, or try your luck at our Vegas style Keno with any 
                deposit of $30 or more. With no maximum withdrawal limit and only 5x play through requirement, we’re sure this welcome bonus will make you a winner! 
                Head here to make the most of this fantastic <a href="#">welcome bonus offer</a>!
              </p>  
            </div>
            <div class="promo-info-column">
              <div class="promo-info-img">
                <img width="359" height="180" src="<?php echo get_template_directory_uri() ?>/images/promo/signup-bonus-190.jpg" alt="All allowed games">
              </div>
              <span class="promo-info-title">190% signup bonus – All allowed games</span>
              <p class="promo-info-text">
                Not a huge fan of slots but still interested in playing some of the Slots of Vegas’ exciting table games? Try our fantastic 190% signup bonus on all allowed games! 
                All you need to do is create your free Slots of Vegas account, a super easy process that takes just seconds, then sign in and head to the cashier. 
                Use bonus code  <strong>NEW250</strong>
                and you’ll instantly be credited with 190% bonus and up to $1,900 in free cash on any deposit of $30 or more. With no maximum withdrawal and 5x play through (30x on 
                <a href="#">Blackjack</a> and <a href="#">Video Poker</a>) this one-time only offer is sure to get your adrenaline pumping and carry you to the winner’s circle! Only at Slots of Vegas online casino!
              </p>  
            </div>
            <div class="promo-info-column">
              <div class="promo-info-img">
                <img width="359" height="180" src="<?php echo get_template_directory_uri() ?>/images/promo/program-vip.jpg" alt="VIP program">
              </div>
              <span class="promo-info-title">Slots of Vegas VIP program</span>
              <p class="promo-info-text">
                Are you a regular player who digs playing table games and the best slots in Vegas? If so, be sure to check out our stellar <a href="#">welcome bonus offer</a>.
                Start out as a High Roller with any one-time deposit of $500 or more while maintaining an average $100 balance and get 10% monthly insurance on losses, cash-out 
                up to 3x with free chips and cash-out 1x with comp points. Keep going and head all the way to the top of our four-tiered program to reach our Platinum VIP level, 
                where you’ll get 50% insurance, cash-out up to 7x with free chips, higher table limits and a seemingly never-ending array of bonus offers, free spins and chips!
              </p>  
            </div>
          </div>
        </div>
        <div class="promo-info-two">
          <div class="promo-info-content">
            <div class="promo-info-column">
              <div class="promo-info-img">
                <img width="359" height="180" src="<?php echo get_template_directory_uri() ?>/images/promo/gambling-experience.jpg" alt="ENJOY AN AUTHENTIC LAS VEGAS SLOT CASINO EXPERIENCE!">
              </div>
              <span class="promo-info-title">ENJOY AN AUTHENTIC LAS VEGAS SLOT CASINO EXPERIENCE!</span>
              <p class="promo-info-text">
                If you’re looking for the reel deal when it comes to online gambling, look no further. Slots of Vegas brings all the favorites from Sin City’s live casino 
                gambling floors directly to you, no matter where you are. Our site is certified, safe, secure, and guaranteed to bring the fun. Why leave the house to play  
                <a href="#">your favorite casino games</a>
                when you can experience the same excitement playing for real money at home instead? It’s your call, but we know what we’d pick – and our choice doesn’t involve putting on pants!
              </p>  
            </div>
            <div class="promo-info-column">
              <div class="promo-info-img">
                <img width="359" height="180" src="<?php echo get_template_directory_uri() ?>/images/promo/exclusive-bonuses.jpg" alt="SLOTS OF VEGAS EXCLUSIVE SLOTS AND GAMES BONUSES">
              </div>
              <span class="promo-info-title">SLOTS OF VEGAS EXCLUSIVE SLOTS AND GAMES BONUSES</span>
              <p class="promo-info-text">
                Exclusive bonuses are kind of a specialty here at Slots of Vegas, and we make sure to provide our players with regular bonuses 
                to make gameplay more interesting and rewarding. New players receive a 250% signup bonus with no withdrawal limits and the benefits just keep coming after that. 
                There are daily specials, monthly Vegas casino slots tournaments, and VIP promotions to keep things fresh, while giving you the chance to pocket even more winnings. 
                Plus, we get to continue seeing (figuratively) your smiling faces. So, it’s a win-win
              </p>  
            </div>
            <div class="promo-info-column">
              <div class="promo-info-img">
                <img width="359" height="180" src="<?php echo get_template_directory_uri() ?>/images/promo/slots-verified-strategies.jpg" alt="SLOTS OF VEGAS CASINO SLOTS VERIFIED STRATEGIES">
              </div>
              <span class="promo-info-title">SLOTS OF VEGAS CASINO SLOTS VERIFIED STRATEGIES</span>
              <p class="promo-info-text">
                Gambling is fun but winning is even more fun. To give yourself an upper hand while playing your favorite video slots and other Vegas games, you need some serious game-play knowledge. 
                Slots of Vegas is here to provide it, and we’ve got a blog chock-full of articles that delve deep into effective strategies to help players understand their go-to Vegas games, 
                and encourage their bankrolls to grow. From  
                <a href="#">roulette</a> to <a href="#">craps</a>, blackjack to <a href="#">keno</a>, and, of course, tons of helpful info on winning real cash playing our collection of slots. 
                Rest assured we have something for every type of player at Slots of Vegas! You can discover all our articles and game guides on our <a href="#">blog page here</a>.
              </p>  
            </div>
          </div>
        </div>
        <div class="promo-info-three">
          <div class="promo-info-content">
            <div class="promo-info-column">
              <div class="promo-info-img">
                <iframe width="340" height="160" title="YouTube video player" src="https://www.youtube.com/embed/07zr7ahmrZo"></iframe>
              </div>
              <span class="promo-info-title">THE NEW SLOTS OF VEGAS MOBILE LOBBY</span>
              <p class="promo-info-text">
                If you’re looking for a way to play your favorite games in a quick and easy manner, you’ll fall in love with the Slots of Vegas mobile lobby! 
                It comes with all the benefits of both Desktop and browser lobbies, with the added convenience of an entire library of awesome games in the palm 
                of your hand! Discover the latest games, slots casino, and best promotional offers and many more benefits you simply can’t get from a standard online lobby. You can   
                <a href="#">download</a> Slots of Vegas to your <a href="#">Android</a>, <a href="#">iPhone</a>
                or other Smart device directly from the homepage!
              </p>  
            </div>
            <div class="promo-info-column">
              <div class="promo-info-img">
                <iframe width="340" height="160" title="YouTube video player" src="https://www.youtube.com/embed/ANSwmpvwRnc"></iframe>
              </div>
              <span class="promo-info-title">SAMBA SUNSET ONLINE SLOT MACHINE VIDEO</span>
              <p class="promo-info-text">
                Get ready for our hottest and most exotic new slot Samba Sunset! Not only does this 5-reel, Brazilian carnival-themed game feature the most stunning graphics 
                and sound effects, you’ll marvel at the amazing rewards to be won throughout! This sensational game comes with both major and minor jackpots to play for, along with an array 
                of incredible bonus material including 10 free games! Get yourself a cocktail and come join in the fun with Samba Sunset at Slots of Vegas online casino! You can play 
                <a href="#">Samba Sunset right here</a>!
              </p>  
            </div>
            <div class="promo-info-column">
              <div class="promo-info-img">
                <iframe width="340" height="160" title="YouTube video player" src="https://www.youtube.com/embed/CaY5twYMJy8"></iframe>
              </div>
              <span class="promo-info-title">ENCHANTED GARDEN II ONLINE SLOT MACHINE VIDEO</span>
              <p class="promo-info-text">
                Delve into a spell-binding adventure with the Enchanted Garden slot from Slots of Vegas! This 5-reel video slot boasts the most beautiful characters including the Fairy 
                Princess as the wild and the Garden symbol as the scatter for unlocking the most amazing prizes and rewards! You’ll encounter everything from free spins, games, bonus rounds 
                and a mega random jackpot to line up your bankroll! Spin your way to riches with the amazing   
                <a href="#">Enchanted Garden</a> Vegas slots game! A mystical new world awaits!
              </p>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--<section class="main-text main">
    <div class="container">
      <div class="main-text-block-content">
        <div class="page-title">
          <h1 class="page-title-h1"><?php the_title(); ?></h1>
        </div>
        <div class="games-content">
          <?php
            echo the_content(); 
          ?>
        </div>
      </div>
    </div>
  </section>-->

<?php get_footer()?>