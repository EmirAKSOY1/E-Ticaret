<!DOCTYPE html>
<html lang="en">
<head>




</head>
<?php
$kuladi = $_POST['username'];
// $parola = $_POST['password'];
// $mail = $_POST['your_email'];
// $adres = $_POST['adres'];

include("db.php");

$sonuc=mysqli_query($baglan, "INSERT INTO user(user_name,user_mail,user_pass,tel,adress) VALUES ('$kuladi', 'rs', 'tyy','0','454')" );
$row = mysqli_num_rows($sonuc);
if( $row!=0){
    echo "bu bilgilere ait kullanıcı bulunmaktadır!";
}
else{
    echo $kuladi;
    
    
}


?>
</html>