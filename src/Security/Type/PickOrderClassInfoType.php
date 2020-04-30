<?php

namespace IMS\Security\Type;

class PickOrderClassInfoType
{

    /**
     * @var \IMS\Security\Type\PickOrderClassKeyType
     */
    private $PickOrderClassKey = null;

    /**
     * @var \IMS\Security\Type\PickOrderClassNameType
     */
    private $Name = null;

    /**
     * @var bool
     */
    private $NamedList = null;

    /**
     * @return \IMS\Security\Type\PickOrderClassKeyType
     */
    public function getPickOrderClassKey()
    {
        return $this->PickOrderClassKey;
    }

    /**
     * @param \IMS\Security\Type\PickOrderClassKeyType $PickOrderClassKey
     * @return PickOrderClassInfoType
     */
    public function withPickOrderClassKey($PickOrderClassKey)
    {
        $new = clone $this;
        $new->PickOrderClassKey = $PickOrderClassKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PickOrderClassNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\PickOrderClassNameType $Name
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

