$(document).ready(function() {
  chageCSS();

  $(window).scroll(function() {
    chageCSS();
  });
});

function chageCSS() {
  if ($(document).scrollTop() > 80) {
    $('body').removeClass('masthead');
  }
  else {
    $('body').addClass('masthead');
  }
}
