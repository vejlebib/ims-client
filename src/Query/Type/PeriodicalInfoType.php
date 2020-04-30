<?php

namespace IMS\Query\Type;

class PeriodicalInfoType
{

    /**
     * @var \IMS\Query\Type\PeriodicalNumberType
     */
    private $Number = null;

    /**
     * @var \IMS\Query\Type\PeriodicalVolumeType
     */
    private $Volume = null;

    /**
     * @var \IMS\Query\Type\PeriodicalYearType
     */
    private $Year = null;

    /**
     * @return \IMS\Query\Type\PeriodicalNumberType
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param \IMS\Query\Type\PeriodicalNumberType $Number
     * @return PeriodicalInfoType
     */
    public function withNumber($Number)
    {
        $new = clone $this;
        $new->Number = $Number;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PeriodicalVolumeType
     */
    public function getVolume()
    {
        return $this->Volume;
    }

    /**
     * @param \IMS\Query\Type\PeriodicalVolumeType $Volume
     * @return PeriodicalInfoType
     */
    public function withVolume($Volume)
    {
        $new = clone $this;
        $new->Volume = $Volume;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PeriodicalYearType
     */
    public function getYear()
    {
        return $this->Year;
    }

    /**
     * @param \IMS\Query\Type\PeriodicalYearType $Year
     * @return PeriodicalInfoType
     */
    public function withYear($Year)
    {
        $new = clone $this;
        $new->Year = $Year;

        return $new;
    }


}

