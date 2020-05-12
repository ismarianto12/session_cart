<?php if($this->session->flashdata('id_booking') === null): ?>
	<div class='mt-5'>


		<h3>Data user bokigan</h3>
		<?php $data = $kamar->row_array(); ?>
		<div class="jumbotron">
		<table class="table"> 
			<tr><td>Nama_penginapan   </td> <td><?= $data['nama_penginapan'] ?></td></tr>
			<tr><td>Nama_penyewa   </td> <td><?= $data['nama_penyewa'] ?></td></tr>
			<tr><td>No_hp   </td> <td><?= $data['no_hp'] ?></td></tr>
			<tr><td>Stok   </td> <td><?= $data['stok'] ?></td></tr>
			<tr><td>Total_harga   </td> <td><?= $data['total_harga'] ?></td></tr>
			<tr><td>Tgl_chekin   </td> <td><?= $data['tgl_chekin'] ?></td></tr>
			<tr><td>tgl_chekout   </td> <td><?= $data['tgl_chekout'] ?></td> </tr>
		</table>


		<h3>Detail Kamar Boking</h3>
		<table class="table">
			<tr>
				<th>Nama penginapan</th>
				<th>Pemilik</th>
				<th>Keterangan</th>
				<th>Gambar</th>
				<th>Price</th>
				<th>Stok</th> 
			</tr>
			<?php 
			$no =1;
			foreach($kamar->result_array() as $data): ?>
				<tr>
					<td><?= $data['nama_penginapan'] ?></td>
					<td><?= $data['pemilik'] ?></td>
					<td><?= $data['keterangan'] ?></td>
					<td><img src="http://localhost/booking/penginapan/assets/img/<?= $data['gambar'] ?>" class="card-img-top" alt="..."></td>
					<td><?= number_format($data['price'],0,0,'.') ?></td>
					<td><?= $data['stok'] ?></td> 
				</tr>
				<?php  $no++; endforeach; ?>

			</table>
		</div>

			<div class='jumbotron jumbotron-fluid'>
				<div class='container'>
					<h1 class="display-4">Booking Sukses</h1>
					<h5 class='lead'>Kode Booking Anda</h5>
					<h3><p class="lead">Silahkan Kirim Bukti Booking Melalui WhatsApp Ke Nomer Berikut atau bisa langsung klik<a href="https://wa.me/6281384805639" class="btn btn-success"><i class="fab fa-whatsapp"></i> Chat WA</a></p></h3>
					<p><a href="<?php echo base_url() .'welcome/exportToPdf'?>" class="far fa-file-pdf"> Cetak Kode Booking </p></a>
				</div>
			</div>

			<?php else: ?>

				<?php endif; ?>