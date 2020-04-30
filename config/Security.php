<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;

return Config::create()
    ->setWsdl('https://ims.lyngsoesystems.com/vejlebib/ImsWs/soap/Security?wsdl')
    ->setTypeDestination('src/Security/Type')
    ->setTypeNamespace('IMS\Security\Type')
    ->setClientDestination('src/Security')
    ->setClientName('SecurityClient')
    ->setClientNamespace('IMS\Security')
    ->setClassMapDestination('src/Security')
    ->setClassMapName('SecurityClassmap')
    ->setClassMapNamespace('IMS\Security')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
;
