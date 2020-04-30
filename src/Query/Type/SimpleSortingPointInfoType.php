<?php

namespace IMS\Query\Type;

class SimpleSortingPointInfoType
{

    /**
     * @var \IMS\Query\Type\SortingPointKeyType
     */
    private $Key = null;

    /**
     * @var \IMS\Query\Type\SortingPointCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Query\Type\SortingPointNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\SortingPointKeyType
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * @param \IMS\Query\Type\SortingPointKeyType $Key
     * @return SimpleSortingPointInfoType
     */
    public function withKey($Key)
    {
        $new = clone $this;
        $new->Key = $Key;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SortingPointCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Query\Type\SortingPointCodeType $Code
     * @return SimpleSortingPointInfoType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SortingPointNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\SortingPointNameType $Name
     * @return SimpleSortingPointInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

