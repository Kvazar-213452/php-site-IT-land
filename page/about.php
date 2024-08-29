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
                <h1 id="consolas" class="top_h1"><a class="a_home" href="index.html">Home</a> / About</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
  <div class="container marketing">
  <div class="section_global_a">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">WHY US</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit, totam recusandae deserunt mollitia nostrum sit accusamus facilis, excepturi impedit voluptatibus? Nemo, quos blanditiis similique ratione quisquam animi nesciunt natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam alias facere maiores sit fugiat dolore consectetur cupiditate quia animi temporibus tempore, quod repudiandae earum at? Sint officia enim ipsa eius.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="img_jjj" src="<?php echo $domen_name; ?>/img/2.jpg" alt="img">
      </div>
    </div>
  </div>
    <hr class="featurette-divider">
   <div class="section_global_a">
    <h2 class="h1_cingl">Services</h2>
    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top conors" src="<?php echo $domen_name; ?>/img/idea.png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
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
                <img class="card-img-top conors" src="<?php echo $domen_name; ?>/img/cloud.png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
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
                <img class="card-img-top conors" src="<?php echo $domen_name; ?>/img/computer (1).png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
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
                <img class="card-img-top conors" src="<?php echo $domen_name; ?>/img/computer.png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
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
                <img class="card-img-top conors" src="<?php echo $domen_name; ?>/img/folder.png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
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
                <img class="card-img-top conors" src="<?php echo $domen_name; ?>/img/plug.png" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
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
   </div>

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