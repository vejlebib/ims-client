<?php

namespace IMS\Query;

use IMS\Query\QueryClient;
use IMS\Query\QueryClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class QueryClientFactory
{

    public static function factory(string $wsdl) : \IMS\Query\QueryClient
    {
        $clientFactory = new PhproClientFactory(QueryClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(QueryClassmap::getCollection());

        return $clientBuilder->build();
    }


}

