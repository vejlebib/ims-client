<?php

namespace IMS\Query\Type;

class TransportUnitContentCountInfo
{

    /**
     * @var int
     */
    private $NumberOfItems = null;

    /**
     * @var int
     */
    private $NumberOfTransportUnits = null;

    /**
     * @var \IMS\Query\Type\ValueType
     */
    private $Status = null;

    /**
     * @var \IMS\Query\Type\ValueType
     */
    private $TransportUnitName = null;

    /**
     * @var \IMS\Query\Type\PlacementInfoType
     */
    private $Placement = null;

    /**
     * @var \IMS\Query\Type\ChuteInfoType
     */
    private $Chute = null;

    /**
     * @return int
     */
    public function getNumberOfItems()
    {
        return $this->NumberOfItems;
    }

    /**
     * @param int $NumberOfItems
     * @return TransportUnitContentCountInfo
     */
    public function withNumberOfItems($NumberOfItems)
    {
        $new = clone $this;
        $new->NumberOfItems = $NumberOfItems;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfTransportUnits()
    {
        return $this->NumberOfTransportUnits;
    }

    /**
     * @param int $NumberOfTransportUnits
     * @return TransportUnitContentCountInfo
     */
    public function withNumberOfTransportUnits($NumberOfTransportUnits)
    {
        $new = clone $this;
        $new->NumberOfTransportUnits = $NumberOfTransportUnits;

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
     * @return TransportUnitContentCountInfo
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ValueType
     */
    public function getTransportUnitName()
    {
        return $this->TransportUnitName;
    }

    /**
     * @param \IMS\Query\Type\ValueType $TransportUnitName
     * @return TransportUnitContentCountInfo
     */
    public function withTransportUnitName($TransportUnitName)
    {
        $new = clone $this;
        $new->TransportUnitName = $TransportUnitName;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PlacementInfoType
     */
    public function getPlacement()
    {
        return $this->Placement;
    }

    /**
     * @param \IMS\Query\Type\PlacementInfoType $Placement
     * @return TransportUnitContentCountInfo
     */
    public function withPlacement($Placement)
    {
        $new = clone $this;
        $new->Placement = $Placement;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ChuteInfoType
     */
    public function getChute()
    {
        return $this->Chute;
    }

    /**
     * @param \IMS\Query\Type\ChuteInfoType $Chute
     * @return TransportUnitContentCountInfo
     */
    public function withChute($Chute)
    {
        $new = clone $this;
        $new->Chute = $Chute;

        return $new;
    }


}

