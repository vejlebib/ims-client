<?php

namespace IMS\Query\Type;

class GetAssignedDestinationForTransportUnit
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Query\Type\TransportUnitIdType
     */
    private $TransportUnitId = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetAssignedDestinationForTransportUnit
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $BranchKey
     * @return GetAssignedDestinationForTransportUnit
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\TransportUnitIdType
     */
    public function getTransportUnitId()
    {
        return $this->TransportUnitId;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitIdType $TransportUnitId
     * @return GetAssignedDestinationForTransportUnit
     */
    public function withTransportUnitId($TransportUnitId)
    {
        $new = clone $this;
        $new->TransportUnitId = $TransportUnitId;

        return $new;
    }


}

