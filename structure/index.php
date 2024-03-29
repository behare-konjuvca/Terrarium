<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./reset.css" />

    <link rel="stylesheet" href="../styles/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <title>Terrarium</title>
  </head>
  <body>
    <header>
      <img src="../assets/images/logo.png" alt="TerrariumLogo" />
      <ul class="menu-list" id="menu-list">
        <li><a href="#" class="link">Home</a></li>
        <?php if (isset($_SESSION['user_id'])) { ?>
          <li><a href="./home.php" class="link">Plants</a></li>
        <?php } ?>

        <?php if (!isset($_SESSION['user_id'])) { ?>
           <li><a href="./login.php" class="link">Login</a></li>
           <li><a href="./signup.php" class="signup-btn">Sign up</a></li>
        <?php } ?>
      </ul>
      <img src="../assets/images/close.png" alt="close" id="close">
      <img src="../assets/images/menu.png" alt="menu" id="menu">
    </header>
    <main>
      <section id="hero">
        <div class="hero-content">
          <div class="hero-content__text">
            <h1>Welcome to <span>Terrarium</span></h1>
            <p>Take care of your precious plants from anywhere you are</p>
            <button>Get started</button>
          </div>
          <div class="hero-content__thumb">
            <img src="../assets/images/giphy (1).gif" alt="" />
          </div>
        </div>
        <img src="" class="left" alt="" />
      </section>

      <section class="services">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#a0ca8c"
            fill-opacity="1"
            d="M0,128L48,144C96,160,192,192,288,197.3C384,203,480,181,576,149.3C672,117,768,75,864,74.7C960,75,1056,117,1152,133.3C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
        <div class="wrapper">
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
          <div><span class="dot"></span></div>
        </div>
        <div class="services-slider-right">
          <img
            src="../assets/images/sun-removebg-preview.png"
            class="next"
            id="sunImage"
            alt=""
          />
          <p>Click Me</p>
          <img src="../assets/images/arrow.svg" alt="" class="arrow-right" />
          <img
            src="../assets/images/cloud.png"
            class="prev"
            id="cloudImage"
            alt=""
          />
          <img
            src="../assets/images/arrow-right1.svg"
            alt=""
            class="arrow-left"
          />
          <p class="prev-text">Click Me</p>
        </div>

        <h1>What we offer</h1>
        <div class="services-card-holder">
          <div class="services-section">
            <div class="services-card">
              <img
                src="../assets/images/tree-removebg-preview.png"
                alt=""
                class="tree__thumb"
              />
              <p>
                <i class="fa-solid fa-droplet"></i>
                <span>Regular Watering</span>
              </p>
            </div>
            <div class="services-card">
              <img
                src="../assets/images/tree-removebg-preview.png"
                alt=""
                class="tree__thumb"
              />
              <p>
                <i class="fa-solid fa-sun-plant-wilt"></i>
                <span>Adequate Lighting</span>
              </p>
            </div>
            <div class="services-card">
              <img
                src="../assets/images/tree-removebg-preview.png"
                alt=""
                class="tree__thumb"
              />
              <p>
                <i class="fa-solid fa-plant-wilt"></i>
                <span>Soil Care</span>
              </p>
            </div>
          </div>
        </div>
        <img
          src="../assets/images/image-from-rawpixel-id-7419199-original.png"
          alt=""
        />
      </section>
      <section id="responsive-services">
      <div class="row">
        <div class="column">
          <div class="card">
            
            <div class="card-thumb">
              <img src="../assets/images/waterin.png" alt="">
            <h3>Watering Care</h3>
          </div>
           
            <p>Watering Reminder</p>
            
          </div>
        </div>

        <div class="column">
          <div class="card">
          <div class="card-thumb">
              <img src="../assets/images/light.png" alt="">
              <h3>Adequate Lighting</h3>
          </div>  
            <p>Customized Lighting</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <div class="card-thumb">
              <img src="../assets/images/soil.png" alt="">
              <h3>Soil Care & More</h3>
          </div>
            <p>Care Tips For Each Plant</p>
          </div>
        </div>
      </section>
      <section class="impact">
        <h2>Everything you need to know about your plants</h2>
        <div class="impact-slider">
          <div class="impact-card">
            <div class="impact-card-title">
              <h3>Peace Lily</h3>
            </div>

            <div class="plant-care">
              <img src="../assets/images/peacelily.png" alt="Peace Lily" />
            </div>
            <div class="plant-needs">
              <div class="plant-needs__card">
                <div class="card-icons"><i class="fa-regular fa-sun"></i></div>
                <div class="card-requirments">
                  <h4>Light requirements</h4>
                  <span>Low-light, indirect</span>
                </div>
              </div>
              <div class="plant-needs__card">
                <div class="card-icons">
                  <i class="fa-solid fa-droplet"></i>
                </div>
                <div class="card-requirments">
                  <h4>Watering needs</h4>
                  <span>Every 3 days</span>
                </div>
              </div>
              <div class="plant-needs__card">
                <div class="card-icons">
                  <i class="fa-solid fa-temperature-quarter"></i>
                </div>
                <div class="card-requirments">
                  <h4>Humidity Levels</h4>
                  <span>70%</span>
                </div>
              </div>
            </div>
          </div>
          <div class="impact-card">
            <div class="impact-card-title">
              <h3>Snake</h3>
            </div>

            <div class="plant-care">
              <img src="../assets/images/image-snake.png" alt="Peace Lily" />
            </div>
            <div class="plant-needs">
              <div class="plant-needs__card">
                <div class="card-icons"><i class="fa-regular fa-sun"></i></div>
                <div class="card-requirments">
                  <h4>Light requirements</h4>
                  <span>Low-light, indirect</span>
                </div>
              </div>
              <div class="plant-needs__card">
                <div class="card-icons">
                  <i class="fa-solid fa-droplet"></i>
                </div>
                <div class="card-requirments">
                  <h4>Watering needs</h4>
                  <span>Every 3 days</span>
                </div>
              </div>
              <div class="plant-needs__card">
                <div class="card-icons">
                  <i class="fa-solid fa-temperature-quarter"></i>
                </div>
                <div class="card-requirments">
                  <h4>Humidity Levels</h4>
                  <span>70%</span>
                </div>
              </div>
            </div>
          </div>
          <div class="impact-card">
            <div class="impact-card-title">
              <h3>Cactus</h3>
            </div>

            <div class="plant-care">
              <img src="../assets/images/image-cactus.png" alt="Peace Lily" />
            </div>
            <div class="plant-needs">
              <div class="plant-needs__card">
                <div class="card-icons"><i class="fa-regular fa-sun"></i></div>
                <div class="card-requirments">
                  <h4>Light requirements</h4>
                  <span>Low-light, indirect</span>
                </div>
              </div>
              <div class="plant-needs__card">
                <div class="card-icons">
                  <i class="fa-solid fa-droplet"></i>
                </div>
                <div class="card-requirments">
                  <h4>Watering needs</h4>
                  <span>Every 3 days</span>
                </div>
              </div>
              <div class="plant-needs__card">
                <div class="card-icons">
                  <i class="fa-solid fa-temperature-quarter"></i>
                </div>
                <div class="card-requirments">
                  <h4>Humidity Levels</h4>
                  <span>70%</span>
                </div>
              </div>
            </div>
          </div>
          <div class="impact-card">
            <div class="impact-card-title">
              <h3>Peace Lily</h3>
            </div>

            <div class="plant-care">
              <img src="../assets/images/begonia1.png" alt="Peace Lily" />
            </div>
            <div class="plant-needs">
              <div class="plant-needs__card">
                <div class="card-icons"><i class="fa-regular fa-sun"></i></div>
                <div class="card-requirments">
                  <h4>Light requirements</h4>
                  <span>Low-light, indirect</span>
                </div>
              </div>
              <div class="plant-needs__card">
                <div class="card-icons">
                  <i class="fa-solid fa-droplet"></i>
                </div>
                <div class="card-requirments">
                  <h4>Watering needs</h4>
                  <span>Every 3 days</span>
                </div>
              </div>
              <div class="plant-needs__card">
                <div class="card-icons">
                  <i class="fa-solid fa-temperature-quarter"></i>
                </div>
                <div class="card-requirments">
                  <h4>Humidity Levels</h4>
                  <span>70%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button>View More</button>
      </section>
      <section class="testimonials"></section>
    </main>
    <footer>
      <div class="footer-section">
        <div class="footer-menu">
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Contact</a>
        </div>

        <div class="footer-thumb">
          <img src="../assets/images/cactus-footer.png" alt="Cute Photo" />
          <img src="../assets/images/footer-cactus.png" alt="Cute Photo" />
        </div>
        <div class="footer-socials">
          <div class="social-icons">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <div class="footer-divider"></div>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <div class="footer-divider"></div>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <div class="footer-divider"></div>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          </div>
          <div class="footer-buttons">
            <button>Login</button>
            <button>Sign Up</button>
          </div>
        </div>
      </div>

      <p class="footer-copyrights">
        © 2023 Terrarium, Prishtine, All Rights Reserved
      </p>
    </footer>
    <script src="../functionalities/index.js"></script>
    
  </body>
</html>
