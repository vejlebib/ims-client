<?php

namespace IMS\Query\Type;

class LocationType
{

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Query\Type\LocationKeyType
     */
    private $LocationKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Query\Type\RfidType
     */
    private $Rfid = null;

    /**
     * @var \IMS\Query\Type\LocationKeyType
     */
    private $ParentLocationKey = null;

    /**
     * @var \IMS\Query\Type\LocationUsageType
     */
    private $LocationUsageType = null;

    /**
     * @var \IMS\Query\Type\CapacityType
     */
    private $Capacity = null;

    /**
     * @var \IMS\Query\Type\SimpleMaterialGroupingInfoType
     */
    private $SimpleMaterialGroupingInfo = null;

    /**
     * @var \IMS\Query\Type\PlacementInfoType
     */
    private $Placement = null;

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $BranchKey
     * @return LocationType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\LocationKeyType
     */
    public function getLocationKey()
    {
        return $this->LocationKey;
    }

    /**
     * @param \IMS\Query\Type\LocationKeyType $LocationKey
     * @return LocationType
     */
    public function withLocationKey($LocationKey)
    {
        $new = clone $this;
        $new->LocationKey = $LocationKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\NameType $Name
     * @return LocationType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Query\Type\DescriptionType $Description
     * @return LocationType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

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
     * @return LocationType
     */
    public function withRfid($Rfid)
    {
        $new = clone $this;
        $new->Rfid = $Rfid;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\LocationKeyType
     */
    public function getParentLocationKey()
    {
        return $this->ParentLocationKey;
    }

    /**
     * @param \IMS\Query\Type\LocationKeyType $ParentLocationKey
     * @return LocationType
     */
    public function withParentLocationKey($ParentLocationKey)
    {
        $new = clone $this;
        $new->ParentLocationKey = $ParentLocationKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\LocationUsageType
     */
    public function getLocationUsageType()
    {
        return $this->LocationUsageType;
    }

    /**
     * @param \IMS\Query\Type\LocationUsageType $LocationUsageType
     * @return LocationType
     */
    public function withLocationUsageType($LocationUsageType)
    {
        $new = clone $this;
        $new->LocationUsageType = $LocationUsageType;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CapacityType
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }

    /**
     * @param \IMS\Query\Type\CapacityType $Capacity
     * @return LocationType
     */
    public function withCapacity($Capacity)
    {
        $new = clone $this;
        $new->Capacity = $Capacity;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SimpleMaterialGroupingInfoType
     */
    public function getSimpleMaterialGroupingInfo()
    {
        return $this->SimpleMaterialGroupingInfo;
    }

    /**
     * @param \IMS\Query\Type\SimpleMaterialGroupingInfoType
     * $SimpleMaterialGroupingInfo
     * @return LocationType
     */
    public function withSimpleMaterialGroupingInfo($SimpleMaterialGroupingInfo)
    {
        $new = clone $this;
        $new->SimpleMaterialGroupingInfo = $SimpleMaterialGroupingInfo;

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
     * @return LocationType
     */
    public function withPlacement($Placement)
    {
        $new = clone $this;
        $new->Placement = $Placement;

        return $new;
    }


}

