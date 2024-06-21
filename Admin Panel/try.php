<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Font Awesome --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Hedvig+Letters+Sans&family=Poppins&family=Roboto:wght@500&display=swap');
        *{
            margin: 0;
            padding: 0;
            background-color: #EBF2FA;
        }
        nav{
            background-color: #ccd4cc;
            height: 55px;
            color: rgb(46, 126, 196);
        }
        .navig{
            /* height: 55px; */
            width: 12%;
            background-color: #EBF2FA;
        }
        nav img{
            height: 55px;
            margin-left: 10px;
            width: 80%;
        }
        .slide{
            background-color: #fff;
            height: 100vh;
            width: 12%;
            padding-top: 20px;
        }
        .slide ul li, a{
            background-color: #fff;
            text-decoration: none;
            padding: 20px;
            font-size: 17px;
            color: black;
            font-family: 'Hedvig Letters Sans', sans-serif;
font-family: 'Poppins', sans-serif;
font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <nav>
        <div class="navig">
            <img src="../IMAGE/Gofood-logo.png" alt="img">
        </div>
    </nav>
    <section class="slide">
        <ul>
            <li><i class="fa fa-bars"></i><a href="">Dashboard</a></li>
            <li><i class="fa fa-envelope"></i><a href="http://">Order</a></li>
            <li><i class="fa fa-phone"></i><a href="http://">Contact</a></li>
            <li><i class="fa fa-address-book-o"></i><a href="http://">People</a></li>
        </ul>
    </section>
</body>
</html>