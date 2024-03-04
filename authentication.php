<?php
include "config.php";
$username = $_POST['user'];
$password = $_POST['pass'];


setcookie('user_name', $username, time() + 86400, '/');
setcookie('password', $password, time() + 86400, '/');


//to prevent from mysqli injection  
// $username = stripcslashes($username);  
// $password = stripcslashes($password);  
// $username = mysqli_real_escape_string($con, $username);  
// $password = mysqli_real_escape_string($con, $password);  

$sql = "select *from login where username = '$username' and password = '$password'";
$result = $conn->query($sql);
$count = $result->num_rows;

if ($count >= 1) {
    echo "<h1><center> Login successful </center></h1>";

    session_start();
    $_SESSION['loggedin'] = 1;
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
?>

<a href="index.php"> <button>portfolio</button></a>
