<?php

namespace IMS\Query\Type;

class DoFineSortingOnItem
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
     * @var \IMS\Query\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var \IMS\Query\Type\FineSortingAndTransportUnitInfoType
     */
    private $FineSortingAndTransportUnits = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return DoFineSortingOnItem
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
     * @return DoFineSortingOnItem
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param \IMS\Query\Type\ItemIdType $ItemId
     * @return DoFineSortingOnItem
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\FineSortingAndTransportUnitInfoType
     */
    public function getFineSortingAndTransportUnits()
    {
        return $this->FineSortingAndTransportUnits;
    }

    /**
     * @param \IMS\Query\Type\FineSortingAndTransportUnitInfoType
     * $FineSortingAndTransportUnits
     * @return DoFineSortingOnItem
     */
    public function withFineSortingAndTransportUnits($FineSortingAndTransportUnits)
    {
        $new = clone $this;
        $new->FineSortingAndTransportUnits = $FineSortingAndTransportUnits;

        return $new;
    }


}

