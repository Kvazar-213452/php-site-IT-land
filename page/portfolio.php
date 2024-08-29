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
                <h1 id="consolas" class="top_h1"><a class="a_home" href="index.html">Home</a> / Portfolio</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
  <div class="container marketing section_global_a">
    <img class="img_gallery" src="<?php echo $domen_name; ?>/img/portfolio/product-1.jpg" alt="gallery">
    <img class="img_gallery" src="<?php echo $domen_name; ?>/img/portfolio/product-2.jpg" alt="gallery">
    <img class="img_gallery" src="<?php echo $domen_name; ?>/img/portfolio/product-3.jpg" alt="gallery">
    <img class="img_gallery" src="<?php echo $domen_name; ?>/img/portfolio/product-4.jpg" alt="gallery">
    <img class="img_gallery" src="<?php echo $domen_name; ?>/img/portfolio/product-5.jpg" alt="gallery">
    <img class="img_gallery" src="<?php echo $domen_name; ?>/img/portfolio/product-6.jpg" alt="gallery">
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