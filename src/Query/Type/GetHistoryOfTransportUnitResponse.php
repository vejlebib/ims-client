<?php

namespace IMS\Query\Type;

class GetHistoryOfTransportUnitResponse
{

    /**
     * @var \IMS\Query\Type\TransportUnitHistoryType
     */
    private $TransportUnitHistory = null;

    /**
     * @return \IMS\Query\Type\TransportUnitHistoryType
     */
    public function getTransportUnitHistory()
    {
        return $this->TransportUnitHistory;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitHistoryType $TransportUnitHistory
     * @return GetHistoryOfTransportUnitResponse
     */
    public function withTransportUnitHistory($TransportUnitHistory)
    {
        $new = clone $this;
        $new->TransportUnitHistory = $TransportUnitHistory;

        return $new;
    }


}

