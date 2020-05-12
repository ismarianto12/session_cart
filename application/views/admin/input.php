<div class="mt-3">
	<?php if($this->session->flashdata('flash')): ?>
         <div class="row mt-3">
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?php echo $this->session->flashdata('flash'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div> 
       <?php endif; ?>
	<form action="" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="nama">Nama Penginapan</label>
		    <input type="text" class="form-control" name="nama" placeholder="Nama Penginapan" autocomplete="off">
		    <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="pemilik">Nama Pemilik</label>
		    <input type="text" class="form-control" name="pemilik" placeholder="Nama Pemilik" autocomplete="off">
		    <small class="form-text text-danger"><?php echo form_error('pemilik'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="keterangan">Kualitas Kamar</label>
		    <input type="text" class="form-control" name="keterangan" placeholder="Kualitas Kamar" autocomplete="off">
		    <small class="form-text text-danger"><?php echo form_error('keterangan'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="gambar">Gambar</label>
		    <input type="file" class="form-control" name="gambar">
			<div class="form-group">
		    <label for="harga">Harga</label>
		    <input type="form-text textdanger" class="form-control" name="harga" value="" placeholder="Masukan Harga-Nya" autocomplete="off">
		    <small class="form-text text-danger"><?php echo form_error('harga'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="stok">Jumlah Stok Kamar</label>
		    <input type="text" class="form-control" name="stok" placeholder="Jumlah Stok Kamar" autocomplete="off">
		    <small class="form-text text-danger"><?php echo form_error('stok'); ?></small>
		  </div>
		  <button type="submit" class="btn btn-primary">Kirim</button>
		  <a href="<?php echo base_url(); ?>admin" class="btn btn-warning">Batal</a>
		</form>
</div>