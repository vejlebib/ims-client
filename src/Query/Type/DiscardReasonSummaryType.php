<?php

namespace IMS\Query\Type;

class DiscardReasonSummaryType
{

    /**
     * @var \IMS\Query\Type\DiscardReasonKeyType
     */
    private $DiscardReasonKey = null;

    /**
     * @var \IMS\Query\Type\DiscardReasonCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Query\Type\DiscardReasonNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\DiscardReasonKeyType
     */
    public function getDiscardReasonKey()
    {
        return $this->DiscardReasonKey;
    }

    /**
     * @param \IMS\Query\Type\DiscardReasonKeyType $DiscardReasonKey
     * @return DiscardReasonSummaryType
     */
    public function withDiscardReasonKey($DiscardReasonKey)
    {
        $new = clone $this;
        $new->DiscardReasonKey = $DiscardReasonKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DiscardReasonCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Query\Type\DiscardReasonCodeType $Code
     * @return DiscardReasonSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DiscardReasonNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\DiscardReasonNameType $Name
     * @return DiscardReasonSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

