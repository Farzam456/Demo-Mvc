<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

  <!-- Bootstrap CDN Link -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  -->

    <title><?php echo $title;?></title>
  </head>
<body>
	<div class="container mt-3">
		<h1>Employee Information</h1>
		<div class="col-md-6 mt-4">
     <p>Add Employee Details Here..</p>
     <hr/>
     <?php if($failed = $this->session->flashdata('failed')){ ?>

        <div class="alert alert-success">
          <?php echo $failed; }?>
        </div>
<form class="mt-3" method="post" action="<?php echo base_url('home/userValidation')?>">
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" name = "name" class="form-control" id="exampleInputName" value="<?php echo set_value('name');?>">
    <small><?php echo form_error('name');?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputSalary">Salary</label>
    <input type="text" name = "salary" class="form-control" id="exampleInputMobile" value="<?php echo set_value('salary');?>">
    <small><?php echo form_error('salary');?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputGender">Gender</label>
    <input type="text" name = "gender" class="form-control" id="exampleInputEmail1" value="<?php echo set_value('gender');?>">
    <small><?php echo form_error('gender');?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputAddress">HiredDate</label>
    <input type="text" name = "hired_date" class="form-control" id="exampleInputAddress" value="<?php echo set_value('hired_date');?>">
    <small><?php echo form_error('hired_date');?></small>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
	</div>
  <footer>
    
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
  </footer>
  </body>
</html>