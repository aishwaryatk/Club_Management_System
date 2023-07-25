<?php
session_start();
require 'dbcon.php';
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
     body{
      background-image: linear-gradient(to right, rgb(255, 240, 23), rgb(170, 133, 9));
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    <?php include('message.php');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Member view Page
              <a href="index.php" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">

          <?php
          if(isset($_GET['id'])){
             $student_id = mysqli_real_escape_string($con, $_GET['id']);
             $query = "SELECT * FROM students WHERE id='$student_id' ";
             $query_run = mysqli_query($con, $query);

             if(mysqli_num_rows($query_run) > 0)
             {
                $student = mysqli_fetch_array($query_run);
                ?>
                        
                        <div class="mb-3">
                            <label for="">Member Name</label>
                            
                            <p class="form-control">
                                <?=$student['name'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <p class="form-control">
                                <?=$student['email'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="">Member Department</label>
                            <p class="form-control">
                                <?=$student['department'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="">Member Position</label>
                            <p class="form-control">
                                <?=$student['position'];?>
                            </p>
                        </div>
        
                    
                <?php
             }
             else{
                echo"<h4> No Such Id Found</h4>"; 
             }
          }
          ?>

           
          </div>
        </div>
      </div>
    </div>
  </div>

