<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN </title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/login.css">
    <!-- Fav Icon -->
    <link rel="icon" href="IMAGE/favicon-32x32.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <!-- Sweeralert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="login">
        <form action="" method="POST">
            <h1>Login</h1>
            <label>Email:</label><br>
            <input type="email" name="email" id="email" required><br>
            <!-- <span id="emailerror"></span><br> -->
            <label>Password:</label><br>
            <input type="password" name="user_password" id="password" minlength="9" required><br>
            <!-- <span id="pwderror"></span><br> -->
            <input type="submit" name="login" value="Submit">
            <span class="span_signup">Don't have an account? <a href="registration.php">Sign Up</a></span>
        </form>
    </div>
</body>

</html>
<?php
include 'db.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['user_password'];

    $query = "SELECT * FROM `registration` WHERE EMAIL = '$email' and binary PASSWORD = '$pwd' ";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $result_count = mysqli_num_rows($result);
        if ($result_count > 0) {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['username'] = $row['USERNAME'];
            $_SESSION['email'] = $row['EMAIL'];
            $_SESSION['password'] = $row['PASSWORD'];
            $_SESSION['user_img'] = $row['IMAGE'];
            $_SESSION['mobile'] = $row['MOBILE'];
            $_SESSION['city'] = $row['CITY'];
            $_SESSION['pin'] = $row['PIN_CODE'];
            $_SESSION['house'] = $row['HOUSE_NAME'];
            $_SESSION['area'] = $row['AREA_NAME'];

            // Display SweetAlert success message before redirection
            echo "<script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTime)
                }
            });
            Toast.fire({
                icon: 'success',
                title: 'Signed in successfully'
            }).then(function() {
                window.location.href = 'user_index.php';
            });
        </script>";
            // exit();
        } else {
            echo "<script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTime)
                }
            });
            Toast.fire({
                icon: 'error',
                title: 'Invalid Login Credential'
            })
        </script>";
        }
    }
}
?>
