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
            <a href="<?php echo base_url(); ?>">Home</a>
            <a href="<?php echo base_url(); ?>#about">About</a>
            <a href="<?php echo base_url(); ?>#product">Product</a>
            <a href="<?php echo base_url(); ?>#orders">Orders</a>
            <a href="<?php echo base_url(); ?>#contact">Contact</a>
            <a href="review">Review</a>

        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <a href="<?php echo base_url(); ?>index.php/auth">
                <div class="fas fa-user" id="login-btn">
                    
                </div>
            </a>
            <a href="<?php echo base_url(); ?>index.php/auth/logout">
                <div class="fas fa-sign-out-alt" id="logout-btn"></div>
            </a>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
        <div class="search-form">
            <input type="search" id="search-box" placeholder="Search...">
            <label for="search-box" class="fas fa-search"></label>
        </div>


        <div class="cart-items-container">
            <?php
                $cart = get_cart();
                if (!empty($cart)) :
                    foreach ($cart as $key => $c) :
            ?>
                    <div class="cart-item">
                        <span class="fas fa-times"></span>
                        <img src="<?php echo base_url(get_gambar($c->id_produk)[0]['gambar']); ?>" alt="">
                        <div class="content">
                            <h3><?php echo $c->nama; ?> <sub>(<?php echo $c->qty; ?>)</sub></h3>
                            <div class="price"><?php echo "Rp. ".number_format($c->harga); ?></div>
                        </div>
                    </div>
            <?php endforeach; endif; ?>
            <a href="<?php echo base_url();?>index.php/cart/index" class="btn">Lihat Keranjang</a>
        </div>

    </header>