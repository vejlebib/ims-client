<?php

namespace IMS\Security\Type;

class FloatCodeSummaryType
{

    /**
     * @var \IMS\Security\Type\FloatCodeKeyType
     */
    private $FloatCodeKey = null;

    /**
     * @var \IMS\Security\Type\FloatCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Security\Type\FloatCodeDisplayNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\FloatCodeKeyType
     */
    public function getFloatCodeKey()
    {
        return $this->FloatCodeKey;
    }

    /**
     * @param \IMS\Security\Type\FloatCodeKeyType $FloatCodeKey
     * @return FloatCodeSummaryType
     */
    public function withFloatCodeKey($FloatCodeKey)
    {
        $new = clone $this;
        $new->FloatCodeKey = $FloatCodeKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\FloatCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Security\Type\FloatCodeType $Code
     * @return FloatCodeSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\FloatCodeDisplayNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\FloatCodeDisplayNameType $Name
     * @return FloatCodeSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

