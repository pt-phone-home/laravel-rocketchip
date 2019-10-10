let sideNavBtn = document.getElementById("sidenavbutton");

let sideNav = document.getElementById("sidenav");

let sideNavClose = document.getElementById("sideNavClose");

let sideNavDropdownBtn = document.getElementById("sideNavDropdownBtn");

let sideNavDropdownMenu = document.getElementById("sideNavDropdownMenu");

sideNavBtn.addEventListener("click", function() {
    window.getComputedStyle(sideNav).display === "none"
        ? ((sideNav.style.display = "block"), (sideNav.style.width = "100%"))
        : (sideNav.style.display = "none");

    // sideNavBtn.addEventListener("click", function() {
    //     sideNavBtn.classList.add("rotate");
    // });
});

sideNavClose.addEventListener("click", function() {
    sideNav.style.display = "none";
});

sideNavDropdownBtn.addEventListener("click", function() {
    console.log("hello");
    window.getComputedStyle(sideNavDropdownMenu).display === "none"
        ? (sideNavDropdownMenu.style.display = "block")
        : (sideNavDropdownMenu.style.display = "none");
});
