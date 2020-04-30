<?php

namespace IMS\Query\Type;

class IlsLocationSummaryType
{

    /**
     * @var \IMS\Query\Type\IlsLocationKeyType
     */
    private $IlsLocationKey = null;

    /**
     * @var \IMS\Query\Type\IlsLocationCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Query\Type\IlsLocationNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\IlsLocationKeyType
     */
    public function getIlsLocationKey()
    {
        return $this->IlsLocationKey;
    }

    /**
     * @param \IMS\Query\Type\IlsLocationKeyType $IlsLocationKey
     * @return IlsLocationSummaryType
     */
    public function withIlsLocationKey($IlsLocationKey)
    {
        $new = clone $this;
        $new->IlsLocationKey = $IlsLocationKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsLocationCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Query\Type\IlsLocationCodeType $Code
     * @return IlsLocationSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsLocationNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\IlsLocationNameType $Name
     * @return IlsLocationSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}
