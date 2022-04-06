<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Detail User</title> 
    <!-- load bootstrap css file --> 
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
  </head> 
  <body> 
  <?php
    $this->load->view('layout/header');
    ?>
 
    <div class="container"> 
    <h2>Detail User</h2>
    <div class="row">
        <div class="col-8">
            <h4 class="card-title">Nama <?php echo $detail['nama'] ?></h4>
            <h6>Email :<?php echo $detail['email'] ?></h6>
            <h6>Password :<?php echo $detail['password'] ?></h6>
            <h6>Alamat :<?php echo $detail['alamat'] ?></h6>
            <h6>Nomor Telpon :<?php echo $detail['telepon'] ?></h6>
        </div>

    </div>
 
    </div> 
    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html> 