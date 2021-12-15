//scroll do navbar
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}

//inglês-português
document.addEventListener('DOMContentLoaded', function () {
    var checkbox = document.querySelector('input[type="checkbox"]');
  
    checkbox.addEventListener('change', function () {
      if (checkbox.checked) {
        // do this
        //Não esqueça de alterar conforme está sua pasta no htdocs
        location.href = 'http://localhost/AyoikePHP/src/index.php'
      } else {
        // do that
        //esse também, verifique e altere
        location.href = 'http://localhost/AyoikePHP/src/ingles/src/index.php'
      }
    });
  });