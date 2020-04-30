<?php

namespace IMS\Query\Type;

class GetTransportUnitDetailsResponse
{

    /**
     * @var \IMS\Query\Type\TransportUnitDetailsType
     */
    private $TransportUnitDetails = null;

    /**
     * @return \IMS\Query\Type\TransportUnitDetailsType
     */
    public function getTransportUnitDetails()
    {
        return $this->TransportUnitDetails;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitDetailsType $TransportUnitDetails
     * @return GetTransportUnitDetailsResponse
     */
    public function withTransportUnitDetails($TransportUnitDetails)
    {
        $new = clone $this;
        $new->TransportUnitDetails = $TransportUnitDetails;

        return $new;
    }


}

