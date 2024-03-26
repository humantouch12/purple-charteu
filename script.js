
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


/////ist select option

const optionMenu = document.querySelector(".select-menu"),
        selectBtn = optionMenu.querySelector(".select-btn"),
options = optionMenu.querySelectorAll(".option"),
sBtn_text = optionMenu.querySelector(".sBtn-text");

selectBtn.addEventListener("click", () => 
optionMenu.classList.toggle("active"));

options.forEach(option =>{
    option.addEventListener("click", ()=>{

        let selectedOption =option.querySelector(".option-text").innerHTML;
        sBtn_text.innerHTML = selectedOption;

        optionMenu.classList.remove("active");
    });

});


/////Multiple  select option


const selectBbtn = document.querySelector(".select-btnn"),
      items = document.querySelectorAll(".item");

selectBbtn.addEventListener("click", () => {
    selectBbtn.classList.toggle("open");
});

items.forEach(item => {
    item.addEventListener("click", () => {
        item.classList.toggle("checked");

        let checked = document.querySelectorAll(".checked"),
            btnText = document.querySelector(".btn-text");

            if(checked && checked.length > 0){
                btnText.innerText = `${checked.length} Selected`;
            }else{
                btnText.innerText = "Property Type";
            }
    });
})


/////2nd  select option
const optionMenu2 = document.querySelector(".select-menu2"),
        selectBtn2 = optionMenu2.querySelector(".select-btn2"),
options2 = optionMenu2.querySelectorAll(".option2"),
sBtn_text2 = optionMenu2.querySelector(".sBtn-text2");

selectBtn2.addEventListener("click", () => 
optionMenu2.classList.toggle("active"));

options2.forEach(option =>{
    option.addEventListener("click", ()=>{

        let selectedOption2 =option.querySelector(".option-text2").innerHTML;
        sBtn_text2.innerHTML = selectedOption2;

        optionMenu2.classList.remove("active");
    });

});

//////////////////////////////on scroll function for multi selection



////////////////////////////// slide function 



window.addEventListener("DOMContentLoaded", function(e) {
  
    
  
    var stage = document.getElementById("slide");
    var fadeComplete = function(e) { stage.appendChild(arr[0]); };
    var arr = stage.getElementsByTagName("b");
    for(var i=0; i < arr.length; i++) {
      arr[i].addEventListener("animationend", fadeComplete, false);
    }
  
  }, false);
  
  
  //////////////////////////////////////// slide function 

  window.addEventListener("DOMContentLoaded", function(e) {
  
    
  
    var stage = document.getElementById("slide");
    var fadeComplete = function(e) { stage.appendChild(arr[0]); };
    var arr = stage.getElementsByTagName("b");
    for(var i=0; i < arr.length; i++) {
      arr[i].addEventListener("animationend", fadeComplete, false);
    }
  
  }, false);

    /////////////////////////////////////////////////////////

 