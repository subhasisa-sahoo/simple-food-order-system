<?php
session_start();
include 'db_session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve Your Table</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/reserve.css">
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
    <?php
    include 'navbar.php';
    ?>

    <div class="reserve-header">
        <h2>Reservation</h2>
        <h1>Book Your Table</h1>
    </div>
    <div class="underlineimg">
        <img src="IMAGE/underline.png" alt="image">
    </div>
    <section class="reserve">
        <form onsubmit="return validate()" method="POST">
            <div class="table-content">
                <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
                <p>Party Size</p>
                <select name="people">
                    <option value="1">1 People</option>
                    <option value="2">2 People</option>
                    <option value="3">3 People</option>
                    <option value="4">4 People</option>
                    <option value="5">5 People</option>
                    <option value="6">6 People</option>
                    <option value="7">7 People</option>
                    <option value="8">8 People</option>
                    <option value="9">9 People</option>
                    <option value="10">10 People</option>
                    <option value="11">11 People</option>
                    <option value="12">12 People</option>
                    <option value="13">13 People</option>
                    <option value="14">14 People</option>
                    <option value="15">15 People</option>
                    <option value="15">15 People</option>
                    <option value="16">16 People</option>
                    <option value="17">17 People</option>
                    <option value="18">18 People</option>
                    <option value="19">19 People</option>
                    <option value="20">20 People</option>
                    <option value="21">21 People</option>
                </select>
                <p>Date</p>
                <input type="date" name="date" id="user_date">
                <span id="checkdt"></span>
                <p>Time</p>
                <select name="time">
                    <option value="10:30 AM">10:30 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="11:30 AM">11:30 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="12:30 PM">12:30 PM</option>
                    <option value="1:00 PM">1:00 PM</option>
                    <option value="1:30 PM">1:30 PM</option>
                    <option value="2:00 PM">2:00 PM</option>
                    <option value="2:30 PM">2:30 PM</option>
                    <option value="3:00 PM">3:00 PM</option>
                    <option value="3:30 PM">3:30 PM</option>
                    <option value="4:00 PM">4:00 PM</option>
                    <option value="4:30 PM">4:30 PM</option>
                    <option value="5:00 PM">5:00 PM</option>
                    <option value="5:30 PM">5:30 PM</option>
                    <option value="6:00 PM">6:00 PM</option>
                    <option value="6:30 PM">6:30 PM</option>
                    <option value="7:00 PM">7:00 PM</option>
                    <option value="7:30 PM">7:30 PM</option>
                    <option value="8:00 PM">8:00 PM</option>
                    <option value="8:30 PM">8:30 PM</option>
                    <option value="9:00 PM">9:00 PM</option>
                    <option value="9:30 PM">9:30 PM</option>
                    <option value="10:00 PM">10:00 PM</option>
                </select><br>
                <p>Mobile</p>
                <input type="tel" name="mobile" id="mobile" placeholder="Enter Your Number" minlength="10" maxlength="10" required>
                <span id="moberror"></span><br>
                <div class="btn">
                    <input type="submit" name="book" value="BOOK NOW">
                </div>
            </div>
        </form>
    </section>
    <?php
    include 'footer.php';
    ?>
</body>
<script>
    //RESERVATION PAGE
    function validate() {
        var isValid = true;
        let mobile = document.getElementById("mobile").value;
        const pattern = /^[789][0-9]{9}$/;
        if (pattern.test(mobile)) {
            moberror.innerHTML = '<i class="fa fa-check-circle"></i>';
        } else {
            moberror.innerHTML = "Mobile Number Must start from [9, 8 ,7]";
            isValid = false;
        }

        let CurrentDate = new Date();
        let userInput = new Date(document.getElementById("user_date").value);
        if (CurrentDate < userInput) {
            document.getElementById("checkdt").innerHTML = '<i class="fa fa-check-circle"></i>';
        } else {
            document.getElementById("checkdt").innerHTML = "Enter Correct Date";
            isValid = false;
        }
        return isValid;
    }
</script>

</html>
<?php
if (isset($_POST['book'])) {
    $res_email = $_POST['email'];
    $people = $_POST['people'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO reserve_table(EMAIL, People, Date, Time, Mobile) VALUES ('$res_email', '$people','$date', '$time', '$mobile')";
    $insert = mysqli_query($conn, $sql);
    if ($insert) {
?>
        <script>
            swal({
                title: "Booking Confirmed!",
                text: "Your table is reserved.",
                icon: "success",
                button: "OK",
            });
        </script>
<?php
    } else {
        echo "jv";
    }
}
?>