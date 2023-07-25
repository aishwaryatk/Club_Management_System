<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student'])){
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Student Deleted Succesfully";
        header("Location: index.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student Not deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $department = mysqli_real_escape_string($con, $_POST['department']);
    $position = mysqli_real_escape_string($con, $_POST['position']);

    $query = "UPDATE students SET name='$name', email='$email', department='$department', position='$position' where id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Student Updated Succesfully";
        header("Location: index.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }


}

if(isset($_POST['save_student'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $department = mysqli_real_escape_string($con, $_POST['department']);
    $position = mysqli_real_escape_string($con, $_POST['position']);

    $query = "INSERT INTO students(name, email, department, position) VALUES('$name','$email','$department','$position')";

    $query_run = mysqli_query($con, $query);
    if($query_run){

        $_SESSION['message'] = "Student Created Succesfully";
        header("Location: student-create.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>