$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $(".hero").css({
    transform: 'translate3d(0, +'+(scroll/100)+'%, 0) scale('+(100 - scroll/100)/100+')'
  });
});
document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.sidenav');
    let options = {
      edge: 'left',
      inDuration: 250,
      outDuration: 200,
      draggable: true
    }
    let instances = M.Sidenav.init(elems, options);
  });