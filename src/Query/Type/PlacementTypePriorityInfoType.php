<?php

namespace IMS\Query\Type;

class PlacementTypePriorityInfoType
{

    /**
     * @var \IMS\Query\Type\PlacementTypeKeyType
     */
    private $PlacementTypeKey = null;

    /**
     * @var \IMS\Query\Type\PriorityType
     */
    private $Priority = null;

    /**
     * @return \IMS\Query\Type\PlacementTypeKeyType
     */
    public function getPlacementTypeKey()
    {
        return $this->PlacementTypeKey;
    }

    /**
     * @param \IMS\Query\Type\PlacementTypeKeyType $PlacementTypeKey
     * @return PlacementTypePriorityInfoType
     */
    public function withPlacementTypeKey($PlacementTypeKey)
    {
        $new = clone $this;
        $new->PlacementTypeKey = $PlacementTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PriorityType
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param \IMS\Query\Type\PriorityType $Priority
     * @return PlacementTypePriorityInfoType
     */
    public function withPriority($Priority)
    {
        $new = clone $this;
        $new->Priority = $Priority;

        return $new;
    }


}

