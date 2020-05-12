      <div class="row">
        <?php foreach($kamar as $k) { ?>
      <div class="card" style="width: 15rem;">
        <form method="post" action="<?php echo base_url();?>welcome/booking" accept-charset="utf-8">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $k['gambar']; ?>" class="card-img-top" alt="...">
        <div class="container">
          <h5 class="card-title"><?php echo $k['nama_penginapan']; ?></h5>
          <input type="hidden" name="id" value="<?php echo $k['id']; ?>" />
          <input type="hidden" name="nama" value="<?php echo $k['nama_penginapan']; ?>" />
          <p type="card-text"> <?php echo $k['keterangan']; ?> </p>
          <input type="hidden" name="pemilik" value="<?php echo $k['pemilik']; ?>" />
          <input type="card-text" name="qty" value="" placeholder="Lama Penginapan" />
          <input type="hidden" name="price" value="<?php echo $k['price']; ?>" />
          <h3><span class="badge badge-info">Rp. <?php echo $k['price']; ?></span></h3>
          <input type="hidden" name="stok" value="<?php echo $k['stok']; ?>" />
          <button type="submit" class="btn btn-success">Booking</button>
        </div>
      </form>
      </div>
    <?php } ?>
    </div>
    </div>
  </div>
</div>