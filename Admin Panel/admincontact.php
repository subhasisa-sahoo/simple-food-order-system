<?php
include 'db.php';
$query = "select * from contact";
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
        <h2>Contact Form</h2>
    </div>
    <div class="container">
        <table border>
            <tr class="trheader">
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Message</td>
                <td>Date</td>
            </tr>
            <tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td><?php echo $row['ID']; ?> </td>
                    <td><?php echo $row['Name']; ?> </td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Message']; ?></td>
                    <td><?php echo $row['DATE']; ?></td>
            </tr>
        <?php
                }
        ?>

        </table>
    </div>
</body>

</html>