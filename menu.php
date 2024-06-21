<?php
session_start();
include 'db_session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/order.css">
    <!-- Fav Icon -->
    <link rel="icon" href="IMAGE/favicon-32x32.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>

<body>
    <!-- NAV BAR START -->
    <?php
    include 'navbar.php';
    ?>
    <!-- NAV BAR END -->

    <!-- MENU PAGE START -->
    <section class="product" id="menu-product">
        <div class="product-header">
            <h2>menu</h2>
            <!-- <h1>EXPLORE OUR FOOD</h1> --> <!--.product-header h1 is exist in css cut this -->
        </div>
        <div class="underlineimg">
            <img src="IMAGE/underline.png" alt="image">
        </div>
        <div class="productin">
            <div class="product-btn">
                <button onclick="showFoodCategory('birthday')" data-category="birthday">BIRTHDAY</button>
                <button onclick="showFoodCategory('nonveg')" data-category="nonveg">NONVEG</button>
                <button onclick="showFoodCategory('custom')" data-category="custom">CUSTOM</button>
            </div>
            <div id="birthday-container" class="food-container">
                <div class="food-list">
                    <div class="foodin">
                        <img src="IMAGE/birthday/cake1.jpg" alt="image">
                        <div class="content">
                            <h5>CAKE</h5>
                            <h4> Fruit Coated Chocolate-Cake</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/birthday/cake2.jpg" alt="image">
                        <div class="content">
                            <h5>CAKE</h5>
                            <h4>Cup Cakes</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/birthday/cake3.jpg" alt="image">
                        <div class="content">
                            <h5>CAKE</h5>
                            <h4>Chocolate Sprinkles</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/birthday/cake4.jpg" alt="image">
                        <div class="content">
                            <h5>CAKE</h5>
                            <h4>Delicious Chocolate</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                </div>

                <div class="food-list">
                    <div class="foodin">
                        <img src="IMAGE/birthday/cake5.webp" alt="image">
                        <div class="content">
                            <h5>CAKE</h5>
                            <h4>Vanilla </h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/birthday/cake6.jpg" alt="image">
                        <div class="content">
                            <h5>CAKE</h5>
                            <h4>Strawbeery</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/birthday/cake7.jpg" alt="image">
                        <div class="content">
                            <h5>CAKE</h5>
                            <h4>Chocolate Strawberry Cake </h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/birthday/cake8.jpg" alt="image">
                        <div class="content">
                            <h5>CAKE</h5>
                            <h4>Pineapple Cake</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                </div>

            </div>

            <div id="nonveg-container" class="food-container">
                <div class="food-list">
                    <div class="foodin">
                        <img src="IMAGE/nonveg1.jpg" alt="image">
                        <div class="content">
                            <h5>NON VEG</h5>
                            <h4>Chicken Biryani</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/nonveg2.jpg" alt="image">
                        <div class="content">
                            <h5>NON VEG</h5>
                            <h4>Butter Chicken</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/nonveg3.jpg" alt="image">
                        <div class="content">
                            <h5>NON VEG</h5>
                            <h4>Fried chicken Kebab</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/nonveg4.jpg" alt="image">
                        <div class="content">
                            <h5>NON VEG</h5>
                            <h4>Butter Chicken</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                </div>

                <div class="food-list">
                    <div class="foodin">
                        <img src="IMAGE/nonveg5.jpg" alt="image">
                        <div class="content">
                            <h5>NON VEG</h5>
                            <h4>Chicken tikka</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/nonveg6.jpg" alt="image">
                        <div class="content">
                            <h5>NON VEG</h5>
                            <h4>PIZZA</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/nonveg7.jpg" alt="image">
                        <div class="content">
                            <h5>NON VEG</h5>
                            <h4>Chicken-Kathi-Roll</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/nonveg8.jpg" alt="image">
                        <div class="content">
                            <h5>NON VEG</h5>
                            <h4>Chilli Chicken</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                </div>

            </div>

            <div id="custom-container" class="food-container">
                <div class="food-list">
                    <div class="foodin">
                        <img src="IMAGE/custom1.jpg" alt="image">
                        <div class="content">
                            <h5>STREET FOOD</h5>
                            <h4>Burger </h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/custom2.jpg" alt="image">
                        <div class="content">
                            <h5>STREET FOOD</h5>
                            <h4>PIZZA</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/custom3.jpg" alt="image">
                        <div class="content">
                            <h5>STREET FOOD</h5>
                            <h4> Veg Chowmein</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/custom4.jpg" alt="image">
                        <div class="content">
                            <h5>STREET FOOD</h5>
                            <h4>PANIPURI</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                </div>

                <div class="food-list">
                    <div class="foodin">
                        <img src="IMAGE/custom5.webp" alt="image">
                        <div class="content">
                            <h5>STREET FOOD</h5>
                            <h4>Bhel Puri</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/custom6.jpg" alt="image">
                        <div class="content">
                            <h5>STREET FOOD</h5>
                            <h4>Pavbhaji</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/custom7.jpg" alt="image">
                        <div class="content">
                            <h5>STREET FOOD</h5>
                            <h4>DOSA</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                    <div class="foodin">
                        <img src="IMAGE/custom8.webp" alt="image">
                        <div class="content">
                            <h5>STREET FOOD</h5>
                            <h4>Paneer Fry</h4>
                            <p>$19.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="showbtn">
            <a href="#">Show more....</a>
        </div>
    </section>
    <!-- MENU PAGE END -->

    <!-- Footer Section start -->
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
    <!-- Footer section END -->
</body>
<script src="JS/script.js"></script>

</html>