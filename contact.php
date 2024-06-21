<?php
session_start();
include 'db_session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <!-- Fav Icon -->
    <link rel="icon" href="IMAGE/favicon-32x32.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <!-- Sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Contact Us</title>
</head>

<body>
    <!-- NAV BAR START -->
    <?php
    include 'navbar.php';
    ?>
    <!-- NAV BAR END -->
    <!-- Form-Contact us -->
    <form action="#" method="POST">
        <div class="form-head">
            <h2>Contact Us</h2>
            <div class="underlineimg">
                <img src="IMAGE/underline.png" alt="image">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, voluptatibus. Officia </p>
        </div>
        <div class="form-all">
            <div class="form-flex">
                <div class="f-name">
                    <label>Name</label><br>
                    <input type="text" name="name" value="<?php echo $_SESSION['username']; ?>" >
                </div>
                <div class="f-email">
                    <label>Email</label><br>
                    <input type="email" name="email" value="<?php echo $_SESSION['email'];?>" readonly>
                </div>
            </div>
            <div class="f-msg">
                <label>Messege</label><br>
                <input type="text" name="msg" required>
            </div>
            <div class="f-btn">
                <input type="submit" name="submit" value="Send Messege">
            </div>
        </div>
    </form>

    <!-- Card -->
    <div class="box">
        <div class="boxin">
            <div class="adrs">
                <p>ADDRESS</p>
                <span>Bhubaneswar, Odisha - 751016</span>
            </div>

            <div class="email">
                <p>EMAIL</p>
                <span>support@restu.gmail.com</span><br>
                <span>event.book@restu.gmail.com</span>
            </div>
            <div class="phone">
                <p>PHONE</p>
                <span>+123 456-7890</span><br>
                <span> +111-222-333</span>
            </div>

        </div>
    </div>
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

<?php
error_reporting(0);
include 'db.php';

if ($_POST['submit']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['msg'];

    $sql = "INSERT INTO `contact` (Name, Email, Message) VALUES ('$name', '$email', '$message')";

    $insert = mysqli_query($conn, $sql);
?>

    <script>
        swal({
            title: "Done",
            text: "Messege Sent Successfully",
            icon: "success",

        });
    </script>

<?php
    // 
}
?>