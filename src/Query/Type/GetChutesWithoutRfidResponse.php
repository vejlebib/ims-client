<?php

namespace IMS\Query\Type;

class GetChutesWithoutRfidResponse
{

    /**
     * @var \IMS\Query\Type\ChuteInfoType
     */
    private $Chutes = null;

    /**
     * @return \IMS\Query\Type\ChuteInfoType
     */
    public function getChutes()
    {
        return $this->Chutes;
    }

    /**
     * @param \IMS\Query\Type\ChuteInfoType $Chutes
     * @return GetChutesWithoutRfidResponse
     */
    public function withChutes($Chutes)
    {
        $new = clone $this;
        $new->Chutes = $Chutes;

        return $new;
    }


}

