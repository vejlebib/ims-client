<?php

namespace IMS\Query\Type;

class MaterialGroupingWithSpecInfoType
{

    /**
     * @var \IMS\Query\Type\MaterialGroupingInfoType
     */
    private $MaterialGrouping = null;

    /**
     * @var \IMS\Query\Type\MaterialGroupingSpecInfoType
     */
    private $MaterialGroupingSpecs = null;

    /**
     * @var \IMS\Query\Type\LocationType
     */
    private $Locations = null;

    /**
     * @return \IMS\Query\Type\MaterialGroupingInfoType
     */
    public function getMaterialGrouping()
    {
        return $this->MaterialGrouping;
    }

    /**
     * @param \IMS\Query\Type\MaterialGroupingInfoType $MaterialGrouping
     * @return MaterialGroupingWithSpecInfoType
     */
    public function withMaterialGrouping($MaterialGrouping)
    {
        $new = clone $this;
        $new->MaterialGrouping = $MaterialGrouping;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialGroupingSpecInfoType
     */
    public function getMaterialGroupingSpecs()
    {
        return $this->MaterialGroupingSpecs;
    }

    /**
     * @param \IMS\Query\Type\MaterialGroupingSpecInfoType $MaterialGroupingSpecs
     * @return MaterialGroupingWithSpecInfoType
     */
    public function withMaterialGroupingSpecs($MaterialGroupingSpecs)
    {
        $new = clone $this;
        $new->MaterialGroupingSpecs = $MaterialGroupingSpecs;

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
     * @return MaterialGroupingWithSpecInfoType
     */
    public function withLocations($Locations)
    {
        $new = clone $this;
        $new->Locations = $Locations;

        return $new;
    }


}

