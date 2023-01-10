window.addEventListener("scroll", reveal2);
function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);
  

//per shkrim

    function reveal2() {
      var reveals2 = document.querySelectorAll(".reveal2");
    
      for (var i = 0; i < reveals2.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals2[i].getBoundingClientRect().top;
        var elementVisible = 150;
    
        if (elementTop < windowHeight - elementVisible) {
          reveals2[i].classList.add("active");
        } else {
          reveals2[i].classList.remove("active");
        }
      }
    }
    