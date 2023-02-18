<!DOCTYPE html>
<html>
<head>
	<title>3AK</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>








<?php
ob_start();
session_start();
require_once('iyzico/config.php');

$token=$_POST['token'];
$siparis_no=1235;


$request = new \Iyzipay\Request\RetrieveCheckoutFormRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("$siparis_no");
$request->setToken("$token");
$checkoutForm = \Iyzipay\Model\CheckoutForm::retrieve($request, Config::options());

//print_r($checkoutForm->getStatus());
$odeme_durum=$checkoutForm->getPaymentStatus();

//gonderılen orderid
$orderid=$checkoutForm->getbasketId();




if ($odeme_durum=="FAILURE") {
	
	echo"<script>
	Swal.fire(
		'Opppss',
		'Kart nanay ödeme başarısız',
		'error'
	  )
		  </script>";


} elseif ($odeme_durum=="SUCCESS") {

	echo"<script>
	Swal.fire({
		icon: 'success',
		title: 'Başarılı',
		confirmButtonText: 'Alışverişe Devam Et',
		text: 'Ürün Başarıyla Sepete Eklendi',
		}).then((result) => {
            if (result.isConfirmed){
                location.href='index.php';
            }
          })
	  </script>";

	
}
?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  
</body>
</html>