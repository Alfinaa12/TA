<?php 
    @session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUEEN STORE</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--custome css file link-->
    <link rel="stylesheet" href="css/html.css">


</head>

<body>
    <!--header section starts-->

    <header class="header">
        <a href="#" class="logo">
            <img src="img/mentahan.jpg" alt="">
            <p>QUEEN STORE</p>
        </a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#product">Product</a>
            <a href="#orders">Orders</a>
            <a href="#contact">Contact</a>
            <a href="review">Review</a>
            
        </nav>
        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <a href="login.php">
                <div class="fas fa-user" id="login-btn">
                    <?php 
                        if (isset($_SESSION['user_name'])) {
                            echo ucfirst($_SESSION['user_name']);
                        }
                    ?>
                </div>
            </a>
            <?php if (isset($_SESSION['user_name'])) { ?>
            <a href="logout.php"><div class="fas fa-sign-out-alt" id="logout-btn"></div></a>
            <?php } ?>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
        <div class="search-form">
            <input type="search" id="search-box" placeholder="Search...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        

        </header>

</html>