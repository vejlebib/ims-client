<?php

namespace IMS\Query\Type;

class DoFineSortingOnTransportUnit
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
     * @return DoFineSortingOnTransportUnit
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
     * @return DoFineSortingOnTransportUnit
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
     * @return DoFineSortingOnTransportUnit
     */
    public function withTransportUnitId($TransportUnitId)
    {
        $new = clone $this;
        $new->TransportUnitId = $TransportUnitId;

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
     * @return DoFineSortingOnTransportUnit
     */
    public function withFineSortingAndTransportUnits($FineSortingAndTransportUnits)
    {
        $new = clone $this;
        $new->FineSortingAndTransportUnits = $FineSortingAndTransportUnits;

        return $new;
    }


}

