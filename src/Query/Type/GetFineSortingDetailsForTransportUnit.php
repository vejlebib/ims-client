<?php

namespace IMS\Query\Type;

class GetFineSortingDetailsForTransportUnit
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
     * @var \IMS\Query\Type\RfidType
     */
    private $TransportUnitRfid = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetFineSortingDetailsForTransportUnit
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
     * @return GetFineSortingDetailsForTransportUnit
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RfidType
     */
    public function getTransportUnitRfid()
    {
        return $this->TransportUnitRfid;
    }

    /**
     * @param \IMS\Query\Type\RfidType $TransportUnitRfid
     * @return GetFineSortingDetailsForTransportUnit
     */
    public function withTransportUnitRfid($TransportUnitRfid)
    {
        $new = clone $this;
        $new->TransportUnitRfid = $TransportUnitRfid;

        return $new;
    }


}

