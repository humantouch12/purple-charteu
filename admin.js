/////scroll function



window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 110 || document.documentElement.scrollTop > 110) {
    document.getElementById("scroll").style.width = "60%";
    document.getElementById("logo").style.width = "120px";
    document.getElementById("selection").style.bottom = "0";
    document.getElementById("selection2").style.bottom = "0";
    document.getElementById("selection3").style.bottom = "0";


  } else {
    document.getElementById("scroll").style.width = "100%";
    document.getElementById("logo").style.width = "150px";
    document.getElementById("selection").style.bottom = "250px";
    document.getElementById("selection2").style.bottom = "250px";
    document.getElementById("selection3").style.bottom = "250px";
  }
};



/////