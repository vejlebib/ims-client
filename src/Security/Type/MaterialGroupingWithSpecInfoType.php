<?php

namespace IMS\Security\Type;

class MaterialGroupingWithSpecInfoType
{

    /**
     * @var \IMS\Security\Type\MaterialGroupingInfoType
     */
    private $MaterialGrouping = null;

    /**
     * @var \IMS\Security\Type\MaterialGroupingSpecInfoType
     */
    private $MaterialGroupingSpecs = null;

    /**
     * @var \IMS\Security\Type\LocationType
     */
    private $Locations = null;

    /**
     * @return \IMS\Security\Type\MaterialGroupingInfoType
     */
    public function getMaterialGrouping()
    {
        return $this->MaterialGrouping;
    }

    /**
     * @param \IMS\Security\Type\MaterialGroupingInfoType $MaterialGrouping
     * @return MaterialGroupingWithSpecInfoType
     */
    public function withMaterialGrouping($MaterialGrouping)
    {
        $new = clone $this;
        $new->MaterialGrouping = $MaterialGrouping;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\MaterialGroupingSpecInfoType
     */
    public function getMaterialGroupingSpecs()
    {
        return $this->MaterialGroupingSpecs;
    }

    /**
     * @param \IMS\Security\Type\MaterialGroupingSpecInfoType $MaterialGroupingSpecs
     * @return MaterialGroupingWithSpecInfoType
     */
    public function withMaterialGroupingSpecs($MaterialGroupingSpecs)
    {
        $new = clone $this;
        $new->MaterialGroupingSpecs = $MaterialGroupingSpecs;

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
     * @return MaterialGroupingWithSpecInfoType
     */
    public function withLocations($Locations)
    {
        $new = clone $this;
        $new->Locations = $Locations;

        return $new;
    }


}

