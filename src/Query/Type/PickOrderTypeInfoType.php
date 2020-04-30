<?php

namespace IMS\Query\Type;

class PickOrderTypeInfoType
{

    /**
     * @var \IMS\Query\Type\PickOrderTypeKeyType
     */
    private $PickOrderTypeKey = null;

    /**
     * @var \IMS\Query\Type\PickOrderTypeNameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\PickOrderClassInfoType
     */
    private $PickOrderClass = null;

    /**
     * @return \IMS\Query\Type\PickOrderTypeKeyType
     */
    public function getPickOrderTypeKey()
    {
        return $this->PickOrderTypeKey;
    }

    /**
     * @param \IMS\Query\Type\PickOrderTypeKeyType $PickOrderTypeKey
     * @return PickOrderTypeInfoType
     */
    public function withPickOrderTypeKey($PickOrderTypeKey)
    {
        $new = clone $this;
        $new->PickOrderTypeKey = $PickOrderTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PickOrderTypeNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\PickOrderTypeNameType $Name
     * @return PickOrderTypeInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PickOrderClassInfoType
     */
    public function getPickOrderClass()
    {
        return $this->PickOrderClass;
    }

    /**
     * @param \IMS\Query\Type\PickOrderClassInfoType $PickOrderClass
     * @return PickOrderTypeInfoType
     */
    public function withPickOrderClass($PickOrderClass)
    {
        $new = clone $this;
        $new->PickOrderClass = $PickOrderClass;

        return $new;
    }


}

