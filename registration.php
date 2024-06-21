<?php
session_start();
error_reporting(0);
include 'db.php';
if(isset($_POST['register'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $img = $_FILES['uploadimg']['name'];
    $password = $_POST['password'];
    // $state = $_POST['state'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $house_name = $_POST['house'];
    $area_name = $_POST['area'];

    //INSERTING USER IMAGE
    $filename = $_FILES["uploadimg"]["name"];
    $tmpname = $_FILES["uploadimg"]["tmp_name"];
    $folder = "USERIMG/" .$filename;
    move_uploaded_file($tmpname, $folder);

    $insert = "INSERT INTO `registration`(USERNAME, EMAIL, MOBILE, IMAGE, PASSWORD, CITY, PIN_CODE, HOUSE_NAME, AREA_NAME) VALUES ('$name','$email', '$mobile', '$img', '$password', '$city', '$pin', '$house_name', '$area_name')";
    $query = mysqli_query($conn, $insert);
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration || Order Your food Online</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/register.css">
    <!-- Fav Icon -->
    <link rel="icon" href="IMAGE/favicon-32x32.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <!-- Sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="register">
        <form onsubmit="return validateRegForm()" method="POST" enctype="multipart/form-data">
            <h1>Registration Form</h1>
            <label>Username:</label><br>
            <input type="text" name="username" id="username" required><br>
            <span id="usererror"></span><br>
            <label>Email:</label><br>
            <input type="email" name="email" id="email" required><br>
            <span id="emailerror"></span><br>
            <label>Mobile:</label><br>
            <input type="tel" name="mobile" id="mobile" minlength="10" maxlength="10" required><br>
            <span id="moberror"></span><br>
            <label>Image</label>
            <input type="file" name="uploadimg" id="img" accept=".jpg, .jpeg, .png"><br>
            <br>
            <label>Password:</label><br>
            <input type="password" name="password" id="password" minlength="9" required><br>
            <span id="pwderror"></span><br>
            <label>Confirm Password:</label><br>
            <input type="password" name="confirm_password" id="confirm_password" required><br>
            <span id="conpwderror"></span><br>
            <label>State</label>
            <input type="text" name="state" value="ODISHA" disabled><br>
            <br>
            <label>City:</label><br>
            <select name="city" id="city">
                <option value="1" disabled selected>Select Your City</option>
                <option value="Bhubaneswar">Bhubaneswar</option>
                <option value="Cuttack">Cuttack</option>
                <option value="Khordha">Khordha</option>
                <option value="Rayagada">Rayagada</option>
                <option value="Nayagarh">Nayagarh</option>
            </select><br>
            <span id="cityerror"></span><br>
            <label>PIN CODE:</label><br>
            <input type="tel" name="pin" id="pin" minlength="6" maxlength="6" required><br>
            <span id="pinerror"></span><br>
            <label>House / Building Name:</label><br>
            <input type="text" name="house" id="house" required><br>
            <span id="houseerror"></span><br>
            <label>Area / Colony:</label><br>
            <input type="text" name="area" id="area" required><br>
            <span id="areaerror"></span>
            <input type="submit" name="register" value="Register">
        </form>
    </div>
    <script src="JS/validate.js"></script>
</body>

</html>
<?php
if($query){
    ?>
    <script>
     swal({
        title: "Done",
        text: "Registration Successfull",
        icon: "success",
    })
    .then(function(){
        window.location.href = 'login.php';
    });
</script> 
<?php
 }
?>