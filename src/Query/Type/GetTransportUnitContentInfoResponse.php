<?php

namespace IMS\Query\Type;

class GetTransportUnitContentInfoResponse
{

    /**
     * @var \IMS\Query\Type\TransportUnitContentCountInfo
     */
    private $TransportUnitContentCountInfo = null;

    /**
     * @return \IMS\Query\Type\TransportUnitContentCountInfo
     */
    public function getTransportUnitContentCountInfo()
    {
        return $this->TransportUnitContentCountInfo;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitContentCountInfo
     * $TransportUnitContentCountInfo
     * @return GetTransportUnitContentInfoResponse
     */
    public function withTransportUnitContentCountInfo($TransportUnitContentCountInfo)
    {
        $new = clone $this;
        $new->TransportUnitContentCountInfo = $TransportUnitContentCountInfo;

        return $new;
    }


}

