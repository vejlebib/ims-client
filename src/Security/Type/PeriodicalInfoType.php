<?php

namespace IMS\Security\Type;

class PeriodicalInfoType
{

    /**
     * @var \IMS\Security\Type\PeriodicalNumberType
     */
    private $Number = null;

    /**
     * @var \IMS\Security\Type\PeriodicalVolumeType
     */
    private $Volume = null;

    /**
     * @var \IMS\Security\Type\PeriodicalYearType
     */
    private $Year = null;

    /**
     * @return \IMS\Security\Type\PeriodicalNumberType
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param \IMS\Security\Type\PeriodicalNumberType $Number
     * @return PeriodicalInfoType
     */
    public function withNumber($Number)
    {
        $new = clone $this;
        $new->Number = $Number;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PeriodicalVolumeType
     */
    public function getVolume()
    {
        return $this->Volume;
    }

    /**
     * @param \IMS\Security\Type\PeriodicalVolumeType $Volume
     * @return PeriodicalInfoType
     */
    public function withVolume($Volume)
    {
        $new = clone $this;
        $new->Volume = $Volume;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PeriodicalYearType
     */
    public function getYear()
    {
        return $this->Year;
    }

    /**
     * @param \IMS\Security\Type\PeriodicalYearType $Year
     * @return PeriodicalInfoType
     */
    public function withYear($Year)
    {
        $new = clone $this;
        $new->Year = $Year;

        return $new;
    }


}

