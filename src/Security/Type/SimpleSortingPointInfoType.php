<?php

namespace IMS\Security\Type;

class SimpleSortingPointInfoType
{

    /**
     * @var \IMS\Security\Type\SortingPointKeyType
     */
    private $Key = null;

    /**
     * @var \IMS\Security\Type\SortingPointCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Security\Type\SortingPointNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\SortingPointKeyType
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * @param \IMS\Security\Type\SortingPointKeyType $Key
     * @return SimpleSortingPointInfoType
     */
    public function withKey($Key)
    {
        $new = clone $this;
        $new->Key = $Key;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SortingPointCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Security\Type\SortingPointCodeType $Code
     * @return SimpleSortingPointInfoType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SortingPointNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\SortingPointNameType $Name
     * @return SimpleSortingPointInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

