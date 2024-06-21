<?php
session_start();
include 'db_session.php';

$id = isset($_GET['id']) ? $_GET['id']: 0; 
$fetch = "SELECT ID, Name, Number, `Order`, Quantity, PaymentMode, Shipping, `DATE&TIME`, STATUS FROM `order_form` WHERE ID = '$id'";
$res = mysqli_query($conn, $fetch);

if ($res) {
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Order Details</title>
                <link rel="stylesheet" href="./style.css">
                <link rel="stylesheet" href="CSS/cart.css">
                 <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            </head>

            <body>
                <div class="box">
                    <h3>Order Details</h3>
                    <hr>
                    <span class="prolout">Order ID:</span><span> #<?php echo $row['ID']; ?></span><br>
                    <span class="prolout">Customer Name:</span><span> <?php echo $row['Name']; ?></span><br>
                    <span class="prolout">Order Name:</span><span> <?php echo $row['Order']; ?></span><br>
                    <span class="prolout">Quantity:</span><span> <?php echo $row['Quantity']; ?></span><br>
                    <span class="prolout">Payment Mode:</span><span> <?php echo $row['PaymentMode']; ?></span><br>
                    <span class="prolout">Status:</span><span> <?php echo $row['STATUS']; ?></span><br>
                    <span class="prolout">Shipping Address:</span><span> <?php echo $row['Shipping']; ?></span><br>
                    <span class="prolout">Mobile:</span><span> <?php echo $row['Number']; ?></span><br>
                    <span class="prolout">Time of order:</span><span> <?php echo $row['DATE&TIME']; ?></span><br>
                    <div class="btn">
                    <a href="cart.php"><i class="fa fa-hand-o-left"></i>Back</a>
                    </div>
                </div>
            </body>

            </html>
            <?php
        }
    } else {
        echo "No records found for ID: $id";
    }
}
?>
