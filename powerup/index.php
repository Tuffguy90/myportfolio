<?php
include('../config.php');
@session_start();
if(!isset($_SESSION['loggedIn'])){
  header("Location:my-login.php?sessionOver");
  exit;
}
?>
<html>

  <head>
    <title>
      Welcome Me
    </title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="my-styles.css">
  </head>
  <body>
    <div class="container-wrapper">
      
          
       <div class="row">
         <div class="col-lg-12">
         <div class="navbar navbar-expand-lg navbar-light bg-light">

            <h4>Welcome to JDBProjects</h4>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Portfolio
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="?add=portfolio">Add</a>
                <a class="dropdown-item" href="?view=portfolio">View</a>
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </li>
          </ul>
         </div>
         </div>
         <?php if(isset($_GET['add'])){ 
           
           if(isset($_GET['success'])){
             ?>
             <h4 class="alert alert-success"><?php echo $_GET['success']?></h4>
             <?php
           }

            if(isset($_GET['error'])){
             ?>
             <h4 class="alert alert-danger"><?php echo $_GET['error']?></h4>
             <?php
           }
           
           ?>
             <div class="col-lg-12">
                <div class="card mt-4">
                  <div class="card-header">
                    <h1>Portfolio</h1>
                  </div>
                  <div class="card-body">
                    <form action="save-portfolio.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-lg-4">
                          <label for="">Title</label>
                          <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col-lg-4">
                          <label for="">Description</label>
                          <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="col-lg-4">
                          <label for="">Tech Specs</label>
                          <textarea name="tech_specs" class="form-control"></textarea>
                        </div>
                        <div class="col-lg-4">
                          <label for="">Duration</label>
                          <input type="text" name="duration" class="form-control">
                        </div>
                        <div class="col-lg-4">
                          <label for="">Images</label>
                          <input type="file" name="files[]" class="form-control" multiple>
                        </div>
                        <div class="col-gl-4">
                          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
         
         
         <?php

         } ?>
      
           
       </div>
       
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>