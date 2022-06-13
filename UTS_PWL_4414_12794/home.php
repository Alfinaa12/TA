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
        

        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="img/gta5.jpg" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">Rp.225.000</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="img/thesimsPapat.png" alt="">
                <div class="content">
                    <h3>cart item 02</h3>
                    <div class="price">Rp.50.000</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="img/aspalt.jpg" alt="">
                <div class="content">
                    <h3>cart item 03</h3>
                    <div class="price">Rp.200.000/pcs</div>
                </div>
            </div>
            <a href="#" class="btn">Checkut sekarang</a>
        </div>

    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>QUEEN STORE</h3>
            <p>(Menjual Game PC)</p>
            <p> Bosen main game di HP? Ayo coba mainkan game PC. Banyak game-game yang kamu cari disini.</p>
            <br>
            <a href="#about" class="btn">MULAI BELANJA</a>
        </div>
    </section>

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="img/Game-PC.jpg" alt="">
            </div>

            <div class="content">
                <h3>Apa yang ada di Queen Store ini?</h3>
                <p>Queen Store menyediakan berbagai macam game PC mulai dari game battle royal, game horror, game have fun,
                    sampai game berpetualangg lainnya. Queen Store melayani kamu yang ingin memainkan game PC.</p>
                <br>

            </div>

            <div class="image">
                <img src="img/pubg.jpg" alt="">
            </div>

            <div class="content">
                <h3>Apa yang unik dari Queen Store?</h3>
                <p>Kamu dapat memilih berbagai macam game yang kamu cari disini</p>
                <p>Keseruan yang tiada habis bermain game di PC, tapi ingat.. Jangan sampai lupa waktu dan
                    jaga kesehatan kalian terutama kesehatan pada mata guys.
                </p>
                <br>
                <!-- tnda pager kamu gnti mau ngelink kemana kebawahnya -->
                <a href="#product" class="btn">AYO BELANJA</a>
            </div>

        </div>

    </section>

    <section class="product" id="product">

        <h1 class="heading">Our <span>product</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/gta5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>GTA 5 </h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp255.000<span>Rp350.000</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/RE7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Resident Evil 7</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp250.000<span>Rp280.000</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/pubgpcee.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Player Unknown's Battleground</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp200.000<span>Rp250.000</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/CEODE.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Call Off Dutty</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp180.000<span>Rp200.000</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/thesimsPapat.png" alt="">
                </div>
                <div class="content">
                    <h3>The SIMS 4</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp50.000<span>Rp80.000</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/ERE8.png" alt="">
                </div>
                <div class="content">
                    <h3>Resident Evil 8</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp240.000<span>Rp250.000</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/LN.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Little Nightmares</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp400.000<span>Rp480.000</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/minecraft.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Minecraft</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp400.000<span>Rp500.000</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/aspalt.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Asphalt 9: Legends</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rp90.000<span>Rp120.000</span></div>
                </div>
            </div>

        </div>
    </section>

    <section class="review" id="review">

        <h1 class="heading">customer's <span>review</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="assets/img/Quote.png" alt="" class="quote">
                <p>Udah langganan banget beli atau PO game disini, wort it.</p>
                <img src="img/miw.jpg" class="user" alt="">
                <h3>MiawAug</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="assets/img/Quote.png" alt="" class="quote">
                <p></p>
                <img src="img/manca.jpg" class="user" alt="">
                <h3>Manca</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="assets/img/Quote.png" alt="" class="quote">
                <p>Manstapsss top soal harga disini paling murah+diskon banyak</p>
                <img src="img/garitt.jpg" class="user" alt="">
                <h3>Garit Dewana</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>


        </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading"> <span>Formulir</span>Order</h1>

        <div class="row">
            <iframe class="image" src="img/123.jpg" alt=""></iframe>"

            <form action="">
                <h3>Order</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Nama">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="Nomer telepon">
                </div>
                <div class="inputBox">
                    <span class="fas fa-home"></span>
                    <input type="text" placeholder="Alamat">
                </div>
                <div class="inputBox">
                    <span class="fas fa-number"></span>
                    <input type="number" placeholder="Jumlah barang">
                </div>
                <div class="inputBox">
                    <span class="fas fa-purse"></span>
                    <input type="text" placeholder="Metode pembayaran">
                </div>
                <input type="submit" value="Check Out" class="btn">
            </form>
        </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading"> <span>Contact</span>us</h1>

        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25931.949676363718!2d139.
            91351945387854!3d35.66484359402762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601887a112d82fe5%3A
            0x51373b4bc742b942!2sMarugame%20Seimen%20Gyotoku!5e0!3m2!1sid!2sid!4v1642415936701!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>"

            <form action="">
                <h3>Hubungi kami</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Nama">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="Nomer">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>
        </div>
    </section>


    <section class="footer">
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
            <a href="#" class="fab fa-youtube"></a>
        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">product</a>
            <a href="#">order</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="credit">Created by <span>Alfina Rizka Nurul Chusna </span> | UTS PWL</div>

    </section>


    <script src="script.js">
    </script>


</body>

</html>