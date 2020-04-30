<?php

namespace IMS\Security\Type;

class IlsLocationSummaryType
{

    /**
     * @var \IMS\Security\Type\IlsLocationKeyType
     */
    private $IlsLocationKey = null;

    /**
     * @var \IMS\Security\Type\IlsLocationCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Security\Type\IlsLocationNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\IlsLocationKeyType
     */
    public function getIlsLocationKey()
    {
        return $this->IlsLocationKey;
    }

    /**
     * @param \IMS\Security\Type\IlsLocationKeyType $IlsLocationKey
     * @return IlsLocationSummaryType
     */
    public function withIlsLocationKey($IlsLocationKey)
    {
        $new = clone $this;
        $new->IlsLocationKey = $IlsLocationKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsLocationCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Security\Type\IlsLocationCodeType $Code
     * @return IlsLocationSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsLocationNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\IlsLocationNameType $Name
     * @return IlsLocationSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

