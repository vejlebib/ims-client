<?php

namespace IMS\Security\Type;

class PickOrderTypeInfoType
{

    /**
     * @var \IMS\Security\Type\PickOrderTypeKeyType
     */
    private $PickOrderTypeKey = null;

    /**
     * @var \IMS\Security\Type\PickOrderTypeNameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\PickOrderClassInfoType
     */
    private $PickOrderClass = null;

    /**
     * @return \IMS\Security\Type\PickOrderTypeKeyType
     */
    public function getPickOrderTypeKey()
    {
        return $this->PickOrderTypeKey;
    }

    /**
     * @param \IMS\Security\Type\PickOrderTypeKeyType $PickOrderTypeKey
     * @return PickOrderTypeInfoType
     */
    public function withPickOrderTypeKey($PickOrderTypeKey)
    {
        $new = clone $this;
        $new->PickOrderTypeKey = $PickOrderTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PickOrderTypeNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\PickOrderTypeNameType $Name
     * @return PickOrderTypeInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PickOrderClassInfoType
     */
    public function getPickOrderClass()
    {
        return $this->PickOrderClass;
    }

    /**
     * @param \IMS\Security\Type\PickOrderClassInfoType $PickOrderClass
     * @return PickOrderTypeInfoType
     */
    public function withPickOrderClass($PickOrderClass)
    {
        $new = clone $this;
        $new->PickOrderClass = $PickOrderClass;

        return $new;
    }


}

