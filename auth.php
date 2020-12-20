
<?php
require 'home.php';

$checkResult="";
if($_POST['code']){
$code=$con->real_escape_string($_POST['code']);
//değişiklik yapabiliriz-random üretebiliriz
$secret= 'DASJDGSAJDGSA';

require_once 'googleLib/GoogleAuthenticator.php';
$ga = new GoogleAuthenticator();
//2=2*30
$checkResult = $ga->verifyCode($secret, $code, 2);    


if ($checkResult){
    $_SESSION['code']	= $code;
    $id =$_SESSION['userData']["id"];
    $qrCodeUrl = md5($qrCodeUrl);
    $n="UPDATE users SET auth_hash ='". $qrCodeUrl ."' where id = '$id'";
    $con->query($n);
    
    header("location:empty.php");
    exit;
   
    
}
else{
header("location:home.php");
exit;
}

}

?>