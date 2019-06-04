let loginBtn = document.querySelector("aside nav ul li:last-child a");
let loginForm = document.querySelector("aside .login");

loginBtn.addEventListener("click", function(e) {
    e.preventDefault();
    loginForm.classList.toggle("hide");
    loginBtn.classList.toggle("rotate");
});
