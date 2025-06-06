<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
    />    
    <link rel="stylesheet" href="./src/css/flight-detail.css" />

    <style>
      @font-face {
        font-family: "TradeGothic LT Extended";
        src: url("./src/assets/fonts/Trade Gothic LT Bold Extended.ttf");
        font-weight: 700;
      }
    </style>
  </head>  
  <body>    <div class="flight-detail-page">
      <main class="flight-detail-main">
        <header class="header">
          <nav class="nav-container">
            <div class="nav-links">
              <a href="./src/pages/find-flights.php" class="nav-item">
                <img src="./src/assets/images/plane.svg" alt="" class="nav-icon">
                <span>Find Flight</span>
              </a>
              <a href="./src/pages/find-stays.php" class="nav-item">
                <img src="./src/assets/images/bed.svg" alt="" class="nav-icon">
                <span>Find Stays</span>
              </a>
            </div>
            <div class="user-nav">
              <a href="./src/pages/favourites.php" class="nav-item">
                <img src="./src/assets/images/heart.svg" alt="" class="nav-icon">
                <span>Favourites</span>
              </a>
              <span class="separator">|</span>
              <a href="./login.php" class="user-profile">
                <img src="./src/assets/images/profile-pic.png" alt="User profile" class="profile-image">
                <span>John D.</span>
              </a>
            </div>
          </nav>
        </header>

        <img src="./src/assets/images/logo.png" alt="" class="hero-image">
        
        <section class="content-section">
          <div class="content-container">
            <div class="breadcrumb">
              <a href="#">Turkey</a>
              <img src="./src/assets/images/chevron-forward.svg" alt="" class="breadcrumb-separator">
              <a href="#">Istanbul</a>
              <img src="./src/assets/images/chevron-forward.svg" alt="" class="breadcrumb-separator">
              <span style="color: rgba(17, 34, 17, 0.75);">CVK Park Bosphorus Hotel Istanbul</span>
            </div>
            
            <div class="flight-details-header">
              <div class="flight-info-container">
                <h2 class="flight-title">Emirates A380 Airbus</h2>
                <div class="flight-location">
                  <img src="./src/assets/images/6.svg" alt="" width="18" height="18">
                  <span>Gümüssuyu Mah. Inönü Cad. No:8, Istanbul 34437</span>
                </div>
                <div class="flight-rating">
                  <div class="rating-box">4.2</div>
                  <div><b>Very Good</b> 54 reviews</div>
                </div>
              </div>
              
              <div class="price-container" style="display: flex; flex-direction: column; align-items: flex-end; gap: 8px;">
                <b class="price" style="color: red; font-size: 24px;">$240</b>
                <div style="display: flex; align-items: center; gap: 16px;">
                  <div class="icon-button">
                    <img src="./src/assets/images/7.svg" alt="Heart" width="20" height="20">
                  </div>                  <div class="icon-button">
                    <img src="./src/assets/images/8.svg" alt="Share" width="20" height="20">
                  </div>
                  <a href="flight-booking.php" class="book-button">Book Now</a>
                </div>
              </div>
            </div>

            <div style="width: 100%; margin-top: 40px;">
              <img src="./src/assets/images/9.png" alt="Flight Image" style="width: 100%; border-radius: 10px; object-fit: cover;">
            </div>
              <div class="features-section">
              <div class="features-header">
                <h2 class="section-title">Basic Economy Features</h2>
                <div class="feature-options">
                  <label class="feature-option">
                    <input type="checkbox">
                    <span>Economy</span>
                  </label>
                  <label class="feature-option">
                    <input type="checkbox">
                    <span>First Class</span>
                  </label>
                  <label class="feature-option">
                    <input type="checkbox">
                    <span>Business Class</span>
                  </label>
                </div>
              </div>
              
              <div class="feature-image-grid">
                <img src="./src/assets/images/12.png" alt="" class="feature-image">
                <img src="./src/assets/images/13.png" alt="" class="feature-image">
                <img src="./src/assets/images/15.png" alt="" class="feature-image">
                <img src="./src/assets/images/14.png" alt="" class="feature-image">
                <img src="./src/assets/images/16.png" alt="" class="feature-image">
                <img src="./src/assets/images/12.png" alt="" class="feature-image">
                <img src="./src/assets/images/16.png" alt="" class="feature-image">
                <img src="./src/assets/images/15.png" alt="" class="feature-image">
                <img src="./src/assets/images/13.png" alt="" class="feature-image">
              </div>
            </div>
              <div class="policies-section">
              <h2 class="section-title">Emirates Airlines Policies</h2>
              <div class="policies-content">
                <div class="policy">
                  <img src="./src/assets/images/17.svg" alt="" width="24" height="24">
                  <div class="policy-text">Pre-flight cleaning, installation of cabin HEPA filters.</div>
                </div>
                <div class="policy">
                  <img src="./src/assets/images/17.svg" alt="clock" width="24" height="24">
                  <div class="policy-text">Pre-flight health screening questions.</div>
                </div>
              </div>
            </div>
              <div class="flight-card fade-in">
              <h3 class="flight-date">Return Wed, Dec 8</h3>
              <div class="flight-duration">2h 28m</div>
              
              <div class="airline-container">
                <div class="airline-info">
                  <img src="./src/assets/images/emirates-logo.png" alt="Emirates logo" class="airline-logo">
                  <div>
                    <h2 class="airline-name">Emirates</h2>
                    <p class="airline-model">Airbus A320</p>
                  </div>
                </div>
                <div>
                  <img src="./src/assets/images/amenities.png" alt="Flight" class="amenities"  />
                </div>
              </div>
              
              <div class="flight-schedule">
                <div class="schedule-item">
                  <div class="schedule-time">12:00 pm</div>
                  <div class="schedule-airport">Newark(EWR)</div>
                </div>
                
                <img src="./src/assets/images/flight-2.svg" alt="" class="schedule-separator">
                
                <div class="schedule-item">
                  <div class="schedule-time">14:30 pm</div>
                  <div class="schedule-airport">Atlanta(ATL)</div>
                </div>
              </div>
            </div>
            
            <div class="flight-card fade-in">
              <h3 class="flight-date">Return Wed, Dec 8</h3>
              <div class="flight-duration">2h 28m</div>
              
              <div class="airline-container">
                <div class="airline-info">
                  <img src="./src/assets/images/emirates-logo.png" alt="Emirates logo" class="airline-logo">
                  <div>
                    <h2 class="airline-name">Emirates</h2>
                    <p class="airline-model">Airbus A320</p>
                  </div>
                </div>
                <img src="./src/assets/images/amenities.png" alt="Amenities" class="amenities">
              </div>
              
              <div class="flight-schedule">
                <div class="schedule-item">
                  <div class="schedule-time">18:00 pm</div>
                  <div class="schedule-airport">Newark(EWR)</div>
                </div>
                
                <img src="./src/assets/images/flight-2.svg" alt="" class="schedule-separator">
                
                <div class="schedule-item">
                  <div class="schedule-time">20:30 pm</div>
                  <div class="schedule-airport">Atlanta(ATL)</div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      
      <div class="footer-container">
        <footer>
          <div class="newsletter">
            <div class="newsletter-content">
              <h1 class="newsletter-title">Subscribe Newsletter</h1>
              <h3 class="newsletter-subtitle">The Travel</h3>
              <p class="newsletter-text">Get inspired! Receive travel discounts, tips and behind the scenes stories.</p>
              <div class="newsletter-form">
                <input type="text" placeholder="Your email address" class="newsletter-input">
                <button class="subscribe-button">Subscribe</button>
              </div>
            </div>
            <img src="./src/assets/images/imageremovebgpreview-47-1@2x.png" alt="" style="max-width: 100%; height: auto;">
          </div>
          
          <div class="footer-links">
            <div>
              <img src="./src/assets/images/logo-2.png" alt="Logo" class="footer-logo">
              <div class="social-icons">
                <img src="./src/assets/images/facebook.svg" alt="Facebook" width="20" height="20">
                <img src="./src/assets/images/twitter.svg" alt="Twitter" width="20" height="20">
                <img src="./src/assets/images/youtube.svg" alt="YouTube" width="20" height="20">
                <img src="./src/assets/images/instagram.svg" alt="Instagram" width="20" height="20">
              </div>
            </div>
            
            <div class="footer-column">
              <h3 class="footer-column-title">Our Destinations</h3>
              <div class="footer-links-list">
                <div class="footer-link">Canada</div>
                <div class="footer-link">Alaksa</div>
                <div class="footer-link">France</div>
                <div class="footer-link">Iceland</div>
              </div>
            </div>
            
            <div class="footer-column">
              <h3 class="footer-column-title">Our Activities</h3>
              <div class="footer-links-list">
                <div class="footer-link">Northern Lights</div>
                <div class="footer-link">Cruising & sailing</div>
                <div class="footer-link">Multi-activities</div>
                <div class="footer-link">Kayaing</div>
              </div>
            </div>
            
            <div class="footer-column">
              <h3 class="footer-column-title">Travel Blogs</h3>
              <div class="footer-links-list">
                <div class="footer-link">Bali Travel Guide</div>
                <div class="footer-link">Sri Lanks Travel Guide</div>
                <div class="footer-link">Peru Travel Guide</div>
                <div class="footer-link">Bali Travel Guide</div>
              </div>
            </div>
            
            <div class="footer-column">
              <h3 class="footer-column-title">About Us</h3>
              <div class="footer-links-list">
                <div class="footer-link">Our Story</div>
                <div class="footer-link">Work with us</div>
              </div>
            </div>
            
            <div class="footer-column">
              <h3 class="footer-column-title">Contact Us</h3>
              <div class="footer-links-list">
                <div class="footer-link">Our Story</div>
                <div class="footer-link">Work with us</div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="./src/js/mobile-responsive.js"></script>
  </body>
</html>
