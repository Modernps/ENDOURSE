<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Golobe</title>
    <link rel="stylesheet" href="./src/css/login.css" />
    <style>
        @font-face {
            font-family: "TradeGothic LT Extended";
            src: url("./src/assets/fonts/Trade Gothic LT Bold Extended.ttf");
            font-weight: 700;
        }
    </style>
</head>
<body>
<main class="login">
  <div class="login-container">
    <div class="login-content">
      <section class="login-form-section">
        <div class="login-header">
          <?php if(isset($_GET['error'])): ?>
              <div class="error-message">
                  <?php 
                      switch($_GET['error']) {
                          case 'invalid':
                              echo 'Invalid email or password.';
                              break;
                          case 'server':
                              echo 'Server error occurred.';
                              break;
                          default:
                              echo 'An error occurred.';
                      }
                  ?>
              </div>
          <?php endif; ?>
          <img
            loading="lazy"
            src="./src/assets/images/logo.png"
            class="logo"
            alt="Golobe logo"
          />
          <div class="login-title-wrapper">
            <h1 class="login-title">Login</h1>
            <p class="login-subtitle">Login to access your Golobe account</p>
          </div>
        </div>

        <form action="src/php/process-login.php" method="post">
          <div class="login-form">
            <div class="form-fields">
              <div class="input-field">
                <div class="text-field-wrapper">
                  <div class="input-content">
                    <div class="input-container">
                      <input
                        type="email"
                        id="email"
                        class="form-input"
                        placeholder="john.doe@gmail.com"
                        name="email"
                        required
                      />
                      <label for="email" class="input-label">Email</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="input-field">
                <div class="text-field-wrapper">
                  <div class="input-content password-field">
                    <div class="input-container">
                      <input
                        type="password"
                        id="password"
                        class="form-input"
                        placeholder="•••••••••••••••••••••••••"
                        name="password"
                        required
                      />
                      <label for="password" class="input-label">Password</label>
                    </div>
                    <button
                      type="button"
                      class="password-toggle"
                      aria-label="Toggle password visibility"
                    >
                      
                    </button>
                  </div>
                </div>
              </div>

              <div class="form-options">
                <label class="remember-option">
                  <input type="checkbox" />
                  <span>Remember me</span>
                </label>
                <a href="#" class="forgot-password">Forgot Password</a>
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="login-button">Login</button>
            </div>

            <div class="social-login-separator">
              <span class="separator-line"></span>
              <span class="separator-text">Or login with</span>
              <span class="separator-line"></span>
            </div>

            <nav class="social-login-options">
              <button class="social-button">
                <img
                  loading="lazy"
                  src="./src/assets/images/facebook.svg"
                  alt="Facebook login"
                />
              </button>
              <button class="social-button">
                <img
                  loading="lazy"
                  src="./src/assets/images/google.svg"
                  alt="Google login"
                />
              </button>
              <button class="social-button">
                <img
                  loading="lazy"
                  src="./src/assets/images/apple.svg"
                  alt="Apple login"
                />
              </button>
            </nav>
          </div>
        </form>
      </section>

      <section class="image-section">
        <img
          loading="lazy"
          src="./src/assets/images/hero.png"
          class="hero-image"
          alt="Login page illustration"
        />
      </section>
    </div>
  </div>
</main>
<script src="./src/js/login.js"></script>
</body>
</html>

