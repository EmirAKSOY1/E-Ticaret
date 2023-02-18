<!DOCTYPE html>
<html>
<head>
	<title>Ödeme</title>

	<link rel="shortcut icon" href="shop.png" type="image/x-icon" />
</head>
<body>
<?php



$kullanici_ad="ad";
$kullanici_soyad="soyad";
$kullanici_gsm="0555 555 5555";
$kullanici_mail="mail@mail.com";
$kullanici_zaman="2015-10-05 12:43:35"; 
$kullanici_adresiyaz="Adres";
$kullanici_il="İstanbul";
$siparis_no=356;
$sepettoplam=100;

?>

<div class="tab-pane fade active in" id="desc">
		<div class="row">
			<?php include 'iyzico/buyer.php'; ?>
				<div  id="iyzipay-checkout-form" class="responsive"></div>
		</div>
</div>
</body>
</html>