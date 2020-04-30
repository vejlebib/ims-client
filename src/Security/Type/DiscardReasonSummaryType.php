<?php

namespace IMS\Security\Type;

class DiscardReasonSummaryType
{

    /**
     * @var \IMS\Security\Type\DiscardReasonKeyType
     */
    private $DiscardReasonKey = null;

    /**
     * @var \IMS\Security\Type\DiscardReasonCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Security\Type\DiscardReasonNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\DiscardReasonKeyType
     */
    public function getDiscardReasonKey()
    {
        return $this->DiscardReasonKey;
    }

    /**
     * @param \IMS\Security\Type\DiscardReasonKeyType $DiscardReasonKey
     * @return DiscardReasonSummaryType
     */
    public function withDiscardReasonKey($DiscardReasonKey)
    {
        $new = clone $this;
        $new->DiscardReasonKey = $DiscardReasonKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DiscardReasonCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Security\Type\DiscardReasonCodeType $Code
     * @return DiscardReasonSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DiscardReasonNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\DiscardReasonNameType $Name
     * @return DiscardReasonSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

