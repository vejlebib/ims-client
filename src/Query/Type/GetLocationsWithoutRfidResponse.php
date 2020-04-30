<?php

namespace IMS\Query\Type;

class GetLocationsWithoutRfidResponse
{

    /**
     * @var \IMS\Query\Type\LocationNodeType
     */
    private $LocationNode = null;

    /**
     * @return \IMS\Query\Type\LocationNodeType
     */
    public function getLocationNode()
    {
        return $this->LocationNode;
    }

    /**
     * @param \IMS\Query\Type\LocationNodeType $LocationNode
     * @return GetLocationsWithoutRfidResponse
     */
    public function withLocationNode($LocationNode)
    {
        $new = clone $this;
        $new->LocationNode = $LocationNode;

        return $new;
    }


}

