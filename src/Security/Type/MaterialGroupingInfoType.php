<?php

namespace IMS\Security\Type;

class MaterialGroupingInfoType
{

    /**
     * @var \IMS\Security\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Security\Type\BranchConfigurationKeyType
     */
    private $BranchConfigurationKey = null;

    /**
     * @var \IMS\Security\Type\MaterialGroupingKeyType
     */
    private $MaterialGroupingKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Security\Type\PlacementTextType
     */
    private $PickPlacementPath = null;

    /**
     * @var int
     */
    private $MeterMinPct = null;

    /**
     * @var int
     */
    private $MeterMaxPct = null;

    /**
     * @var int
     */
    private $CopiesMin = null;

    /**
     * @var int
     */
    private $CopiesMax = null;

    /**
     * @var bool
     */
    private $AutomaticReplenish = null;

    /**
     * @var int
     */
    private $AutomaticReplenishTarget = null;

    /**
     * @var \IMS\Security\Type\FineSortingKeyType
     */
    private $FineSortingKey = null;

    /**
     * @var bool
     */
    private $SortBySpecNo = null;

    /**
     * @var bool
     */
    private $SortByClassification = null;

    /**
     * @var \IMS\Security\Type\PlacementTypeKeyType
     */
    private $PlacementTypeKey = null;

    /**
     * @var int
     */
    private $NonFloatPercentage = null;

    /**
     * @var bool
     */
    private $Closed = null;

    /**
     * @var \IMS\Security\Type\CapacityType
     */
    private $CurrentStock = null;

    /**
     * @var \DateTime
     */
    private $LastModifiedTime = null;

    /**
     * @var \IMS\Security\Type\UsernameType
     */
    private $LastModifiedBy = null;

    /**
     * @return \IMS\Security\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Security\Type\BranchKeyType $BranchKey
     * @return MaterialGroupingInfoType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchConfigurationKeyType
     */
    public function getBranchConfigurationKey()
    {
        return $this->BranchConfigurationKey;
    }

    /**
     * @param \IMS\Security\Type\BranchConfigurationKeyType $BranchConfigurationKey
     * @return MaterialGroupingInfoType
     */
    public function withBranchConfigurationKey($BranchConfigurationKey)
    {
        $new = clone $this;
        $new->BranchConfigurationKey = $BranchConfigurationKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\MaterialGroupingKeyType
     */
    public function getMaterialGroupingKey()
    {
        return $this->MaterialGroupingKey;
    }

    /**
     * @param \IMS\Security\Type\MaterialGroupingKeyType $MaterialGroupingKey
     * @return MaterialGroupingInfoType
     */
    public function withMaterialGroupingKey($MaterialGroupingKey)
    {
        $new = clone $this;
        $new->MaterialGroupingKey = $MaterialGroupingKey;

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
     * @return MaterialGroupingInfoType
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
     * @return MaterialGroupingInfoType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PlacementTextType
     */
    public function getPickPlacementPath()
    {
        return $this->PickPlacementPath;
    }

    /**
     * @param \IMS\Security\Type\PlacementTextType $PickPlacementPath
     * @return MaterialGroupingInfoType
     */
    public function withPickPlacementPath($PickPlacementPath)
    {
        $new = clone $this;
        $new->PickPlacementPath = $PickPlacementPath;

        return $new;
    }

    /**
     * @return int
     */
    public function getMeterMinPct()
    {
        return $this->MeterMinPct;
    }

    /**
     * @param int $MeterMinPct
     * @return MaterialGroupingInfoType
     */
    public function withMeterMinPct($MeterMinPct)
    {
        $new = clone $this;
        $new->MeterMinPct = $MeterMinPct;

        return $new;
    }

    /**
     * @return int
     */
    public function getMeterMaxPct()
    {
        return $this->MeterMaxPct;
    }

    /**
     * @param int $MeterMaxPct
     * @return MaterialGroupingInfoType
     */
    public function withMeterMaxPct($MeterMaxPct)
    {
        $new = clone $this;
        $new->MeterMaxPct = $MeterMaxPct;

        return $new;
    }

    /**
     * @return int
     */
    public function getCopiesMin()
    {
        return $this->CopiesMin;
    }

    /**
     * @param int $CopiesMin
     * @return MaterialGroupingInfoType
     */
    public function withCopiesMin($CopiesMin)
    {
        $new = clone $this;
        $new->CopiesMin = $CopiesMin;

        return $new;
    }

    /**
     * @return int
     */
    public function getCopiesMax()
    {
        return $this->CopiesMax;
    }

    /**
     * @param int $CopiesMax
     * @return MaterialGroupingInfoType
     */
    public function withCopiesMax($CopiesMax)
    {
        $new = clone $this;
        $new->CopiesMax = $CopiesMax;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutomaticReplenish()
    {
        return $this->AutomaticReplenish;
    }

    /**
     * @param bool $AutomaticReplenish
     * @return MaterialGroupingInfoType
     */
    public function withAutomaticReplenish($AutomaticReplenish)
    {
        $new = clone $this;
        $new->AutomaticReplenish = $AutomaticReplenish;

        return $new;
    }

    /**
     * @return int
     */
    public function getAutomaticReplenishTarget()
    {
        return $this->AutomaticReplenishTarget;
    }

    /**
     * @param int $AutomaticReplenishTarget
     * @return MaterialGroupingInfoType
     */
    public function withAutomaticReplenishTarget($AutomaticReplenishTarget)
    {
        $new = clone $this;
        $new->AutomaticReplenishTarget = $AutomaticReplenishTarget;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\FineSortingKeyType
     */
    public function getFineSortingKey()
    {
        return $this->FineSortingKey;
    }

    /**
     * @param \IMS\Security\Type\FineSortingKeyType $FineSortingKey
     * @return MaterialGroupingInfoType
     */
    public function withFineSortingKey($FineSortingKey)
    {
        $new = clone $this;
        $new->FineSortingKey = $FineSortingKey;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSortBySpecNo()
    {
        return $this->SortBySpecNo;
    }

    /**
     * @param bool $SortBySpecNo
     * @return MaterialGroupingInfoType
     */
    public function withSortBySpecNo($SortBySpecNo)
    {
        $new = clone $this;
        $new->SortBySpecNo = $SortBySpecNo;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSortByClassification()
    {
        return $this->SortByClassification;
    }

    /**
     * @param bool $SortByClassification
     * @return MaterialGroupingInfoType
     */
    public function withSortByClassification($SortByClassification)
    {
        $new = clone $this;
        $new->SortByClassification = $SortByClassification;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PlacementTypeKeyType
     */
    public function getPlacementTypeKey()
    {
        return $this->PlacementTypeKey;
    }

    /**
     * @param \IMS\Security\Type\PlacementTypeKeyType $PlacementTypeKey
     * @return MaterialGroupingInfoType
     */
    public function withPlacementTypeKey($PlacementTypeKey)
    {
        $new = clone $this;
        $new->PlacementTypeKey = $PlacementTypeKey;

        return $new;
    }

    /**
     * @return int
     */
    public function getNonFloatPercentage()
    {
        return $this->NonFloatPercentage;
    }

    /**
     * @param int $NonFloatPercentage
     * @return MaterialGroupingInfoType
     */
    public function withNonFloatPercentage($NonFloatPercentage)
    {
        $new = clone $this;
        $new->NonFloatPercentage = $NonFloatPercentage;

        return $new;
    }

    /**
     * @return bool
     */
    public function getClosed()
    {
        return $this->Closed;
    }

    /**
     * @param bool $Closed
     * @return MaterialGroupingInfoType
     */
    public function withClosed($Closed)
    {
        $new = clone $this;
        $new->Closed = $Closed;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CapacityType
     */
    public function getCurrentStock()
    {
        return $this->CurrentStock;
    }

    /**
     * @param \IMS\Security\Type\CapacityType $CurrentStock
     * @return MaterialGroupingInfoType
     */
    public function withCurrentStock($CurrentStock)
    {
        $new = clone $this;
        $new->CurrentStock = $CurrentStock;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
        return $this->LastModifiedTime;
    }

    /**
     * @param \DateTime $LastModifiedTime
     * @return MaterialGroupingInfoType
     */
    public function withLastModifiedTime($LastModifiedTime)
    {
        $new = clone $this;
        $new->LastModifiedTime = $LastModifiedTime;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\UsernameType
     */
    public function getLastModifiedBy()
    {
        return $this->LastModifiedBy;
    }

    /**
     * @param \IMS\Security\Type\UsernameType $LastModifiedBy
     * @return MaterialGroupingInfoType
     */
    public function withLastModifiedBy($LastModifiedBy)
    {
        $new = clone $this;
        $new->LastModifiedBy = $LastModifiedBy;

        return $new;
    }


}

