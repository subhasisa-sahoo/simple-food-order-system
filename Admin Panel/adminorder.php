<?php
include 'db.php';
$query = "select * from order_form";
// $query = "select * from order_form order by ID desc";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Order</title>
    <link rel="stylesheet" href="admin.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <h3>Order List</h3>
    </nav>
    <br>
    <div class="container">
        <table border>
            <tr class="trheader" >
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Number</td>
                <td>Order</td>
                <td>Add-item Order</td>
                <td>Quantity</td>
                <td>Payment Mode</td>
                <td>Shipping Address</td>
                <td>Message</td>
                <td>Date & Time of Order</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
            <tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['EMAIL']; ?></td>
                <td><?php echo $row['Number']; ?></td>
                <td><?php echo $row['Order']; ?></td>
                <td><?php echo $row['AddOrder']; ?></td>
                <td><?php echo $row['Quantity']; ?></td>
                <td><?php echo $row['PaymentMode']; ?></td>
                <td><?php echo $row['Shipping']; ?></td>
                <td><?php echo $row['Message']; ?></td>
                <td><?php echo $row['DATE&TIME']; ?></td>
                <td><?php echo $row['STATUS']; ?></td>
                <td><a href="status.php?id= <?php echo $row['ID']; ?>" class="tdstatus"><i class="fa fa-edit"></a></td>
                <td class="<?php echo getStatusClass($row['STATUS']); ?>">
                        <?php echo $row['STATUS']; ?>
                    </td>
            </tr>
            <?php
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
    
</body>
</html>