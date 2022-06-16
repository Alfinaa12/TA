<section class="product" id="product">

    <h1 class="heading">Our <span>product</span></h1>

    <div class="box-container">
        <div class="box">
            <form method="POST" action="<?php echo base_url(); ?>index.php/cart/checkout">
                <?php 
                    foreach ($cart as $key => $p) :
                ?>
                <div class="row">
                    <div class="column" style="width:30%;">
                        <div class="image" style="float:left;">
                            <img src="<?php echo base_url(get_gambar($p->id_produk)[0]['gambar']); ?>" alt="">
                        </div>
                    </div>
                    <div class="column">
                        <h1><?php echo $p->nama; ?></h1><br>
                        <input type="number" value="<?php echo $p->qty; ?>" name="qty[<?php echo $p->id; ?>]" class="input-qty">
                        <a href="<?php echo base_url(); ?>index.php/cart/delete/<?php echo $p->id; ?>" class="btn" style="margin-left:20px;background-color:#ff3f3f;"><i class="fas fa-trash"></i> Hapus</a>
                    </div>
                </div>
                <?php endforeach; ?>

                <button class="btn" type="submit"><i class="fas fa-shopping-cart"></i> Beli</button>
            </form>
        </div>
    </div>
</section>