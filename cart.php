<?php
session_start();
include 'db_session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/cart.css">
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
    <div class="order_cart">
        <table border>
            <tr>
                <th colspan="5" class="th_main">Items in Order</th>
            </tr>
            <tr>
                <th>Order ID</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Status</th>
                <td>Details</td>
            </tr>
                <?php
                $sel = "SELECT ID, `Order`, Quantity, STATUS FROM `order_form` WHERE EMAIL ='" . $_SESSION['email'] . "'";
                $res = mysqli_query($conn, $sel);
                if ($res) {
                    $res_count = mysqli_num_rows($res);
                    if ($res_count > 0) {
                    while ($order_data = mysqli_fetch_assoc($res)){
                        echo "<tr>";
                        echo "<td>" . "#" . $order_data['ID'] . "</td>";
                        echo "<td>" . $order_data['Order'] . "</td>";
                        echo "<td>" . $order_data['Quantity'] . "</td>";
                        // echo "<td>" . $order_data['COST'] . "</td>";
                        echo '<td class="' . getStatusClass($order_data['STATUS']) . '">' . $order_data['STATUS'] . '</td>';
                        echo '<td><a href="view_cart.php?id=' . $order_data['ID'] . '"><i class="fa fa-eye"></i></a></td>';
                        echo "</tr>";
                    }
                    } else {
                        echo " EMPTY CART";
                    }
                } else {
                    echo " databse error";
                }
                ?>
        </table>
    </div>
    <?php
        function getStatusClass($status)
        {
            switch ($status) {
                case 'Pending':
                    return 'status-pending';
                case 'Out for delivery':
                    return 'status-out-for-delivery';
                case 'Delivered':
                    return 'status-delivered';
                case 'Cancel':
                    return 'status-cancel';   
                case 'Not applicable':
                    return 'status-Not-applicable';
                default:
                    return '';
            }
        }
        ?>
    
        <style>
            /* ... (existing styles) ... */
    
            .status-pending {
                color: black;
            }
    
            .status-out-for-delivery {
                color: orange;
            }
    
            .status-delivered {
                color: blue;
            }
    
            .status-cancel{
                color: red;
            }

            .status-Not-applicable {
                color: red;
            }
        </style>
    <?php
    include 'footer.php';
    ?>
</body>

</html>
