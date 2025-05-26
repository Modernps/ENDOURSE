<link
      rel="stylesheet"
      href="./src/css/flight-booking.css"
    />
    <link
      rel="stylesheet"
      href="./src/css/animations.css"
    />

    <style>
      @font-face {
        font-family: "TradeGothic LT Extended";
        src: url("./src/assets/fonts/Trade Gothic LT Bold Extended.ttf");
        font-weight: 700;
      }
    </style>
  </head>
  
  <main class="booking-detail">    <header class="header">
      <nav class="nav-container">
        <div class="nav-links">
          <a href="./src/pages/find-flights.php" class="nav-item">
            <img src="./src/assets/images/plane.svg" alt="" class="nav-icon" />
            <span>Find Flight</span>
          </a>
          <a href="./src/pages/find-stays.php" class="nav-item">
            <img src="./src/assets/images/bed.svg" alt="" class="nav-icon" />
            <span>Find Stays</span>
          </a>
        </div>
        <div class="user-nav">
          <a href="./src/pages/favourites.php" class="nav-item">
            <img src="./src/assets/images/heart.svg" alt="" class="nav-icon" />
            <span>Favourites</span>
          </a>
          <span class="separator">|</span>
          <a href="./login.php" class="user-profile">
            <img src="./src/assets/images/profile-pic.png" alt="User profile" class="profile-image" />
            <span>John D.</span>
          </a>
        </div>
      </nav>
    </header>
  
    <img src="./src/assets/images/logo.png" alt="" class="hero-image" />
  
    <nav class="breadcrumb">
      <span>Turkey</span>
      <img src="./src/assets/images/arrow.svg" alt="" class="breadcrumb-separator" />
      <span>Istanbul</span>
      <img src="./src/assets/images/arrow.svg" alt="" class="breadcrumb-separator" />
      <span>CVK Park Bosphorus Hotel Istanbul</span>
    </nav>
    
  
    <div class="content-wrapper">
      <section class="booking-summary">
        <article class="flight-card">
          <header class="flight-header">
            <div class="flight-title">
              <h1>Emirates A380 Airbus</h1>
            </div>
            <div class="flight-price">$240</div>
          </header>
  
          <div class="flight-info">
            <span>Return Wed, Dec 8</span>
            <span>2h 28m</span>
          </div>
  
          <div class="flight-details">
            <div class="airline-info">
              <img src="./src/assets/images/emirates-logo.png" alt="Emirates logo" class="airline-logo" />
              <div class="airline-name">
                <h3>Emirates</h3>
                <p>Airbus A320</p>
              </div>
              <img src="./src/assets/images/amenities.png" alt="" class="flight-path" />
            </div>
  
            <div class="flight-schedule">
              <div class="schedule-item">
                <time>12:00 pm</time>
                <p>Newark(EWR)</p>
              </div>
              <img src="./src/assets/images/flight-2.svg" alt="" class="schedule-separator" />
              <div class="schedule-item">
                <time>14:30 pm</time>
                <p>Atlanta(ATL)</p>
              </div>
            </div>
            <div class="view-details-wrapper">
              <a href="flight-details.php" class="view-details-btn">
                <span>View Flight Details</span>
                <img src="./src/assets/images/arrow.svg" alt="" class="arrow-icon" />
              </a>
            </div>
          </div>
        </article>        <section class="payment-options">
          <div class="payment-option full-payment" onclick="selectPaymentOption(this)">
            <div class="option-content">
              <h3>Pay in full</h3>
              <p>Pay the total and you are all set</p>
            </div>
            <div class="radio-button">
              <img src="./src/assets/images/1.svg" alt="Selected" />
            </div>
          </div>
  
          <div class="payment-option installment" onclick="selectPaymentOption(this)">
            <div class="option-content">
              <h3>Pay part now, part later</h3>
              <p>Pay $207.43 now, and the rest ($207.43) will be automatically charged to the same payment method on Nov 14, 2022. No extra fees.</p>
              <a href="./src/pages/payment-confirmation.php" class="more-info">More info</a>
            </div>
            <div class="radio-button">
              <img src="./src/assets/images/circle.svg" alt="Not selected" />
            </div>
          </div>
        </section>
  
        <form action="src/php/process-phone.php" method="post">
        <section class="login-section">
          <h2>Login or Sign up to book</h2>
          <div class="phone-input">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name:phoneno. />
            
          </div>
          <p class="terms">We'll call or text you to confirm your number. Standard message and data rates apply. <a href="./src/pages/privacy-policy.php">Privacy Policy</a></p>
          
          <button type="submit" class="continue-btn">Continue</button>
        </section>
        </form>
  
          <div class="divider">
            <hr />
            <span>Or</span>
            <hr />
          </div>          <div class="social-login">
            <div class="social-buttons">
              <a href="./src/pages/booking-confirmation.php" class="social-btn">
                <img src="./src/assets/images/facebook.svg" alt="Facebook" />
              </a>
              <a href="./src/pages/booking-confirmation.php" class="social-btn">
                <img src="./src/assets/images/google.svg" alt="Google" />
              </a>
              <a href="./src/pages/booking-confirmation.php" class="social-btn">
                <img src="./src/assets/images/apple.svg" alt="Apple" />
              </a>
            </div>
            <a href="./src/pages/email-login.php" class="email-btn">
              <img src="./src/assets/images/letter-icon.svg" alt="Email" />
              <span>Continue with email</span>
            </a>
          </div>
        </section>
      </section>
  
      <aside class="price-summary">
        <div class="hotel-info">
          <img src="./src/assets/images/flight.png" alt="Hotel" class="hotel-image" />
          <div class="hotel-details">
            <p class="room-type">Economy</p>
            <h3>Emirates A380 Airbus</h3>
            <div class="rating">
              <span class="rating-score">4.2</span>
              <p><strong>Very Good</strong> 54 reviews</p>
            </div>
          </div>
        </div>
  
        <hr />
  
        <p class="booking-protection">Your booking is protected by <strong>golobe</strong></p>
  
        <hr />
  
        <section class="price-details">
          <h3>Price Details</h3>
          <div class="price-item">
            <span>Base Fare</span>
            <span>$240</span>
          </div>
          <div class="price-item">
            <span>Discount</span>
            <span>$60</span>
          </div>
          <div class="price-item">
            <span>Taxes</span>
            <span>$80</span>
          </div>
          <div class="price-item">
            <span>Service Fee</span>
            <span>$40</span>
          </div>
          <hr />
          <div class="price-total">
            <span>Total</span>
            <span>$300</span>
          </div>
        </section>
      </aside>
    </div>
  
    <section class="newsletter">
      <div class="newsletter-content">
        <div class="newsletter-text">
          <h2>Subscribe Newsletter</h2>
          <form action="src/php/process-newsletter.php" method="POST">
          <div class="newsletter-description">
            <h3>The Travel</h3>
            <p>Get inspired! Receive travel discounts, tips and behind the scenes stories.</p>
          </div>
          <form class="newsletter-form">
            <input type="email" placeholder="Your email address" />
            <button type="submit">Subscribe</button>
          </form>
        </div>
        <img src="./src/assets/images/letter-box.png" alt="Newsletter illustration" class="newsletter-image" />
      </div>
    </section>
  
    <footer class="site-footer">
      <div class="footer-content">
        <div class="footer-brand">
          <div class="logo">
          <img src="./src/assets/images/logo-2.png" alt="Logo" class="footer-logo" />
          <div class="social-links">
            <img src="./src/assets/images/facebook2.svg" alt="Social" />
            <img src="./src/assets/images/twitter.svg" alt="Social" />
            <img src="./src/assets/images/youtube.svg" alt="Social" />
            <img src="./src/assets/images/instagram.svg" alt="Social" />
          </div>
          </div>
        </div>
  
        <nav class="footer-nav">
          <div class="footer-section">
            <h4>Our Destinations</h4>
            <ul>
              <li><a href="#">Canada</a></li>
              <li><a href="#">Alaksa</a></li>
              <li><a href="#">France</a></li>
              <li><a href="#">Iceland</a></li>
            </ul>
          </div>
  
          <div class="footer-section">
            <h4>Our Activities</h4>
            <ul>              <li><a href="./src/pages/find-stays.php?activity=northern-lights">Northern Lights</a></li>
              <li><a href="./src/pages/find-stays.php?activity=cruising">Cruising & sailing</a></li>
              <li><a href="./src/pages/find-stays.php?activity=multi">Multi-activities</a></li>
              <li><a href="./src/pages/find-stays.php?activity=kayaking">Kayaking</a></li>
            </ul>
          </div>
  
          <div class="footer-section">
            <h4>Travel Blogs</h4>
            <ul>              <li><a href="./src/pages/travel-guide.php?destination=bali">Bali Travel Guide</a></li>
              <li><a href="./src/pages/travel-guide.php?destination=sri-lanka">Sri Lanka Travel Guide</a></li>
              <li><a href="./src/pages/travel-guide.php?destination=peru">Peru Travel Guide</a></li>
            </ul>
          </div>
  
          <div class="footer-section">
            <h4>About Us</h4>
            <ul>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Work with us</a></li>
            </ul>
          </div>
  
          <div class="footer-section">
            <h4>Contact Us</h4>
            <ul>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Work with us</a></li>
            </ul>
          </div>
        </nav>      </div>
    </footer>
    
    <script>
      function selectPaymentOption(option) {
        document.querySelectorAll('.payment-option').forEach(el => {
          el.style.backgroundColor = '';
          el.querySelector('img').src = './src/assets/images/circle.svg';
        });
        
        option.style.backgroundColor = '#8dd3bb';
        option.querySelector('img').src = './src/assets/images/1.svg';
      }
      
      document.addEventListener('DOMContentLoaded', function() {
        const paymentOptions = document.querySelectorAll('.payment-option');
        paymentOptions.forEach(option => {
          option.addEventListener('click', function() {
            selectPaymentOption(this);
          });
        });
      });
    </script>
  </main>

