<?php
require "config.php";
$email = $_POST['email'];
$pass = $_POST['password'];


$s1 = "select * from users where email = '$email' AND password = '$pass' AND auth_status = '1'";
$result1 = mysqli_query($con, $s1);
$num1 = mysqli_num_rows($result1);

$s2 = "select * from users where email = '$email' AND password = '$pass' AND auth_status = '0'";
$result2 = mysqli_query($con, $s2);
$num2 = mysqli_num_rows($result2);

if ($num1 == 1) {
$getUserData = mysqli_fetch_all($result1);
$_SESSION["userData"] = ["id" => $getUserData[0][0], "email" => $getUserData[0][1]];
header('location:home.php');
}
else if ($num2 == 1) {
$getUserData = mysqli_fetch_all($result2);
$_SESSION["userData"] = ["id" => $getUserData[0][0], "email" => $getUserData[0][1]];
header('location:empty.php');
}
else{
    header('location:login.php');
}
?>
