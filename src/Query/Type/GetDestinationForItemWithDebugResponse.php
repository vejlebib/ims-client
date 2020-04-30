<?php

namespace IMS\Query\Type;

class GetDestinationForItemWithDebugResponse
{

    /**
     * @var \IMS\Query\Type\DestinationAndDebugType
     */
    private $DestinationAndDebug = null;

    /**
     * @return \IMS\Query\Type\DestinationAndDebugType
     */
    public function getDestinationAndDebug()
    {
        return $this->DestinationAndDebug;
    }

    /**
     * @param \IMS\Query\Type\DestinationAndDebugType $DestinationAndDebug
     * @return GetDestinationForItemWithDebugResponse
     */
    public function withDestinationAndDebug($DestinationAndDebug)
    {
        $new = clone $this;
        $new->DestinationAndDebug = $DestinationAndDebug;

        return $new;
    }


}

