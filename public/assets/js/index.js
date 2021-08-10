// Responsive Navigasi Bar
const menu = document.querySelector(".menu-list");
const menuBtn = document.querySelector(".menu-btn");
const cencelBtn = document.querySelector(".cencel-btn");
const body = document.querySelector("body");

menuBtn.onclick = () => {
    menu.classList.add("active");
    menuBtn.classList.add("active");
    body.classList.add("disabledScroll");
}

cencelBtn.onclick = () => {
    menu.classList.remove("active");
    menuBtn.classList.remove("active");
    body.classList.remove("disabledScroll");
}

document.querySelector(".home-btn-card").addEventListener("click", () => {
    console.log("Test");
})
