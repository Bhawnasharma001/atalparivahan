// let navbar=document.getElementsByClassName("phone-view-nav")[0];
// let iconmenu=document.getElementsByClassName("icon-menu")[0];
// iconmenu.addEventListener("click",function(){
//     if (navbar.style.display == "none" || navbar.style.display === "") {
//         navbar.style.display = "block";
//         navbar.style.color="black !important";
//         navbar.style.position="absolute";
//         navbar.style.right="0";
//     } else {
//         navbar.style.display = "none";
//     }
// });

// let navbar = document.getElementsByClassName("phone-view-nav")[0];
// let iconmenu = document.getElementsByClassName("icon-menu")[0];

// iconmenu.addEventListener("click", function () {
//     navbar.classList.toggle("active");
// });

let navbar = document.getElementsByClassName("phone-view-nav")[0];
let iconmenu = document.getElementsByClassName("icon-menu")[0];

// Toggle menu on icon click
iconmenu.addEventListener("click", function () {
    navbar.classList.toggle("active");
});

// Close menu when a nav-link is clicked
let navLinks = navbar.querySelectorAll("a");
navLinks.forEach(link => {
    link.addEventListener("click", function () {
        navbar.classList.remove("active"); 
    });
});

