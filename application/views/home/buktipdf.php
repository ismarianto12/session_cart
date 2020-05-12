<!DOCTYPE html>
<html><head>
  <title></title>
</head><body>
   <style type="text/css">  
   .table-data{
    width: 100%;
    border-collapse: collapse;
} 
 
    .table-data tr th,
    .table-data tr td{
    border:1px solid black;
    font-size: 11pt;
    padding: 10px 10px 10px 10px;
}
  </style> 
<h3><center>Cetak Kode Booking</center></h3>
   <br/>
    <table class="table-data">
                <tr>
                <th>No</th>
                <th>ID Booking</th>
                <th>ID Kamar</th>
                <th>Nama Penginapan</th>
                <th>Nama Penyewa</th>
                <th>No Hp</th>
                <th>Tanggal Chekin</th>
                <th>Tanggal Chekout</th>
                </tr>
                    <?php 
                    $i=1;
                        foreach ($bookingan as $booking) { ?>
                <tr>
                  <th scope="row"><?php echo $i; ?></th>
                  <td><?php echo $booking['id_booking'];?></td>
                  <td><?php echo $booking['id_kamar'];?></td>
                  <td><?php echo $booking['nama_penginapan']; ?></td>
                  <td><?php echo $booking['nama_penyewa']; ?></td>
                  <td><?php echo $booking['no_hp']; ?></td>
                  <td><?php echo $booking['tgl_chekin']; ?></td>
                  <td><?php echo $booking['tgl_chekout']; ?></td>
                        </tr>
             
    <?php
} ?>

</table>

 </body></html>