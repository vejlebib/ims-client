<?php

namespace IMS\Query\Type;

class SimpleLocationInfoType
{

    /**
     * @var \IMS\Query\Type\LocationKeyType
     */
    private $LocationKey = null;

    /**
     * @var \IMS\Query\Type\PlacementInfoType
     */
    private $Placement = null;

    /**
     * @return \IMS\Query\Type\LocationKeyType
     */
    public function getLocationKey()
    {
        return $this->LocationKey;
    }

    /**
     * @param \IMS\Query\Type\LocationKeyType $LocationKey
     * @return SimpleLocationInfoType
     */
    public function withLocationKey($LocationKey)
    {
        $new = clone $this;
        $new->LocationKey = $LocationKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PlacementInfoType
     */
    public function getPlacement()
    {
        return $this->Placement;
    }

    /**
     * @param \IMS\Query\Type\PlacementInfoType $Placement
     * @return SimpleLocationInfoType
     */
    public function withPlacement($Placement)
    {
        $new = clone $this;
        $new->Placement = $Placement;

        return $new;
    }


}

