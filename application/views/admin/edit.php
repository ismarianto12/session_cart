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
		<input type="hidden" name="id" value="<?php echo $kamar['id']; ?>">
		  <div class="form-group">
		    <label for="nama">Nama Penginapan</label>
		    <input type="text" class="form-control" name="nama" value="<?php echo $kamar['nama_penginapan']; ?>">
		    <small class="form-text text-danger"><?php echo form_error('nama_penginapan'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="pemilik">Nama Pemilik</label>
		    <input type="text" class="form-control" name="pemilik" value="<?php echo $kamar['pemilik']; ?>">
		    <small class="form-text text-danger"><?php echo form_error('pemilik'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="gambar">Gambar</label>
		    <input type="file" class="form-control" name="gambar" value="<?php echo $kamar['gambar']; ?>">
		    <input type="hidden" name="gambarLama" value="<?php echo $kamar['gambar']; ?>">
		  </div>
		  <div class="form-group">
		    <label for="harga">Harga</label>
		    <input type="text" class="form-control" name="harga" value="<?php echo $kamar['price']; ?>">
		    <small class="form-text text-danger"><?php echo form_error('harga'); ?></small>
		  </div>
		  <div class="form-group">
		    <label for="stok">Jumlah Stok Kamar</label>
		    <input type="text" class="form-control" name="stok" value="<?php echo $kamar['stok']; ?>">
		    <small class="form-text text-danger"><?php echo form_error('stok'); ?></small>
		  </div>
			<div class="form-group">
		    <label for="keterangan">Kualitas Kamar</label>
		    <input type="text" class="form-control" name="keterangan" value="<?php echo $kamar['keterangan'];?>">
		    <small class="form-text text-danger"><?php echo form_error('keterangan'); ?></small>
		  </div>
		  <button type="submit" class="btn btn-primary">Kirim</button>
		  <a href="<?php echo base_url(); ?>admin/kamar" class="btn btn-warning">Batal</a>
		</form>

</div>