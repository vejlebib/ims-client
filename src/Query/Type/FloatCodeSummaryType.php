<?php

namespace IMS\Query\Type;

class FloatCodeSummaryType
{

    /**
     * @var \IMS\Query\Type\FloatCodeKeyType
     */
    private $FloatCodeKey = null;

    /**
     * @var \IMS\Query\Type\FloatCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Query\Type\FloatCodeDisplayNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\FloatCodeKeyType
     */
    public function getFloatCodeKey()
    {
        return $this->FloatCodeKey;
    }

    /**
     * @param \IMS\Query\Type\FloatCodeKeyType $FloatCodeKey
     * @return FloatCodeSummaryType
     */
    public function withFloatCodeKey($FloatCodeKey)
    {
        $new = clone $this;
        $new->FloatCodeKey = $FloatCodeKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\FloatCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Query\Type\FloatCodeType $Code
     * @return FloatCodeSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\FloatCodeDisplayNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\FloatCodeDisplayNameType $Name
     * @return FloatCodeSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

