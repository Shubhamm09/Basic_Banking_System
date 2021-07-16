<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Star Bank</title>
    <link rel="icon" href="css_and_images/title_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="css_and_images/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
  </head>

  <body>
    <!-- Nav Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <img src="css_and_images/logo.png" alt="" id="navbar__logo" />
        <ul class="navbar__menu">
          <li class="navbar__items">
            <a href="#home" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__items">
            <a href="#about-us" class="navbar__links" id="about-page">About Us</a>
          </li>
          <li class="navbar__items">
            <a href="#join-us" class="navbar__links" id="join-us" onClick = "scrollWin(0,1200)"
              >Contact Us</a
            >
          </li>
        </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero" id="home">
      <div class="hero__container">
        <h1 class="hero__heading">Welcome To The Star Bank!</h1>
        <h1 class="hero__des">50 Years of Banking Excellence</h1>
        <button class="main__btn">
          <a href="view_users.php">Our Customers</a>
        </button>
      </div>
    </div>

    <!-- Main Section -->
    <div class="main" id="about-us">
      <div class="main__container">
        <div class="main__img--container">
          <div class="main__img--card"></div>
        </div>
        <div class="main__content">
          <h1>About Us</h1>
          <p>
            The Star Bank a Fortune 500 company, is an Multinational bank, has
            Public Sector Banking and Financial services. The rich heritage and
            legacy of over 200 years.Growing with times, The Star Bank continues
            to redefine banking, as it aims to offer responsible and sustainable
            Banking solutions.
          </p>
        </div>
      </div>
    </div>

    <!-- Footer Section -->
    <div class="footer__container" id="join-us">
      <div class="footer__links">
        <div class="footer__links--wrapper">
          <div class="footer__links--items">
            <h2>About Us</h2>
            <a href="/sign-up">How it works</a>
            <a href="/sign-up">Testinomals</a>
            <a href="/sign-up">Careers</a>
            <a href="/sign-up">Terms & Conditions</a>
          </div>
          <div class="footer__links--items">
            <h2>Contact Us</h2>
            <a href="/">Contact</a>
            <a href="/">Support</a>
            <a href="/">Destinations</a>
          </div>
        </div>
        <div class="footer__links--wrapper">
          <div class="footer__links--items">
            <h2>Social Media</h2>
            <a href="/">Instagram</a>
            <a href="/">Facebook</a>
            <a href="/">Youtube</a>
            <a href="/">Twitter</a>
          </div>
        </div>
      </div>
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="/" id="footer__logo">The Star Bank</a>
          </div>
          <p class="website__rights">
            @Star Bank 2021. ALL Rights Reserved
          </p>
          <div class="social__icons">
            <a href="/" class="social__icons--link" target="_blank"
              ><i class="fab fa-facebook"></i
            ></a>
            <a href="/" class="social__icons--link" target="_blank"
              ><i class="fab fa-instagram"></i
            ></a>
            <a href="/" class="social__icons--link" target="_blank"
              ><i class="fab fa-linkedin"></i
            ></a>
            <a href="/" class="social__icons--link" target="_blank"
              ><i class="fab fa-twitter"></i
            ></a>
          </div>
        </div>
      </section>
    </div>
    <script>
    function scrollWin(x, y) {
    window.scrollBy(x, y);
    }
    </script>
  </body>
</html>
