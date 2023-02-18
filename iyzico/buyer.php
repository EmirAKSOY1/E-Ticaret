<?php

require_once('config.php');




# create request class
$request = new \Iyzipay\Request\CreateCheckoutFormInitializeRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("$siparis_no");
$request->setPrice($sepettoplam);
$request->setPaidPrice($sepettoplam);
$request->setCurrency(\Iyzipay\Model\Currency::TL);
$request->setBasketId("$siparis_no");
$request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);
$request->setCallbackUrl("http://localhost/sonuc.php");
$request->setEnabledInstallments(array(2, 3, 6, 9));


$buyer = new \Iyzipay\Model\Buyer();
$buyer->setId("1");
$buyer->setName("demo");
$buyer->setSurname("vural");
$buyer->setGsmNumber("05422918575");
$buyer->setEmail("info@sufamedya.com");
$buyer->setIdentityNumber("74300864791");
$buyer->setLastLoginDate("2015-10-05 12:43:35");
$buyer->setRegistrationDate("2015-10-05 12:43:35");
$buyer->setRegistrationAddress("istanbul/bahçelievler");
$buyer->setIp("85.34.78.112");
$buyer->setCity("istanbul");
$buyer->setCountry("Turkey");
$buyer->setZipCode("34732");
$request->setBuyer($buyer);

$shippingAddress = new \Iyzipay\Model\Address();
$shippingAddress->setContactName("$kullanici_ad");
$shippingAddress->setCity("$kullanici_il");
$shippingAddress->setCountry("Turkey");
$shippingAddress->setAddress("$kullanici_adresiyaz");
$shippingAddress->setZipCode("34742");
$request->setShippingAddress($shippingAddress);

$billingAddress = new \Iyzipay\Model\Address();
$billingAddress->setContactName("$kullanici_ad");
$billingAddress->setCity("$kullanici_il");
$billingAddress->setCountry("Turkey");
$billingAddress->setAddress("$kullanici_adresiyaz");
$billingAddress->setZipCode("34742");
$request->setBillingAddress($billingAddress);

$basketItems = array();
$firstBasketItem = new \Iyzipay\Model\BasketItem();
$firstBasketItem->setId("$siparis_no");
$firstBasketItem->setName("Binocular");
$firstBasketItem->setCategory1("Collectibles");
$firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
$firstBasketItem->setPrice($sepettoplam);
$basketItems[0] = $firstBasketItem;
$request->setBasketItems($basketItems);


# make request
$checkoutFormInitialize = \Iyzipay\Model\CheckoutFormInitialize::create($request, Config::options());

# print result
//print_r($checkoutFormInitialize);
//print_r($checkoutFormInitialize->getstatus());
print_r($checkoutFormInitialize->getErrorMessage());
print_r($checkoutFormInitialize->getCheckoutFormContent());



?>

