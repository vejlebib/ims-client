<?php

namespace IMS\Query\Type;

class GetTransportUnitsWithoutRfidResponse
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
     * @return GetTransportUnitsWithoutRfidResponse
     */
    public function withTransportUnits($TransportUnits)
    {
        $new = clone $this;
        $new->TransportUnits = $TransportUnits;

        return $new;
    }


}

