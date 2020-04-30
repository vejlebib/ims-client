<?php

namespace IMS\Security\Type;

class LocationType
{

    /**
     * @var \IMS\Security\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Security\Type\LocationKeyType
     */
    private $LocationKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Security\Type\RfidType
     */
    private $Rfid = null;

    /**
     * @var \IMS\Security\Type\LocationKeyType
     */
    private $ParentLocationKey = null;

    /**
     * @var \IMS\Security\Type\LocationUsageType
     */
    private $LocationUsageType = null;

    /**
     * @var \IMS\Security\Type\CapacityType
     */
    private $Capacity = null;

    /**
     * @var \IMS\Security\Type\SimpleMaterialGroupingInfoType
     */
    private $SimpleMaterialGroupingInfo = null;

    /**
     * @var \IMS\Security\Type\PlacementInfoType
     */
    private $Placement = null;

    /**
     * @return \IMS\Security\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Security\Type\BranchKeyType $BranchKey
     * @return LocationType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\LocationKeyType
     */
    public function getLocationKey()
    {
        return $this->LocationKey;
    }

    /**
     * @param \IMS\Security\Type\LocationKeyType $LocationKey
     * @return LocationType
     */
    public function withLocationKey($LocationKey)
    {
        $new = clone $this;
        $new->LocationKey = $LocationKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\NameType $Name
     * @return LocationType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Security\Type\DescriptionType $Description
     * @return LocationType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

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
     * @return LocationType
     */
    public function withRfid($Rfid)
    {
        $new = clone $this;
        $new->Rfid = $Rfid;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\LocationKeyType
     */
    public function getParentLocationKey()
    {
        return $this->ParentLocationKey;
    }

    /**
     * @param \IMS\Security\Type\LocationKeyType $ParentLocationKey
     * @return LocationType
     */
    public function withParentLocationKey($ParentLocationKey)
    {
        $new = clone $this;
        $new->ParentLocationKey = $ParentLocationKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\LocationUsageType
     */
    public function getLocationUsageType()
    {
        return $this->LocationUsageType;
    }

    /**
     * @param \IMS\Security\Type\LocationUsageType $LocationUsageType
     * @return LocationType
     */
    public function withLocationUsageType($LocationUsageType)
    {
        $new = clone $this;
        $new->LocationUsageType = $LocationUsageType;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CapacityType
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }

    /**
     * @param \IMS\Security\Type\CapacityType $Capacity
     * @return LocationType
     */
    public function withCapacity($Capacity)
    {
        $new = clone $this;
        $new->Capacity = $Capacity;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SimpleMaterialGroupingInfoType
     */
    public function getSimpleMaterialGroupingInfo()
    {
        return $this->SimpleMaterialGroupingInfo;
    }

    /**
     * @param \IMS\Security\Type\SimpleMaterialGroupingInfoType
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
     * @return \IMS\Security\Type\PlacementInfoType
     */
    public function getPlacement()
    {
        return $this->Placement;
    }

    /**
     * @param \IMS\Security\Type\PlacementInfoType $Placement
     * @return LocationType
     */
    public function withPlacement($Placement)
    {
        $new = clone $this;
        $new->Placement = $Placement;

        return $new;
    }


}

