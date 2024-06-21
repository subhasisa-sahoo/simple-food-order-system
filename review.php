<?php
session_start();
include 'db_session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
    <!-- NAV BAR START -->
    <?php
    include 'navbar.php';
    ?>
    <!-- NAV BAR END -->

    <!-- About Us START -->
    <!-- OUR TEAM END -->
    <!-- TESTIMONAL/ REVIEW PAGE START -->
    <div class="review" id="review">
        <h2>Testimonal</h2>
        <h1>Customer's Review</h1>
        <div class="underlineimg">
            <img src="IMAGE/underline.png" alt="image">
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
                <img src="IMAGE/review3.jpeg" alt="image">
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
                <img src="IMAGE/review4.png" alt="image">
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