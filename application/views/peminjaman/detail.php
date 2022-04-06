<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Detail Peminjaman</title> 
    <!-- load bootstrap css file --> 
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
  </head> 
  <body> 
  <?php
    $this->load->view('layout/header');
    ?>
 
 <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Detail Buku</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Judul <?php echo $detail['judul'] ?></h4>
                            <h6>Penulis :<?php echo $detail['penulis'] ?></h6>
                            <h6>Penerbit :<?php echo $detail['penerbit'] ?></h6>
                        </div>
                        <div class="col-4">
                            <img style="width:150px" src="<?php echo base_url('assets/images/cover/' . $detail['cover']) ?>" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html> 