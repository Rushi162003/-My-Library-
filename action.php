<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sample";
$conn = new mysqli($servername,$username,$password,$database);
if(!$conn)
{ 
    echo "<script>alert('Not succesfull')</script>";   

}
else
{
    $name = $_POST('name');
    $demartment = $_POST('demartment');
    $dob = $_POST('dob');
    $mobile = $_POST('mobile');
    $sql = "INSERT into library(name,demartment,dob,mobile)values($name,$demartment,$dob,$mobile)";
    $query = mysqli_query($conn,$sql);
    if($query){
    echo "<script>alert('Student Add succesfull')</script>";   
    echo "<script>window.location.href('add_student1.1.php')</script>";   
    }
    else{
    echo "<script>alert('Not succesfull')</script>";   
    }
}
