<?php

namespace IMS\Query\Type;

class NameValuePairType
{

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\ValueType
     */
    private $Value = null;

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\NameType $Name
     * @return NameValuePairType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ValueType
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param \IMS\Query\Type\ValueType $Value
     * @return NameValuePairType
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }


}

