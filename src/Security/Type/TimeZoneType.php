<?php

namespace IMS\Security\Type;

class TimeZoneType
{

    /**
     * @var \IMS\Security\Type\TimeZoneKeyType
     */
    private $TimeZoneKey = null;

    /**
     * @var \IMS\Security\Type\TimeZoneNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\TimeZoneKeyType
     */
    public function getTimeZoneKey()
    {
        return $this->TimeZoneKey;
    }

    /**
     * @param \IMS\Security\Type\TimeZoneKeyType $TimeZoneKey
     * @return TimeZoneType
     */
    public function withTimeZoneKey($TimeZoneKey)
    {
        $new = clone $this;
        $new->TimeZoneKey = $TimeZoneKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\TimeZoneNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\TimeZoneNameType $Name
     * @return TimeZoneType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

