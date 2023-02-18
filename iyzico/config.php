<?php

require_once('IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey("sandbox-ZMz6aS0w6PY0rdDCYBIIQ2MNBtdi5Wgx");
        $options->setSecretKey("sandbox-sio4tRaZb5VeuqvO0uYj7nkST0p7wD5g");
        $options->setBaseUrl("https://sandbox-api.iyzipay.com");
        return $options;
    }
}