<?php

namespace IMS\Security\Type;

class DestinationTypeInfoType
{

    /**
     * @var \IMS\Security\Type\DestinationTypeKeyType
     */
    private $DestinationTypeKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\DestinationTypeKeyType
     */
    public function getDestinationTypeKey()
    {
        return $this->DestinationTypeKey;
    }

    /**
     * @param \IMS\Security\Type\DestinationTypeKeyType $DestinationTypeKey
     * @return DestinationTypeInfoType
     */
    public function withDestinationTypeKey($DestinationTypeKey)
    {
        $new = clone $this;
        $new->DestinationTypeKey = $DestinationTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\NameType $Name
     * @return DestinationTypeInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

