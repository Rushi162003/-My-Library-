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
    // $sql1 = "INSERT INTO signup(susername,semail,password,mobile)VALUES('$user','$email','$pass','$number')";
    $sql1 = "insert into signup(susername,semail,password,mobile)values('$user','$email','$pass','$number')";
    $query = mysqli_query($conn, $sql1);
    if ($query) {
       echo "<script>alert('data add ')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('data not add ')</script>";
    }
}
// }
