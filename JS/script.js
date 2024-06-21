// Common Navbar & Footer
//  NAVBAR
// const navbarPlace = document.getElementById('navbar-place');
// fetch("navbar.html")
//     .then(response => response.text())
//     .then(navbarContent => {
//         navbarPlace.innerHTML = navbarContent;
//     });
//  FOOTER
// const footerPlace = document.getElementById('footer-place');
// fetch("footer.html")
// .then(response => response.text())
// .then(footerContent =>{
//     footerPlace.innerHTML = footerContent;
// });


// it works for homepage-menu 
function showFoodCategory(category) {

    // Hide all menu
    const foodContainers = document.querySelectorAll('.food-container');
    foodContainers.forEach(container => {
        container.style.display = 'none';
    });
    // Show when click on button
    const selectedContainer = document.getElementById(`${category}-container`);
    selectedContainer.style.display = 'block';

    // change bgc color whwn clicked on button
    const buttons = document.querySelectorAll('.product-btn button');
    buttons.forEach(button => {
        if (button.getAttribute('data-category') === category) {
            button.style.backgroundColor = 'red';
            button.style.color = 'white';
        }
        else {
            button.style.backgroundColor = 'white';
            button.style.color = 'black';
        }
    });

}

// Default
window.onload = function () {
    showFoodCategory('birthday');
};

//Responsive Navbar

const barsIcon = document.getElementById("bars");
const listContainer = document.getElementById("listContainer");

barsIcon.addEventListener("click", function () {
    listContainer.classList.toggle("show-list");
});

//USER DETAILS NAVBAR = navbar.php
const userbarIcon = document.getElementById("userbar");
const userNavContainer = document.getElementById("userNavContainer");

userbarIcon.addEventListener("click", function() {
    userNavContainer.classList.toggle("show-nav");
});