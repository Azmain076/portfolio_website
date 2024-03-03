// -------------- toggle Menu --------------
function toggleMenu() {
    var menu = document.querySelector('nav ul');
    menu.classList.toggle('show');

    var toggleBtn = document.querySelector('.toggle-btn');
    toggleBtn.classList.toggle('rotate');

    var profile = document.querySelector('#profile');
    profile.classList.toggle('lower');
}


// ------------------- back to top --------------------
document.addEventListener("DOMContentLoaded", function () {
    var btt_btn = document.getElementById("backToTop");

    window.addEventListener("scroll", handleScroll);

    function handleScroll() {
        if (window.pageYOffset > 600) {
            btt_btn.style.display = "block";
        } else {
            btt_btn.style.display = "none";
        }
    }

    function backToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }
    btt_btn.addEventListener("click", backToTop);
});