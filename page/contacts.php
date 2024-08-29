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
            <h1 id="consolas" class="top_h1"><a class="a_home" href="index.html">Home</a> / Contacts us</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container marketing">
<iframe class="iframe_1 section_global_a" id="contactFrame" src="contact.php" frameborder="0"></iframe>
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