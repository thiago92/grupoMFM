var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    $('#my-navbar').removeClass('fixed-top');
  } else {
    $('#my-navbar').addClass('fixed-top');
  }

  prevScrollpos = currentScrollPos;
};