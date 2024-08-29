<?php
include $_SERVER['DOCUMENT_ROOT'] . '/conf.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $content; ?>
</head>
<body>
<div id="theme"><?php require 'html/theme.html'; ?></div>
<header id="menu_main" data-bs-theme="dark"><?php require 'html/menu.html'; ?></header>
<main>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div id="t5" class="carousel-item carousel-item-next carousel-item-start">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <h1 id="consolas" class="top_h1"><a class="a_home" href="index.html">Home</a> / Testimonials</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
  <div class="container marketing">
    <section id="testimonials" class="testimonials section_global_a">
        <div class="container aos-init aos-animate" data-aos="fade-up">
          <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
            <div>
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center info-box">
                      <img src="<?php echo $domen_name; ?>/img/user_1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3 class="tetx_unix">Jhone Doe</h3>
                        <h4 class="tetx_unix_1">CFO</h4>
                      </div>
                    </div>
<br>
                    <p>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                      Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center info-box">
                      <img src="<?php echo $domen_name; ?>/img/user_2.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3 class="tetx_unix">Afa Rose</h3>
                        <h4 class="tetx_unix_1">Web Designer</h4>
                      </div>
                    </div>
<br>
                    <p>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                      Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center info-box">
                      <img src="<?php echo $domen_name; ?>/img/user_3.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3 class="tetx_unix">Keena Lara</h3>
                        <h4 class="tetx_unix_1">Store Owner</h4>
                      </div>
                    </div>
<br>
                    <p>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                      Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center info-box">
                      <img src="<?php echo $domen_name; ?>/img/user_1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3 class="tetx_unix">Fizzi Brandon</h3>
                        <h4 class="tetx_unix_1">Freelancer</h4>
                      </div>
                    </div>
<br>
                    <p>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                      Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
    <hr class="featurette-divider">
  </div>
</main>
<footer class="footer"><?php require 'html/footer.html'; ?></footer>
  <script>let code = 0;</script>
<script src="<?php echo $domen_name; ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $domen_name; ?>/js/jquery.js"></script>
<script src="<?php echo $domen_name; ?>/js/script.js"></script>
</body>
</html>