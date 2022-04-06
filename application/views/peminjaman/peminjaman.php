<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Peminjaman</title> 
    <!-- load bootstrap css file --> 
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
  </head> 
  <body>
  <?php
    $this->load->view('layout/header');
    ?> 
 
    <div class="container"> 
        <h1><center>Peminjaman</center></h1> 
      <table class="table table-striped">
      <a href="peminjaman/add" class="btn btn-success">Pinjam Buku</a> 
        <tr>
            <th>ID</th>
            <th>Nama Peminjam</th>
            <th>Buku Pinjaman</th>
            <th>Aksi</th>

        </tr>
        <?php foreach ($list as $item) {?>
            <tr>
                <td><?php echo $item['id'];?></td>
                <td><?php echo $item['namapeminjam'];?></td>
                <td><?php echo $item['bukupinjaman'];?></td>
                <td>
                  <a href="peminjaman/detail/<?php echo $item['id']; ?>" class="btn btn-info">Detail</a>
                  <a href="peminjaman/edit/<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
                  <a href="peminjaman/delete/<?php echo $item['id']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
      </table> 
 
    </div> 
    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html> 