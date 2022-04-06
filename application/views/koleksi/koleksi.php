<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Koleksi Buku</title> 
    <!-- load bootstrap css file --> 
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
  </head> 
  <body> 
  <?php
    $this->load->view('layout/header');
    ?>
 
    <div class="container"> 
        <h1><center>Koleksi Buku</center></h1> 
      <a href="koleksi/add" class="btn btn-success">Tambah Data</a>
      <table class="table table-striped"> 
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Aksi</th>

        </tr>
        <?php foreach ($list as $item) {?>
            <tr>
                <td><?php echo $item['id'];?></td>
                <td><?php echo $item['judul'];?></td>
                <td><?php echo $item['penulis'];?></td>
                <td>
                  <a href="koleksi/detail/<?php echo $item['id']; ?>" class="btn btn-info">Detail</a>
                  <a href="koleksi/edit/<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
                  <a href="koleksi/delete/<?php echo $item['id']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
      </table> 
 
    </div> 
    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html> 