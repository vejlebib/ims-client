<?php

namespace IMS\Query\Type;

class CheckMoveItemsAtLocationToTransportUnit
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
    private $SourceLocationRfid = null;

    /**
     * @var \IMS\Query\Type\RfidType
     */
    private $DestinationTransportUnitRfid = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return CheckMoveItemsAtLocationToTransportUnit
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
     * @return CheckMoveItemsAtLocationToTransportUnit
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
    public function getSourceLocationRfid()
    {
        return $this->SourceLocationRfid;
    }

    /**
     * @param \IMS\Query\Type\RfidType $SourceLocationRfid
     * @return CheckMoveItemsAtLocationToTransportUnit
     */
    public function withSourceLocationRfid($SourceLocationRfid)
    {
        $new = clone $this;
        $new->SourceLocationRfid = $SourceLocationRfid;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RfidType
     */
    public function getDestinationTransportUnitRfid()
    {
        return $this->DestinationTransportUnitRfid;
    }

    /**
     * @param \IMS\Query\Type\RfidType $DestinationTransportUnitRfid
     * @return CheckMoveItemsAtLocationToTransportUnit
     */
    public function withDestinationTransportUnitRfid($DestinationTransportUnitRfid)
    {
        $new = clone $this;
        $new->DestinationTransportUnitRfid = $DestinationTransportUnitRfid;

        return $new;
    }


}

