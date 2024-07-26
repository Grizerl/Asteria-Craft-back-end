const span1=document.querySelector(".span-1")
const span2=document.querySelector(".span-2")
const content1=document.querySelector(".main-content")
const content2=document.querySelector(".main-content-2")
const burger = document.getElementById("burger");
const content = document.querySelector(".content-left"); 
span1.addEventListener("click",()=>{
content1.style.display="block"
content2.style.display="none"
span1.style.padding="6px 18px"
span2.style.padding="6px 9px"
});
span2.addEventListener("click",()=>{
  content1.style.display="none"
  content2.style.display="block"
  span1.style.padding="6px 9px"
  span2.style.padding="6px 18px"
  });
burger.addEventListener("click", () => {
    content.classList.toggle("open");
});
document.addEventListener("DOMContentLoaded", function () {
  let snowflakesContainer = document.querySelector(".snowflakes");

  for (let i = 0; i < 60; i++) {
      let snowflake = document.createElement("div");
      snowflake.className = "snowflake";
      snowflake.style.left = Math.random() * 100 + "vw";
      snowflake.style.animationDuration = Math.random() * 3 + 1.5 + "s";
      snowflakesContainer.appendChild(snowflake);
      
  }
});
const scroll_main = document.querySelector('#body');
scroll_main.addEventListener("DOMContentLoaded",function(){
    window.scrollTo(0,4800);
});

