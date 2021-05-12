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

    <style>
h1 {

 text-align: center;
  padding-top: 10px;

  padding-bottom: 10px;



}

}
</style>
  </head>
  <body>
    <div class="container mt-3">

   
  

       <h1   style="background-color:orange;">Employee Imformation</h1>
       <br>

      <a href="<?php echo base_url("home/create")?>"  class="btn btn-info float-sm-right mb-3 mr-5">Add </a>
      <br><br>
         <?php if($success = $this->session->flashdata('success')){ ?>

        <div class="alert alert-success">
          <?php echo $success; }?>
        </div>
      </div>

    <div class="container mt-3">
      <table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Name</th>
      <th scope="col">Salary</th>
      <th scope="col">Gender</th>
      <th scope="col">HiredDate</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if (isset($students)) {
      
      foreach ($students as $key => $student) { ?>
    <tr>
      <th scope="row"><?php echo $student->id; ?></th>
      <td><?php echo $student->name;?></td>
      <td><?php echo $student->salary;?></td>
      <td><?php echo $student->gender;?></td>
       <td><?php echo $student->hired_date;?></td>
      <!-- <td></td> -->
      <td><a href="<?php echo base_url();?>home/edit/<?php echo $student->id;?>" class="btn btn-primary">Edit</a></td>
      <td><a href="<?php echo base_url();?>home/delete/<?php echo $student->id;?>" class="btn btn-danger" onclick = "return confirm('Are you sure?')">Delete</a></td>
    </tr>
    <?php } }?>
  </tbody>
</table>
<!-- <nav aria-label="..."> -->
  <!-- <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul> -->
<!-- </nav> -->

<?php echo $pagination; ?>
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