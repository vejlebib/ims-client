<?php

namespace IMS\Query\Type;

class ExhibitionDetailsInfoType
{

    /**
     * @var \IMS\Query\Type\ExhibitionInfoType
     */
    private $ExhibitionInfo = null;

    /**
     * @var \IMS\Query\Type\LocationType
     */
    private $Locations = null;

    /**
     * @return \IMS\Query\Type\ExhibitionInfoType
     */
    public function getExhibitionInfo()
    {
        return $this->ExhibitionInfo;
    }

    /**
     * @param \IMS\Query\Type\ExhibitionInfoType $ExhibitionInfo
     * @return ExhibitionDetailsInfoType
     */
    public function withExhibitionInfo($ExhibitionInfo)
    {
        $new = clone $this;
        $new->ExhibitionInfo = $ExhibitionInfo;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\LocationType
     */
    public function getLocations()
    {
        return $this->Locations;
    }

    /**
     * @param \IMS\Query\Type\LocationType $Locations
     * @return ExhibitionDetailsInfoType
     */
    public function withLocations($Locations)
    {
        $new = clone $this;
        $new->Locations = $Locations;

        return $new;
    }


}

