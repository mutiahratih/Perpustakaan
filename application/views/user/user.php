<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Users</title> 
    <!-- load bootstrap css file --> 
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
  </head> 
  <body>
  <?php
    $this->load->view('layout/header');
    ?> 
 
    <div class="container"> 
        <h1><center>Users</center></h1> 
      <table class="table table-striped">
      <a href="user/add" class="btn btn-success">Tambah Data</a> 
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>

        </tr>
        <?php foreach ($list as $item) {?>
            <tr>
                <td><?php echo $item['id'];?></td>
                <td><?php echo $item['nama'];?></td>
                <td><?php echo $item['email'];?></td>
                <td>
                  <a href="user/detail/<?php echo $item['id']; ?>" class="btn btn-info">Detail</a>
                  <a href="user/edit/<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
                  <a href="user/delete/<?php echo $item['id']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
      </table> 
 
    </div> 
    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html> 