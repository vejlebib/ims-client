<?php

namespace IMS\Security\Type;

class PlacementTypePriorityInfoType
{

    /**
     * @var \IMS\Security\Type\PlacementTypeKeyType
     */
    private $PlacementTypeKey = null;

    /**
     * @var \IMS\Security\Type\PriorityType
     */
    private $Priority = null;

    /**
     * @return \IMS\Security\Type\PlacementTypeKeyType
     */
    public function getPlacementTypeKey()
    {
        return $this->PlacementTypeKey;
    }

    /**
     * @param \IMS\Security\Type\PlacementTypeKeyType $PlacementTypeKey
     * @return PlacementTypePriorityInfoType
     */
    public function withPlacementTypeKey($PlacementTypeKey)
    {
        $new = clone $this;
        $new->PlacementTypeKey = $PlacementTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PriorityType
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param \IMS\Security\Type\PriorityType $Priority
     * @return PlacementTypePriorityInfoType
     */
    public function withPriority($Priority)
    {
        $new = clone $this;
        $new->Priority = $Priority;

        return $new;
    }


}

