<?php
include $_SERVER['DOCUMENT_ROOT'] . '/conf.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $content; ?>
</head>
<body>
<div id="theme">
<?php require 'page/html/theme.html'; ?>
</div>
<header id="menu_main" data-bs-theme="dark">
<?php require 'page/html/menu.html'; ?>
</header>
<main>
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <iframe class="iframe" src="<?php echo $domen_name; ?>/bg/background.php" frameborder="0"></iframe>
      <div class="carousel-item carousel-item-next carousel-item-start">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Lorem ipsum dolor sit amet</h1>
            <p class="opacity-75">Support of IT community</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="carousel-caption">
            <h1>Discover IT</h1>
            <p>Lorem ipsum dolor sit amet</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div id="t3" class="carousel-item active carousel-item-start">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Lorem ipsum dolor sit amet</h1>
            <p>Rituals and IT</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container marketing">
    <div class="album py-5 bg-light section_global_a">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top conors" src="img/idea.png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <br><br><br>
                <p class="text_center">Application Design</p>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top conors" src="img/cloud.png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <br><br><br>
                <p class="text_center">Application Design</p>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top conors" src="img/computer (1).png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <br><br><br>
                <p class="text_center">Application Design</p>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top conors" src="img/computer.png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <br><br><br>
                <p class="text_center">Application Design</p>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top conors" src="img/folder.png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <br><br><br>
                <p class="text_center">Application Design</p>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top conors" src="img/plug.png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <br><br><br>
                <p class="text_center">Application Design</p>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="featurette-divider">
<div class="section_global_a">
  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading fw-normal lh-1">WHY US</h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit, totam recusandae deserunt mollitia nostrum sit accusamus facilis, excepturi impedit voluptatibus? Nemo, quos blanditiis similique ratione quisquam animi nesciunt natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam alias facere maiores sit fugiat dolore consectetur cupiditate quia animi temporibus tempore, quod repudiandae earum at? Sint officia enim ipsa eius.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="img_jjj" src="img/2.jpg" alt="img">
    </div>
  </div>
</div>
  <hr class="featurette-divider">
    <div class="row section_global_a">
      <h2 class="h1_cingl">Our team</h2>
    <div class="col-lg-4">
      <img class="user_say" src="img/user_1.jpg" alt="user_1">
      <h2 class="fw-normal">Arjun</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quod autem ab, molestiae, dolores adipisci quaerat repellat ipsam laudantium earum laborum obcaecati repudiandae reiciendis odit iure assumenda et. Praesentium, corporis.</p>
    </div>
    <div class="col-lg-4">
      <img class="user_say" src="img/user_2.jpg" alt="user_1">
      <h2 class="fw-normal">Sita</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quod autem ab, molestiae, dolores adipisci quaerat repellat ipsam laudantium earum laborum obcaecati repudiandae reiciendis odit iure assumenda et. Praesentium, corporis.</p>
    </div>
    <div class="col-lg-4">
      <img class="user_say" src="img/user_3.jpg" alt="user_1">
      <h2 class="fw-normal">Priya</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quod autem ab, molestiae, dolores adipisci quaerat repellat ipsam laudantium earum laborum obcaecati repudiandae reiciendis odit iure assumenda et. Praesentium, corporis.</p>
    </div>
  </div>
  <hr class="featurette-divider">
  <section id="testimonials" class="section_global_a testimonials">
    <h2 class="h1_cingl">Testimonials</h2>
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
        <div>
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <div class="d-flex align-items-center info-box">
                  <img src="img/user_1.jpg" class="testimonial-img flex-shrink-0" alt="">
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
                  <img src="img/user_2.jpg" class="testimonial-img flex-shrink-0" alt="">
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
                  <img src="img/user_3.jpg" class="testimonial-img flex-shrink-0" alt="">
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
                  <img src="img/user_1.jpg" class="testimonial-img flex-shrink-0" alt="">
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
  <footer class="footer"><?php require 'page/html/footer.html'; ?></footer>
  <script>
    let code = 0;
  </script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>