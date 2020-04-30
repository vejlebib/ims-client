<?php

namespace IMS\Query\Type;

class TimeZoneType
{

    /**
     * @var \IMS\Query\Type\TimeZoneKeyType
     */
    private $TimeZoneKey = null;

    /**
     * @var \IMS\Query\Type\TimeZoneNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\TimeZoneKeyType
     */
    public function getTimeZoneKey()
    {
        return $this->TimeZoneKey;
    }

    /**
     * @param \IMS\Query\Type\TimeZoneKeyType $TimeZoneKey
     * @return TimeZoneType
     */
    public function withTimeZoneKey($TimeZoneKey)
    {
        $new = clone $this;
        $new->TimeZoneKey = $TimeZoneKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\TimeZoneNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\TimeZoneNameType $Name
     * @return TimeZoneType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

