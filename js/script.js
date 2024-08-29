$(document).ready(function() {
  $('.col-md-4').on('click', function() {
      window.location.href = 'services.html';
  });
});

$(document).ready(function() {
  $('#nnn').on('click', function() {
      window.location.href = 'blog.html';
  });
});

function applyStyle(style) {
  $('#style').attr('href', 'css/' + style + '.css');
  localStorage.setItem('preferredStyle', style);
}

$(document).ready(function() {

  const preferredStyle = localStorage.getItem('preferredStyle');
  if (preferredStyle) {
      applyStyle(preferredStyle);
  } else {
      applyStyle('w');
  }

  $('#styleW').on('click', function() {
      applyStyle('w');
  });

  $('#styleB').on('click', function() {
      applyStyle('b');
  });
});

document.addEventListener('DOMContentLoaded', function() {
  let sections = document.querySelectorAll('.section_global_a');

  function checkScroll() {
      sections.forEach(section => {
          if (!section.classList.contains('active')) { 
              let sectionTop = section.getBoundingClientRect().top;
              let windowHeight = window.innerHeight;
              if (sectionTop < windowHeight * 0.75) {
                  section.classList.add('active');
              }
          }
      });
  }

  window.addEventListener('scroll', checkScroll);
  checkScroll(); 
});