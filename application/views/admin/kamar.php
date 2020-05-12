<h2><?php echo $nama; ?></h2>
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
       <?php if($this->session->flashdata('pesanhapus')): ?>
         <div class="row mt-3">
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?php echo $this->session->flashdata('pesanhapus'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div> 
       <?php endif; ?>
  <table class="table" id="data">
              <thead class="thead-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Penginapan</th>
                  <th scope="col">Pemilik</th>
                  <th scope="col">Kualitas Kamar</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Stok Kamar</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach($kamar as $k): ?>
                <tr>
                  <th scope="row"><?php echo $i; ?></th>
                  <td><?php echo $k['nama_penginapan']; ?></td>
                  <td><?php echo $k['pemilik']; ?></td>
                  <td><?php echo $k['keterangan']; ?></td>
                  <td>
                    <img src="<?php echo base_url(); ?>assets/img/<?php echo $k['gambar']; ?>" width="50">
                  </td>
                  <td>Rp. <?php echo $k['price']; ?></td>
                  <td><?php echo $k['stok']; ?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>admin/edit_kamar/<?php echo $k['id']; ?>" class="btn btn-primary"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                    <a href="<?php echo base_url(); ?>admin/hapus_kamar/<?php echo $k['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Data Kamar <?php echo $k['nama_penginapan']; ?> akan di Hapus?');"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
              </tbody>
            </table>
</div>
        </div>
    </div>