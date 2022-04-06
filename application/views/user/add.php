<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Tambah User</title> 
    <!-- load bootstrap css file --> 
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
  </head> 
  <body> 
  <?php
    $this->load->view('layout/header');
    ?>
    <h3>Tambah Pengguna</h3>
 
    <div class="container"> 
    <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="<?php echo base_url('user/insert') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="penulis" class="form-label">E-mail</label>
                                    <input type="text" name="email" class="form-control" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Password</label>
                                    <input type="text" name="password" class="form-control" id="password">
                                </div>
                                <div class="mb-3">
                                    <label for="cover" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="cover" class="form-label">Nomor Telepon</label>
                                    <input type="text" name="telepon" class="form-control" id="telepon">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

    </div>
 
    </div> 
    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html> 