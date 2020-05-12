<?php if($this->session->flashdata('pesan')): ?>
         <div class="row mt-3">
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?php echo $this->session->flashdata('pesan'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div> 
       <?php endif; ?>
<h2>Daftar Booking</h2>
<div class="mt-3">
  <table class="table" id="data">
              <thead class="thead-light">
                <tr>
                <th scope="col">No</th>
                <th scope="col">ID Booking</th>
                <th scope="col">ID Kamar</th>
                <th scope="col">Nama Penginapan</th>
                <th scope="col">Nama Penyewa</th>
                <th scope="col">No Hp</th>
                <th scope="col">Tanggal Chekin</th>
                <th  scope="col">Tanggal Chekout</th>
                <th scope="col">Piihan</th>
                </tr>
                </thead>
                    <?php $i=1; ?>
                <?php foreach ($bookingan as $booking): ?>
                <tr>
                  <th scope="row"><?php echo $i; ?></th>
                  <td><?php echo $booking['id_booking'];?></td>
                  <td><?php echo $booking['id_kamar'];?></td>
                  <td><?php echo $booking['nama_penginapan']; ?></td>
                  <td><?php echo $booking['nama_penyewa']; ?></td>
                  <td><?php echo $booking['no_hp']; ?></td>
                  <td><?php echo $booking['tgl_chekin']; ?></td>
                  <td><?php echo $booking['tgl_chekout']; ?></td>
                  <td><div class="btn btn-sm btn-primary">Detail</div></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
              </tbody>
            </table>
</div>
        </div>
    </div>