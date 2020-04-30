<?php

namespace IMS\Security\Type;

class HistoryInfoType
{

    /**
     * @var \DateTime
     */
    private $Time = null;

    /**
     * @var \IMS\Security\Type\ValueType
     */
    private $Status = null;

    /**
     * @var \IMS\Security\Type\PlacementInfoType
     */
    private $PlacementInfo = null;

    /**
     * @var \IMS\Security\Type\ValueType
     */
    private $Operator = null;

    /**
     * @var \IMS\Security\Type\RfidType
     */
    private $Rfid = null;

    /**
     * @var \IMS\Security\Type\ValueType
     */
    private $ImsStatus = null;

    /**
     * @var \IMS\Security\Type\ValueType
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
     * @return \IMS\Security\Type\ValueType
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \IMS\Security\Type\ValueType $Status
     * @return HistoryInfoType
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PlacementInfoType
     */
    public function getPlacementInfo()
    {
        return $this->PlacementInfo;
    }

    /**
     * @param \IMS\Security\Type\PlacementInfoType $PlacementInfo
     * @return HistoryInfoType
     */
    public function withPlacementInfo($PlacementInfo)
    {
        $new = clone $this;
        $new->PlacementInfo = $PlacementInfo;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ValueType
     */
    public function getOperator()
    {
        return $this->Operator;
    }

    /**
     * @param \IMS\Security\Type\ValueType $Operator
     * @return HistoryInfoType
     */
    public function withOperator($Operator)
    {
        $new = clone $this;
        $new->Operator = $Operator;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\RfidType
     */
    public function getRfid()
    {
        return $this->Rfid;
    }

    /**
     * @param \IMS\Security\Type\RfidType $Rfid
     * @return HistoryInfoType
     */
    public function withRfid($Rfid)
    {
        $new = clone $this;
        $new->Rfid = $Rfid;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ValueType
     */
    public function getImsStatus()
    {
        return $this->ImsStatus;
    }

    /**
     * @param \IMS\Security\Type\ValueType $ImsStatus
     * @return HistoryInfoType
     */
    public function withImsStatus($ImsStatus)
    {
        $new = clone $this;
        $new->ImsStatus = $ImsStatus;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ValueType
     */
    public function getCurrentChute()
    {
        return $this->CurrentChute;
    }

    /**
     * @param \IMS\Security\Type\ValueType $CurrentChute
     * @return HistoryInfoType
     */
    public function withCurrentChute($CurrentChute)
    {
        $new = clone $this;
        $new->CurrentChute = $CurrentChute;

        return $new;
    }


}

