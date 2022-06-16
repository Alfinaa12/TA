<section class="product" id="product">

    <h1 class="heading">Our <span>product</span></h1>

    <div class="box-container">
            <div class="box">
                <div class="row">
                    <div class="column">
                        <div class="image" style="float:left;">
                            <img src="http://localheart/TA/queen-store//assets/img/gta5.jpg" alt="">
                        </div>
                    </div>
                    <div class="column">
                        <h1><?php echo $single['nama']; ?></h1>
                        <p><?php echo $single['desc']; ?></p>
                        
                        <div class="icons" style="margin-top:35px;">
                            <a style="padding-left:10px;" href="<?php echo base_url(); ?>index.php/cart/insertOrUpdateCart/<?php echo $single['id']; ?>" class="fas fa-shopping-cart"></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>