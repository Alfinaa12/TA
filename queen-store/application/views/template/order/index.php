<section class="product" id="product">

    <h1 class="heading"></h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="box-container">
        <div class="box">
            <h1 style="color: white;font-size:30px;">Order #<?php echo $order->kode_order; ?></h1>
            <?php 
                $total = 0;
                foreach ($order_detail as $key => $p) :
                    $total += $p->qty * $p->harga;
            ?>
            <div class="row" style="border-bottom: solid 2px white;">
                <div class="column" style="width:30%;">
                    <div class="image" style="float:left;">
                        <img src="<?php echo base_url(get_gambar($p->id_produk)[0]['gambar']); ?>" alt="">
                    </div>
                </div>
                <div class="column">
                    <h1><?php echo $p->nama; ?></h1><br>
                    Jumlah:
                    <input type="text" value="<?php echo $p->qty; ?>" style="background-color:#240046;color:white;">

                    <div style="float:right;">
                        Subtotal: Rp. <?php echo number_format($p->qty * $p->harga); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
            <label class="total">Total: Rp. <?php echo number_format($total); ?></label>
            <p style="margin-top: 100px;">
                <a href="<?php echo base_url('index.php/order/invoice/'.$order->kode_order); ?>"><button class="btn" type="submit"><i class="fas fa-file-invoice"></i> Cetak Invoice</button></a>
            </p>
        </div>
    </div>
</section>