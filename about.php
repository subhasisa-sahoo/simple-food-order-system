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
    <section class="about" id="about">
        <div class="aboutheader">
            <h2>about us</h2>
            <h1>WELCOME TO FOODZONE</h1>
        </div>
        <div class="underlineimg">
            <img src="IMAGE/underline.png" alt="image">
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


    <!-- Footer Section start -->
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
    <!-- Footer section END -->

    <!-- About Us END -->
</body>
<script src="JS/script.js"></script>

</html>