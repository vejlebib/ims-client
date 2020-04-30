<?php

namespace IMS\Query\Type;

class DestinationTypeInfoType
{

    /**
     * @var \IMS\Query\Type\DestinationTypeKeyType
     */
    private $DestinationTypeKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\DestinationTypeKeyType
     */
    public function getDestinationTypeKey()
    {
        return $this->DestinationTypeKey;
    }

    /**
     * @param \IMS\Query\Type\DestinationTypeKeyType $DestinationTypeKey
     * @return DestinationTypeInfoType
     */
    public function withDestinationTypeKey($DestinationTypeKey)
    {
        $new = clone $this;
        $new->DestinationTypeKey = $DestinationTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\NameType $Name
     * @return DestinationTypeInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

