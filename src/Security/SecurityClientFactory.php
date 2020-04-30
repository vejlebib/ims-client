<?php

namespace IMS\Security;

use IMS\Security\SecurityClient;
use IMS\Security\SecurityClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class SecurityClientFactory
{

    public static function factory(string $wsdl) : \IMS\Security\SecurityClient
    {
        $clientFactory = new PhproClientFactory(SecurityClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(SecurityClassmap::getCollection());

        return $clientBuilder->build();
    }


}
