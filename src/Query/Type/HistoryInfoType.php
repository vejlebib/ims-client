<?php

namespace IMS\Query\Type;

class HistoryInfoType
{

    /**
     * @var \DateTime
     */
    private $Time = null;

    /**
     * @var \IMS\Query\Type\ValueType
     */
    private $Status = null;

    /**
     * @var \IMS\Query\Type\PlacementInfoType
     */
    private $PlacementInfo = null;

    /**
     * @var \IMS\Query\Type\ValueType
     */
    private $Operator = null;

    /**
     * @var \IMS\Query\Type\RfidType
     */
    private $Rfid = null;

    /**
     * @var \IMS\Query\Type\ValueType
     */
    private $ImsStatus = null;

    /**
     * @var \IMS\Query\Type\ValueType
     */
    private $CurrentChute = null;

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * @param \DateTime $Time
     * @return HistoryInfoType
     */
    public function withTime($Time)
    {
        $new = clone $this;
        $new->Time = $Time;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ValueType
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \IMS\Query\Type\ValueType $Status
     * @return HistoryInfoType
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PlacementInfoType
     */
    public function getPlacementInfo()
    {
        return $this->PlacementInfo;
    }

    /**
     * @param \IMS\Query\Type\PlacementInfoType $PlacementInfo
     * @return HistoryInfoType
     */
    public function withPlacementInfo($PlacementInfo)
    {
        $new = clone $this;
        $new->PlacementInfo = $PlacementInfo;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ValueType
     */
    public function getOperator()
    {
        return $this->Operator;
    }

    /**
     * @param \IMS\Query\Type\ValueType $Operator
     * @return HistoryInfoType
     */
    public function withOperator($Operator)
    {
        $new = clone $this;
        $new->Operator = $Operator;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RfidType
     */
    public function getRfid()
    {
        return $this->Rfid;
    }

    /**
     * @param \IMS\Query\Type\RfidType $Rfid
     * @return HistoryInfoType
     */
    public function withRfid($Rfid)
    {
        $new = clone $this;
        $new->Rfid = $Rfid;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ValueType
     */
    public function getImsStatus()
    {
        return $this->ImsStatus;
    }

    /**
     * @param \IMS\Query\Type\ValueType $ImsStatus
     * @return HistoryInfoType
     */
    public function withImsStatus($ImsStatus)
    {
        $new = clone $this;
        $new->ImsStatus = $ImsStatus;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ValueType
     */
    public function getCurrentChute()
    {
        return $this->CurrentChute;
    }

    /**
     * @param \IMS\Query\Type\ValueType $CurrentChute
     * @return HistoryInfoType
     */
    public function withCurrentChute($CurrentChute)
    {
        $new = clone $this;
        $new->CurrentChute = $CurrentChute;

        return $new;
    }


}

