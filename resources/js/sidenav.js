let sideNavBtn = document.getElementById("sidenavbutton");

let sideNav = document.getElementById("sidenav");

sideNavBtn.addEventListener("click", function() {
    window.getComputedStyle(sideNav).display === "none"
        ? ((sideNav.style.display = "block"), (sideNav.style.width = "100%"))
        : (sideNav.style.display = "none");

    // sideNavBtn.addEventListener("click", function() {
    //     sideNavBtn.classList.add("rotate");
    // });
});
