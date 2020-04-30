<?php

namespace IMS\Query\Type;

class CheckMoveItemsAtLocationToLocation
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
     * @return CheckMoveItemsAtLocationToLocation
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
     * @return CheckMoveItemsAtLocationToLocation
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
     * @return CheckMoveItemsAtLocationToLocation
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
    public function getDestinationLocationRfid()
    {
        return $this->DestinationLocationRfid;
    }

    /**
     * @param \IMS\Query\Type\RfidType $DestinationLocationRfid
     * @return CheckMoveItemsAtLocationToLocation
     */
    public function withDestinationLocationRfid($DestinationLocationRfid)
    {
        $new = clone $this;
        $new->DestinationLocationRfid = $DestinationLocationRfid;

        return $new;
    }


}

