<?php
include 'db.php';
$query = "select * from reserve_table";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Contact</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <nav>
        <h1>ADMIN PANEL</h1>
    </nav>
    <div class="header">
        <h2>Reservation</h2>
    </div>
    <div class="container">
        <table border>
            <tr class="trheader">
                <td>ID</td>
                <td>People</td>
                <td>Date</td>
                <td>Time</td>
                <td>Mobile</td> 
                <td>BookingTime</td> 
            </tr>
            <tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td><?php echo $row['ID']; ?> </td>
                    <td><?php echo $row['People']; ?></td>
                    <td><?php echo $row['Date']; ?></td>
                    <td><?php echo $row['Time']; ?></td>
                    <td><?php echo $row['Mobile']; ?></td>
                    <td><?php echo $row['BookingTime']; ?></td>
            </tr>
        <?php
                }
        ?>

        </table>
    </div>
</body>

</html>