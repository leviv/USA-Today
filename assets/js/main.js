$(document).ready(function() {
  if ($(document).scrollTop() > 100) {
      $('.hide').css("display", "none");
      $('.nav-logo').show();
      $("nav").css("position", "fixed");
      $("#masthead").hide();
  }
  else {
      $('.hide').css("display", "inline");
      $('.nav-logo').hide();
      $("nav").css("position", "absolute");
      $("#masthead").show();
  }

    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $('.hide').css("display", "none");
            $('.nav-logo').show();
            $("nav").css("position", "fixed");
            $("#masthead").hide();
            $("#social-sidebar").css("position", "fixed");
            $("#social-sidebar").css("top", "0px");
            $("#black-bars").css("position", "fixed");
            $("#black-bars").css("top", "90px");
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
    });
});
