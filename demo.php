<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://e-nadawca.poczta-polska.pl/websrv/en.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => '',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => '',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOCATION => 'https://en-testwebapi.poczta-polska.pl/websrv/en.php',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://en-testwebapi.poczta-polska.pl/websrv/en.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Bling\PocztaPolska\ElektronicznyNadawca\ClassMap::get(),
);

/**
 * Samples for Hello ServiceType
 */
$hello = new \Bling\PocztaPolska\ElektronicznyNadawca\ServiceType\Hello($options);
/**
 * Sample call for hello operation/method
 */
if ($hello->hello(new \Bling\PocztaPolska\ElektronicznyNadawca\StructType\Hello()) !== false) {
    $response = $hello->getResult();

    print_r($response->getOut());
} else {
    print_r($hello->getLastError());
}
