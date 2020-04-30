<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;

return Config::create()
    ->setWsdl('https://ims.lyngsoesystems.com/vejlebib/ImsWs/soap/Query?wsdl')
    ->setTypeDestination('src/Query/Type')
    ->setTypeNamespace('IMS\Query\Type')
    ->setClientDestination('src/Query')
    ->setClientName('QueryClient')
    ->setClientNamespace('IMS\Query')
    ->setClassMapDestination('src/Query')
    ->setClassMapName('QueryClassmap')
    ->setClassMapNamespace('IMS\Query')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
;
