$(document).ready(function() {
  chageCSS();

  $(window).scroll(function() {
    chageCSS();
  });
});

function chageCSS() {
  if ($(document).scrollTop() > 80) {
      $('.hide').css("display", "none");
      $('.nav-logo').show();
      $("nav").css("position", "fixed");
      $("#masthead").hide();
      $("#social-sidebar").css("position", "fixed");
      $("#social-sidebar").css("top", "39px");
      $("#black-bars").css("position", "fixed");
      $("#black-bars").css("top", "119px");
  }
  else {
      $('.hide').css("display", "inline");
      $('.nav-logo').hide();
      $("nav").css("position", "absolute");
      $("#masthead").show();
      $("#social-sidebar").css("position", "absolute");
      $("#social-sidebar").css("top", "120px");
      $("#black-bars").css("position", "absolute");
      $("#black-bars").css("top", "210px");
  }
}
