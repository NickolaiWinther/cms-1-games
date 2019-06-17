let loginBtn = document.querySelector(".loginBtn");
let loginForm = document.querySelector("aside .login");
let navBtns = document.querySelectorAll("nav ul li a");

if (loginBtn != null) {
    loginBtn.addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.toggle("hide");
        loginBtn.classList.toggle("rotate");
        loginBtn.classList.toggle("active");
    });
}

let hideAside = document.querySelector(".hide-aside");
let main = document.querySelector("main");
let aside = document.querySelector("aside");
let footer = document.querySelector("footer");

hideAside.addEventListener("click", e => {
    main.classList.toggle("slide");
    aside.classList.toggle("slide");
    footer.classList.toggle("slide");
});
