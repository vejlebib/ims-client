<?php

namespace IMS\Query\Type;

class GetNewDestinationForItemResponse
{

    /**
     * @var \IMS\Query\Type\ExternalDestinationInfoType
     */
    private $ExternalDestination = null;

    /**
     * @return \IMS\Query\Type\ExternalDestinationInfoType
     */
    public function getExternalDestination()
    {
        return $this->ExternalDestination;
    }

    /**
     * @param \IMS\Query\Type\ExternalDestinationInfoType $ExternalDestination
     * @return GetNewDestinationForItemResponse
     */
    public function withExternalDestination($ExternalDestination)
    {
        $new = clone $this;
        $new->ExternalDestination = $ExternalDestination;

        return $new;
    }


}

