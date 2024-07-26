const burger = document.getElementById("burger");
const content = document.querySelector(".content-left"); 
burger.addEventListener("click", () => {
    content.classList.toggle("open");
});

