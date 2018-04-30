<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo 
	base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!-- navbar -->
    <?php 
    $this->load->view('template_admin/navbar');
    ?>
    

   
    <div class="row">
        <div class="col-md-3">
            <!-- sidemenu -->
            <?php 
            $this->load->view('template_admin/side-menu');
            ?>
        </div>
        <div class="col-md-9">
            <h4> <?php echo $judul; ?></h4>
            <?php $this->load->view($content); ?>
            <!-- content -->
        </div>
    </div>
    
    <!-- footer -->
    <?php $this->load->view('template_admin/footer');  ?>
    <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>