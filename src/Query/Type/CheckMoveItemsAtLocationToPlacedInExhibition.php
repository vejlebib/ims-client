<?php

namespace IMS\Query\Type;

class CheckMoveItemsAtLocationToPlacedInExhibition
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
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return CheckMoveItemsAtLocationToPlacedInExhibition
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
     * @return CheckMoveItemsAtLocationToPlacedInExhibition
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
     * @return CheckMoveItemsAtLocationToPlacedInExhibition
     */
    public function withSourceLocationRfid($SourceLocationRfid)
    {
        $new = clone $this;
        $new->SourceLocationRfid = $SourceLocationRfid;

        return $new;
    }


}

