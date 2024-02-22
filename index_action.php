<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_library";
$conn = new mysqli($servername, $username, $password, $database);
if (!$conn) {
    echo "Database not connected";
} else {
    // if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['signup_password'];
    $number = $_POST['number'];
    $sql1 = "INSERT into `signup`(`username`,`email`,`password`,`mobile`)
        VALUES($user,$email,$pass,$number)";
    $query = mysqli_query($conn,$sql1);
    if ($query) {
        echo "<script>alert('data add ')</script>";
    } else {
        echo "<script>alert('data not add ')</script>";
    }
    echo $user;
    echo $email;
    echo $pass;
    echo $number;
    }
// }
