$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  $(".hero").css({
    transform: 'translate3d(0, +' + (scroll / 100) + '%, 0) scale(' + (100 - scroll / 100) / 100 + ')'
  });
});
document.addEventListener('DOMContentLoaded', function () {
  let elems = document.querySelectorAll('.sidenav');
  let options = {
    edge: 'left',
    inDuration: 250,
    outDuration: 200,
    draggable: true
  }
  let instances = M.Sidenav.init(elems, options);
});



// autoTyping Text
var i = 0;
// var txt = 'Imagine . Create . Iterate ';
let A = ['Imagine . Create . Iterate ', 'Hello World ', 'this is javascript '];
let j = 0;
//let txt = A[j];
var speed = 120;

function typeWriter() {
  let txt = A[j];
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    if (i == txt.length) {
      speed = 700;
    } else {
      speed = 120;
    }
    setTimeout(typeWriter, speed);
  }
  if (i == txt.length) {
    i = 0;
    j = (j + 1) % A.length;
    document.getElementById("demo").innerHTML = "";
  }
}
typeWriter();
