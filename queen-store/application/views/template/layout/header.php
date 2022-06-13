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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/html.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>

<body>
    <!--header section starts-->

    <header class="header">
        <a href="#" class="logo">
            <img src="<?php echo base_url(); ?>assets/img/mentahan.jpg" alt="">
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
            <a href="<?php echo base_url(); ?>index.php/auth">
                <div class="fas fa-user" id="login-btn">
                    
                </div>
            </a>
            <a href="logout.php">
                <div class="fas fa-sign-out-alt" id="logout-btn"></div>
            </a>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
        <div class="search-form">
            <input type="search" id="search-box" placeholder="Search...">
            <label for="search-box" class="fas fa-search"></label>
        </div>


        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="<?php echo base_url(); ?>assets/img/gta5.jpg" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">Rp.225.000</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="<?php echo base_url(); ?>assets/img/thesimsPapat.png" alt="">
                <div class="content">
                    <h3>cart item 02</h3>
                    <div class="price">Rp.50.000</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="<?php echo base_url(); ?>assets/img/aspalt.jpg" alt="">
                <div class="content">
                    <h3>cart item 03</h3>
                    <div class="price">Rp.200.000/pcs</div>
                </div>
            </div>
            <a href="#" class="btn">Checkut sekarang</a>
        </div>

    </header>