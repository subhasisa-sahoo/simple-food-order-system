<?php
session_start();
include 'db_session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/profile.css">
    <!-- Fav Icon -->
    <link rel="icon" href="IMAGE/favicon-32x32.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <header>
        <div class="box">
            <div class="pro_img">
                <img src="<?php echo 'USERIMG/' . $_SESSION['user_img']; ?>" alt="USER_IMG">
            </div>
            <div class="details">
                <p>Name</p>
                <p class="user_role"><?php echo ":" . " " . $_SESSION['username'];  ?></p>
            </div>
            <div class="details">
                <p>Email</p>
                <p class="user_role"><?php echo ":" . " " . $_SESSION['email'];  ?></p>
            </div>
            <div class="details">
                <p>Number</p>
                <p class="user_role"><?php echo ":" . " " . $_SESSION['mobile'];  ?></p>
            </div>
            <div class="details">
                <p>State</p>
                <p class="user_role"><?php echo ":" . " " . "ODISHA"  ?></p>
            </div>
            <div class="details">
                <p>City</p>
                <p class="user_role"><?php echo ":" . " " . $_SESSION['city'];  ?></p>
            </div>
            <div class="details">
                <p>PinCode</p>
                <p class="user_role"><?php echo ":" . " " . $_SESSION['pin'];  ?></p>
            </div>
            <div class="details">
                <p>House</p>
                <p class="user_role"><?php echo ":" . " " . $_SESSION['house'];  ?></p>
            </div>
            <div class="details">
                <p>Area</p>
                <p class="user_role"><?php echo ":" . " " . $_SESSION['area'];  ?></p>
            </div>
        </div>
    </header>

    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>

</body>

</html>