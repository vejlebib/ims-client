<?php

namespace IMS\Security\Type;

class ExtendedBranchInfoType
{

    /**
     * @var bool
     */
    private $IsHotel = null;

    /**
     * @return bool
     */
    public function getIsHotel()
    {
        return $this->IsHotel;
    }

    /**
     * @param bool $IsHotel
     * @return ExtendedBranchInfoType
     */
    public function withIsHotel($IsHotel)
    {
        $new = clone $this;
        $new->IsHotel = $IsHotel;

        return $new;
    }


}

