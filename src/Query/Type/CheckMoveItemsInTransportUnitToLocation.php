<?php

namespace IMS\Query\Type;

class CheckMoveItemsInTransportUnitToLocation
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
    private $SourceTransportUnitRfid = null;

    /**
     * @var \IMS\Query\Type\RfidType
     */
    private $DestinationLocationRfid = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return CheckMoveItemsInTransportUnitToLocation
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
     * @return CheckMoveItemsInTransportUnitToLocation
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
    public function getSourceTransportUnitRfid()
    {
        return $this->SourceTransportUnitRfid;
    }

    /**
     * @param \IMS\Query\Type\RfidType $SourceTransportUnitRfid
     * @return CheckMoveItemsInTransportUnitToLocation
     */
    public function withSourceTransportUnitRfid($SourceTransportUnitRfid)
    {
        $new = clone $this;
        $new->SourceTransportUnitRfid = $SourceTransportUnitRfid;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RfidType
     */
    public function getDestinationLocationRfid()
    {
        return $this->DestinationLocationRfid;
    }

    /**
     * @param \IMS\Query\Type\RfidType $DestinationLocationRfid
     * @return CheckMoveItemsInTransportUnitToLocation
     */
    public function withDestinationLocationRfid($DestinationLocationRfid)
    {
        $new = clone $this;
        $new->DestinationLocationRfid = $DestinationLocationRfid;

        return $new;
    }


}

