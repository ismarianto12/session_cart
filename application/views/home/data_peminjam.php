<div class="col-9 mt-5">
	<div class="container">
		<?php foreach ($this->cart->contents() as $item): ?>

			<form action="" method="post">
				<input type="hidden" name="id_kamar" value="<?= $item['id'] ?>">
				<div class="form-group">
					<label for="nama">Nama Penginapan</label>
					<input type="text" class="form-control" name="nama" value="<?php echo $item['name']; ?>">
				</div>
				<div class="form-group">
					<label for="nama">Nama Penyewa</label>
					<input type="text" class="form-control" name="penyewa" placeholder="Nama Lengkap" autofocus="">
				</div>
				<div class="form-group">
					<label for="nohp">No Hp</label>
					<input type="text" class="form-control" name="no_hp" placeholder="No Hp Aktif">
				</div>
				<div class="form-group">
					<label for="subtotal">Total Harga</label>
					<input type="text" class="form-control" name="subtotal" value="Rp. <?php echo $item['subtotal']; ?>">
				</div>
				<div class="form-group">
					<label for="tgl_chekin">Tanggal Check-in</label>
					<input type="date" name="tgl_chekin" class="form-control" min="<?= date ('Y-m-d') ?>" value='<?= date('Y-m-d')?>'>
				</div>
				<div class="form-group">
					<label for="tgl_chekout">Tanggal Check-out</label>
					<input type="date" name="tgl_chekout" class="form-control" min="<?= date ('Y-m-d') ?>" value='<?= date('Y-m-d')?>'>
				</div>
				<button type="submit" class="btn btn-primary">Kirim</button>
			</form>
		<?php endforeach ?>
	</div>
</div>