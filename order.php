<?php
session_start();
include 'db_session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/order.css">
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
    <!-- NAV BAR START -->
    <?php
    include 'navbar.php';
    ?>
    <!-- NAV BAR END -->

    <!-- Order Page START -->
    <section class="order">
        <h2>Order now</h2>
        <div class="underlineimg">
            <img src="IMAGE/underline.png" alt="image">
        </div>
        <form action="#" method="POST">
            <div class="orderin">
                <div class="inputBox">
                    <div class="input">
                        <label>Your Name</label><br>
                        <input type="text" placeholder="Enter Your Name" name="name" value= "<?php echo $_SESSION['username']; ?>" >
                    </div>
                    <div class="input">
                        <label>Contact Number</label><br>
                        <input type="number" placeholder="Enter Your Number" name="number" minlength="10" value= "<?php echo $_SESSION['mobile']; ?>" >
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <label>Your Order</label><br>
                        <input type="text" placeholder="Food Name" name="order" required>
                    </div>
                    <div class="input">
                        <label>Additional Food</label><br>
                        <input type="text" placeholder="Extra food Name" name="adorder">
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <label>Quantity</label><br>
                        <input type="number" placeholder=" e.g: 5" name="quantity" min="1" required>
                    </div>
                    <div class="input">
                        <label>Mode of Payment</label><br>
                        <!-- <input type="text"  name="adorder"> -->
                        <select name="payment">
                            <option>Cash On Delivery</option>
                            <!-- <option>Phonepe UPI</option>
                            <option>Debit Card</option>
                            <option>Credit Card</option> -->
                        </select>
                    </div>
                </div>
                <div class="inputbox">
                    <input type="hidden" name="email" value= "<?php echo $_SESSION['email']; ?>">
                </div>
                <div class="inputbox">
                    <input type="hidden" name="status" value= "Pending">
                </div>
                <div class="inputBox">
                    <div class="inputta">
                        <label>Shipping Address</label><br>
                        <textarea name="adrs" rows="8" cols="43">
                            <?php echo  "\n"
                             .$_SESSION['house']. "\n"
                            .$_SESSION['area']. "\n"
                            .$_SESSION['pin']. "\n"
                            .$_SESSION['city']. "\n"
                            ."ODISHA";
                            ?>
                            </textarea>
                    </div>
                    <div class="inputta">
                        <label>Your Message</label><br>
                        <textarea name="msg" rows="8" cols="43"></textarea>
                    </div>
                </div>
                <div class="smbtn">
                    <input type="submit" name="submit" value="BUY NOW">
                </div>

            </div>

        </form>
    </section>

    <!-- Order Page End -->


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

// Email send Part
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $order = $_POST['order'];
    $Addorder = $_POST['adorder'];
    $quantity = $_POST['quantity'];
    $payment = $_POST['payment'];
    $shipping = $_POST['adrs'];
    $message = $_POST['msg'];
    $status = $_POST['status'];

    $sql = "INSERT INTO `order_form` (Name, Number, EMAIL, `Order`, `AddOrder`, Quantity, PaymentMode, Shipping, Message, STATUS) VALUES ('$name', '$number', '$email', '$order', '$Addorder','$quantity', '$payment', '$shipping', '$message', '$status')";
    //Order is Mysql predefined keyword so backtick is requied to

    $insert = mysqli_query($conn, $sql);
?>

    <script>
        function redirectToPage() {
            window.location.href = ""; // Replace 'redirect_page.php' with the URL of the page you want to redirect to.
        }


        swal({
                title: "Congratulation!",
                text: "Order Successfully Placed",
                icon: "success",
            })

            .then((result) => {
                if (result) {
                    redirectToPage(); // Redirect the user after they click "OK" on the SweetAlert
                }
            });
    </script>


<?php
// Email send Part
//Load Composer's autoloader
require 'PHPMailer/src/DSNConfigurator.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gofood.live@gmail.com';                //SMTP username
    $mail->Password   = 'friesvcuiyrsycot';                     //SMTP password [generated by google]
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('gofood.live@gmail.com', 'GOFOOD Restaurant');
    $mail->addAddress("$email", "$name");     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('gofood.live@gmail.com', 'GOFOOD Restaurant');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirmation regarding Your order for '."$order";
$mail->Body = 'Dear'." "."$name".',<br><br>
    Thank you for your order! We have received your order and it is being processed. Here are the details of your order:<br>
    Order Name: '."$order".'<br>
    Quantity: '."$quantity".'<br>
    Shipping Address: '."$shipping".'<br>
    Payment Method: '."$payment".'<br><br>
    
    If you have any questions or concerns, feel free to reach out to our customer support at '."<a href='tel:+91 9090909090'>+91 9090909090</a>".' or reply to this email.<br><br>
    
    Thank you for choosing us!<br><br>
    Best regards,<br>    
    GOFOOD Restaurant';

$mail->AltBody = 'Dear [Customer Name],

    Thank you for your order! We have received your order and it is being processed.
    Here are the details of your order:
    Order Name: '."$order".'
    Quantity: '."$quantity".'
    Shipping Address: '."$shipping".'
    Payment Method: '."$payment".'
    

    If you have any questions or concerns, feel free to reach out to our customer support at [Phone Number] or reply to this email.

    Thank you for choosing us!

    Best regards,
    [Restaurant Name]';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>