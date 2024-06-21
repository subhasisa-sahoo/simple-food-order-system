<?php
session_start();
include 'db_session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Your Food Online</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css">
    <!-- Fav Icon -->
    <link rel="icon" href="IMAGE/favicon-32x32.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>

<body>
    <header>
        <!-- NAV BAR START -->
        <?php
        include 'navbar.php';
        ?>
        <!-- NAV BAR END -->
        <!-- HOME PAGE START -->
        <div class="home">
            <div class="homepic">
                <img src="IMAGE/homepic1.png" alt="image">
            </div>
            <div class="content">
                <h1>Foodie, Burgers, and</h1>
                <h1>Best Pizzas in Town!</h1>
                <p>Indulge in irresistible burgers and pizzas that cater to your cravings. Perfect for foodies, burger
                    enthusiasts, and pizza aficionados. Effortless ordering guarantees a delightful culinary journey
                    that will leave your taste buds craving for more.</p>
                <div class="tick">
                    <div class="tickin">
                        <i class="fa fa-check-circle"></i>
                        <span>Delicious & Healthy Foods</span><br>
                    </div>
                    <div class="tickin">
                        <i class="fa fa-check-circle"></i>
                        <span>Spacific Familiy And Kids Zone</span><br>
                    </div>
                    <div class="tickin"><i class="fa fa-check-circle"></i>
                        <span>Offers high-quality dining experience</span><br>
                    </div>
                    <div class="tickin">
                        <i class="fa fa-check-circle"></i>
                        <span>Fastest Food Home Delivery</span>
                    </div>
                </div>
                <div id="orderbtn">
                    <a href="order.php">Order Now</a>
                </div>
            </div>
        </div>
        <!-- HOME PAGE END -->
        <!-- About Us START -->
        <section class="about" id="about">
            <div class="aboutheader">
                <h2>about us</h2>
                <h1>WELCOME TO FOODZONE</h1>
            </div>
            <div class="underlineimg">
                <img src="IMAGE/underline.jpg" alt="image">
            </div>

            <div class="aboutin">
                <div class="img">
                    <img src="IMAGE/deliveryimg.jpg" alt="image">
                </div>
                <div class="content">
                    <h1>Best Food In The Town</h1>
                    <p>The restaurant is a cozy place to eat delicious food. It has a warm atmosphere with friendly
                        staff. The menu offers a variety of tasty dishes, from burgers to salads.</p>
                    <p> Whether it's a family dinner or a casual lunch with friends, the restaurant provides a
                        satisfying dining experience. The aroma of the food fills the air, making your taste buds tingle
                        with excitement.</p>
                    <div class="ftbtn">
                        <div class="ftbtnin">
                            <i class="fa fa-truck fa-flip-horizontal"></i>
                            <a href="#">Free Delivery</a>
                        </div>
                        <div class="ftbtnin">
                            <i class="fa fa-dollar"></i>
                            <a href="#">Easy Payment</a>
                        </div>
                        <div class="ftbtnin">
                            <i class="fa fa-phone"></i>
                            <a href="#">24/7 Service</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- About Us END -->
        <!-- MENU PAGE START -->
        <section class="product" id="menu-product">
            <div class="product-header">
                <h2>menu</h2>
                <!-- <h1>EXPLORE OUR FOOD</h1> --> <!--.product-header h1 is exist in css cut this -->
            </div>
            <div class="underlineimg">
                <img src="IMAGE/underline.jpg" alt="image">
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
                            <img src="IMAGE/birthday/cake5.jpg" alt="image">
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
                            <img src="IMAGE/custom5.jpg" alt="image">
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
                            <img src="IMAGE/custom8.jpg" alt="image">
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
                <a href="menu.html">Show more....</a>
            </div>
        </section>
        <!-- MENU PAGE END -->
        <!-- OUR TEAM START -->
        <section class="team">
            <h2>OUR MASTER CHEFS TEAM</h2>
            <div class="underlineimg">
                <img src="IMAGE/underline.jpg" alt="image">
            </div>
            <div class="teamin">
                <div class="team-member">
                    <img src="IMAGE/chef1.jpg" alt="image">
                    <div class="content">
                        <h4>Holden Caulfield</h4>
                        <h5>Executive chef</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                        <div class="t-icon">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <img src="IMAGE/chef4 (1).jpg" alt="image">
                    <div class="content">
                        <h4>Charlotte</h4>
                        <h5>Kitchen manager</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                        <div class="t-icon">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <img src="IMAGE/chef3.jpg" alt="image">
                    <div class="content">
                        <h4>Harshraj Singh</h4>
                        <h5>Station chef</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                        <div class="t-icon">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <img src="IMAGE/chef6.jpg" alt="image">
                    <div class="content">
                        <h4>Josephine</h4>
                        <h5>Assistant cooks</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                        <div class="t-icon">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-comments"></i>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- OUR TEAM END -->
        <!-- TESTIMONAL/ REVIEW PAGE START -->
        <div class="review" id="review">
            <h2>Testimonal</h2>
            <h1>Customer's Review</h1>
            <div class="underlineimg">
                <img src="IMAGE/underline.jpg" alt="image">
            </div>
            <div class="rmberflex">
                <div class="reviewin">
                    <!-- member-1 -->
                    <div class="review-member">
                        <img src="IMAGE/review1.jpg" alt="image">
                        <div class="r-name">
                            <h3>Harry Potter</h3>
                            <p>@harrypotter788</p>
                        </div>
                        <div class="r-icon">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div class="r-comment">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus ratione error,
                            dignissimos
                            vitae suscipit labore officiis mollitia consequatur aut recusandae!</p>
                    </div>
                </div>

                <!-- member2 -->
                <div class="reviewin">
                    <div class="review-member">
                        <img src="IMAGE/review2.jpg" alt="image">
                        <div class="r-name">
                            <h3>Harry Potter</h3>
                            <p>@harrypotter788</p>
                        </div>
                        <div class="r-icon">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="r-comment">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus ratione error,
                            dignissimos
                            vitae suscipit labore officiis mollitia consequatur aut recusandae!</p>
                    </div>
                </div>
            </div>


        </div>

        <!-- member3-4 -->
        <div class="rmberflex2">
            <div class="reviewin">
                <!-- member-3 -->
                <div class="review-member">
                    <img src="IMAGE/review3.jpg" alt="image">
                    <div class="r-name">
                        <h3>Jk Rowl</h3>
                        <p>@jkrowl446</p>
                    </div>
                    <div class="r-icon">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="r-comment">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus ratione error,
                        dignissimos
                        vitae suscipit labore officiis mollitia consequatur aut recusandae!</p>
                </div>
            </div>

            <!-- member4 -->
            <div class="reviewin">
                <div class="review-member">
                    <img src="IMAGE/review4.jpg" alt="image">
                    <div class="r-name">
                        <h3>Oliva</h3>
                        <p>@olivaward32</p>
                    </div>
                    <div class="r-icon">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="r-comment">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus ratione error, dignissimos
                        vitae suscipit labore officiis mollitia consequatur aut recusandae!</p>
                </div>
            </div>
        </div>
        <!-- TESTIMONAL/ REVIEW PAGE END -->
    </header>

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