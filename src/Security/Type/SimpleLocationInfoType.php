<?php

namespace IMS\Security\Type;

class SimpleLocationInfoType
{

    /**
     * @var \IMS\Security\Type\LocationKeyType
     */
    private $LocationKey = null;

    /**
     * @var \IMS\Security\Type\PlacementInfoType
     */
    private $Placement = null;

    /**
     * @return \IMS\Security\Type\LocationKeyType
     */
    public function getLocationKey()
    {
        return $this->LocationKey;
    }

    /**
     * @param \IMS\Security\Type\LocationKeyType $LocationKey
     * @return SimpleLocationInfoType
     */
    public function withLocationKey($LocationKey)
    {
        $new = clone $this;
        $new->LocationKey = $LocationKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PlacementInfoType
     */
    public function getPlacement()
    {
        return $this->Placement;
    }

    /**
     * @param \IMS\Security\Type\PlacementInfoType $Placement
     * @return SimpleLocationInfoType
     */
    public function withPlacement($Placement)
    {
        $new = clone $this;
        $new->Placement = $Placement;

        return $new;
    }


}

