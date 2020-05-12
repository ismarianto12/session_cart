<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets//css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
	<title>Penginapan</title>
</head>
<body>
  <div class="jumbroton">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="<?php //echo base_url(); ?>">Penginapan</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i>
          Kategori
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"> Penginapan</a>
          <a class="dropdown-item" href="#">Alat Pendaki</a>
          <div class="dropdown-divider"></div>
          <li class="navbar nav-item ">Selamat Datang</li>
        </div>
      </li>
    </ul>
    <a class="nav-link" href="<?php echo base_url(); ?>welcome/keranjang"><i class="fas fa-shopping-cart"></i> Keranjang <span class="badge badge-info"><?php echo $jml_item ?></span></a>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- </div> -->
<div class="container">
  <div class="row">
    <div class="col-4 mt-5">
      <ul class="list-group">
        <li class="list-group-item active"><i class="fas fa-shopping-cart"></i> Keranjang Booking</li>
        <!-- <li class="list-group-item">Keranjang masih kosong</li> -->
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Penginapan</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($kamar_item as $k): ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $k['name']; ?></td>
    </tr>
    <?php $i++; ?>
<?php endforeach ?>
  </tbody>
</table>
      </ul>
    </div>