<?php

namespace IMS\Query\Type;

class FindTransportUnitsResponse
{

    /**
     * @var \IMS\Query\Type\TransportUnitInfoType
     */
    private $TransportUnits = null;

    /**
     * @return \IMS\Query\Type\TransportUnitInfoType
     */
    public function getTransportUnits()
    {
        return $this->TransportUnits;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitInfoType $TransportUnits
     * @return FindTransportUnitsResponse
     */
    public function withTransportUnits($TransportUnits)
    {
        $new = clone $this;
        $new->TransportUnits = $TransportUnits;

        return $new;
    }


}

