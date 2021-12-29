<?php

require ("connection.php");

$unsecure_user = $_POST['username'];
$unsecure_password = $_POST['password'];
$user= mysqli_real_escape_string($con,$unsecure_user);
$password = mysqli_real_escape_string($con,$unsecure_password);

$query = mysqli_query($con,"SELECT * FROM users  where login='$user' and pass='$password'");
$row = mysqli_fetch_array($query);

$name = $row['username'];
$counter = mysqli_num_rows($query);

if($counter == 0) {
    $error = $_GET['error'];
    $error = "<span class='red'>Enter Correct E-mail and Password Combination</span>";
    header('location: login.php?error=' . $error);
}else{
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];
    header('location: index.php');
}


?>
