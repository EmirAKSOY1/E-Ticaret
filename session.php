

<?php
error_reporting(0);
session_start();
include("db.php");

$kuladi = $_POST['mail'];

$parola = $_POST['pass'];
$_SESSION['isim']=$_POST['mail'];
 

if($kuladi == "" || $parola == "") {

    echo "<script>location.href='login.php';</script>";

} else {

$sor = mysqli_query($baglan,"SELECT * FROM user where user_mail='$kuladi' and user_pass='$parola'");

$uyevarmi = mysqli_num_rows($sor); 

if($uyevarmi == 0) { 

echo "Giriş Başarısız!";

} else { 

$uyebilgi = mysqli_fetch_assoc($sor); 



$_SESSION['kuladi'] =$uyebilgi['user_name'];
echo "<script>location.href='index.php';</script>";



}}
?>