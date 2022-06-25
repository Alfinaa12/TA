<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>A simple, clean, and responsive HTML invoice template</title>

		<!-- Favicon -->
		<link rel="icon" href="<?php echo base_url(); ?>assets/img/mentahan.jpg" type="image/x-icon" />

		<!-- Invoice styling -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/print.css">
	</head>

	<body>
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="<?php echo base_url(); ?>assets/img/mentahan.jpg" alt="Company logo" style="width: 100%; max-width: 100px" />
								</td>

								<td>
									Invoice #: <?php echo $order->kode_order; ?><br />
                                    <?php
                                        $myDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $order->dibuat_tgl);
                                        $newDateString = $myDateTime->format('F, d Y');
                                    ?>
									Dibuat tanggal: <?php echo $newDateString; ?><br />
									<!-- Due: February 1, 2015 -->
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									QueenStore.<br />
									12345 Jl. in aja dulu, Kota kTau<br />
									Telp: +62 1232392719
								</td>

								<td>
									<?php echo $this->session->userdata('user')['nama']; ?><br />
									<?php echo $this->session->userdata('user')['email']; ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td colspan="2">Metode Pembayaran</td>

					<!-- <td>Check #</td> -->
				</tr>

				<tr class="details">
					<td><?php echo $order->metode.' a/n '.$order->atas_nama; ?></td>

					<!-- <td>1000</td> -->
				</tr>

				<tr class="heading">
					<td>Item</td>

					<td>Harga</td>
				</tr>
                <?php 
                    $total = 0;
                    foreach ($order_detail as $key => $od):
                        $total += $od->harga * $od->qty;
                ?>
				<tr class="item">
					<td><?php echo $od->nama; ?></td>

					<td>Rp. <?php echo number_format($od->harga * $od->qty); ?></td>
				</tr>
                <?php endforeach; ?>

				<tr class="total">
					<td></td>

					<td>Total: Rp. <?php echo number_format($total); ?></td>
				</tr>
			</table>
		</div>
        <button onclick="window.print()">Print</button>
        <a href="javascript:history.go(-1)"><button>Kembali</button></a>
	</body>
</html>