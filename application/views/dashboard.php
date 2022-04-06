<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>

    

</head>
<body>
<?php
$this->load->view('layout/header');
?>

<div class="container">
<div class="card text-dark bg-light mb-3">
  <div class="card-header">Hello</div>
  <div class="card-body">
    <h1>Selamat Datang, <?php echo $this->session->userdata('nama')?> !</h1>
    <h5>Hobi : </h5>
    <h5>
        <ul>
            <?php foreach($hobi as $i) {?>
                <li><?php echo $i ?></li>
            <?php } ?>

    </h5>
  </div>
</div>

</div>
   
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>