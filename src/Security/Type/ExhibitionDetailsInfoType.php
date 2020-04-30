<?php

namespace IMS\Security\Type;

class ExhibitionDetailsInfoType
{

    /**
     * @var \IMS\Security\Type\ExhibitionInfoType
     */
    private $ExhibitionInfo = null;

    /**
     * @var \IMS\Security\Type\LocationType
     */
    private $Locations = null;

    /**
     * @return \IMS\Security\Type\ExhibitionInfoType
     */
    public function getExhibitionInfo()
    {
        return $this->ExhibitionInfo;
    }

    /**
     * @param \IMS\Security\Type\ExhibitionInfoType $ExhibitionInfo
     * @return ExhibitionDetailsInfoType
     */
    public function withExhibitionInfo($ExhibitionInfo)
    {
        $new = clone $this;
        $new->ExhibitionInfo = $ExhibitionInfo;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\LocationType
     */
    public function getLocations()
    {
        return $this->Locations;
    }

    /**
     * @param \IMS\Security\Type\LocationType $Locations
     * @return ExhibitionDetailsInfoType
     */
    public function withLocations($Locations)
    {
        $new = clone $this;
        $new->Locations = $Locations;

        return $new;
    }


}

