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
echo $odeme_durum=$checkoutForm->getPaymentStatus();
echo "<br>";
//gonderılen orderid
$orderid=$checkoutForm->getbasketId();




if ($odeme_durum=="FAILURE") {
	
	echo "tamamlanamadı";


} elseif ($odeme_durum=="SUCCESS") {

	echo "Tamamlandı :";

	
}
?>
