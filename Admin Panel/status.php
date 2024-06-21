<?php
include 'db.php';
if(isset($_POST['update_status'])){
    // $id = isset($_GET['ID']) ? $_GET['ID'] : 0;
    $id = isset($_GET['id']) ? $_GET['id']: 0; 
    $new_status = $_POST['statu'];
    $sql = "UPDATE order_form SET STATUS = '$new_status' WHERE ID = '$id' ";
    $update = mysqli_query($conn, $sql);
    if($update){
        header('Location: adminorder.php');
    }
    else{
        echo "Error" . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        form {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        input[type="submit"] {
            background-color: #0074d9;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
        <form method="POST">
            <select name="statu">
                <option value="Pending">Pending</option>
                <option value="Out for delivery">Out for delivery</option>
                <option value="Delivered">Delivered</option>
                <option value="Cancel">Cancel</option>
                <option value="Not applicable">Not applicable</option>
            </select>
            <input type="submit" name="update_status" value="Update Status">
        </form>
</body>
</html>
