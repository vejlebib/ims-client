<?php

namespace IMS\Query\Type;

class GetAssignedDestinationForTransportUnitResponse
{

    /**
     * @var \IMS\Query\Type\DestinationTypeInfoType
     */
    private $DestinationType = null;

    /**
     * @return \IMS\Query\Type\DestinationTypeInfoType
     */
    public function getDestinationType()
    {
        return $this->DestinationType;
    }

    /**
     * @param \IMS\Query\Type\DestinationTypeInfoType $DestinationType
     * @return GetAssignedDestinationForTransportUnitResponse
     */
    public function withDestinationType($DestinationType)
    {
        $new = clone $this;
        $new->DestinationType = $DestinationType;

        return $new;
    }


}

