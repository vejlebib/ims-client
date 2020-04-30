<?php

namespace IMS\Query\Type;

class PickOrderClassInfoType
{

    /**
     * @var \IMS\Query\Type\PickOrderClassKeyType
     */
    private $PickOrderClassKey = null;

    /**
     * @var \IMS\Query\Type\PickOrderClassNameType
     */
    private $Name = null;

    /**
     * @var bool
     */
    private $NamedList = null;

    /**
     * @return \IMS\Query\Type\PickOrderClassKeyType
     */
    public function getPickOrderClassKey()
    {
        return $this->PickOrderClassKey;
    }

    /**
     * @param \IMS\Query\Type\PickOrderClassKeyType $PickOrderClassKey
     * @return PickOrderClassInfoType
     */
    public function withPickOrderClassKey($PickOrderClassKey)
    {
        $new = clone $this;
        $new->PickOrderClassKey = $PickOrderClassKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PickOrderClassNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\PickOrderClassNameType $Name
     * @return PickOrderClassInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNamedList()
    {
        return $this->NamedList;
    }

    /**
     * @param bool $NamedList
     * @return PickOrderClassInfoType
     */
    public function withNamedList($NamedList)
    {
        $new = clone $this;
        $new->NamedList = $NamedList;

        return $new;
    }


}

