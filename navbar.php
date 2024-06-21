<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css">
    <!-- Fav Icon -->
    <link rel="icon" href="IMAGE/favicon-32x32.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<style>
    .list3 ul {
            display: none;
        }
        .show-nav ul {
            display: block;
        }
</style>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="IMAGE/Gofood-logo.png" alt="image">
        </div>
        <div class="list1" id="listContainer">
            <ul>
                <li><a href="user_index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="order.php">Order</a></li>
            </ul>
        </div>
        <div class="list2">
            <ul>
                <li>
                    <!-- List3 elemmets are visible when click on this -->
                    <p class="user_nav" id="userbar">
                        <?php
                         echo "<img src='USERIMG/".$_SESSION['user_img']."'>" . $_SESSION['username'];
                         ?>
                        &nbsp; &nbsp;<i class="fa fa-angle-down"></i>  
                    </p>
                </li>
            </ul>
        </div>
        <div class="nav-icon">
            <i class="fa fa-bars" id="bars"></i>
            <!-- <a href="#"><i class="fa fa-shopping-cart"></i></a> -->
        </div>
        <!-- These are Visible when List2 class = element 'p' is clicked -->
        <div class="list3" id="userNavContainer">
            <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="cart.php">My Cart</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <script src="JS/script.js"></script>


</body>

</html>