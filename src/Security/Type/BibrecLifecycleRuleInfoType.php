<?php

namespace IMS\Security\Type;

class BibrecLifecycleRuleInfoType
{

    /**
     * @var \IMS\Security\Type\BibrecLifecycleRuleKeyType
     */
    private $BibrecLifecycleRuleKey = null;

    /**
     * @var int
     */
    private $Position = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Security\Type\CategoryInfoType
     */
    private $NewCategory = null;

    /**
     * @var bool
     */
    private $Reduce = null;

    /**
     * @var bool
     */
    private $Supplement = null;

    /**
     * @var \IMS\Security\Type\FloatCodeInfoType
     */
    private $FloatCode = null;

    /**
     * @var \IMS\Security\Type\BranchInfoType
     */
    private $FixedBranch = null;

    /**
     * @var \IMS\Security\Type\DepartmentTypeInfoType
     */
    private $DepartmentType = null;

    /**
     * @var \IMS\Security\Type\IlsLocationInfoType
     */
    private $IlsLocation = null;

    /**
     * @var \IMS\Security\Type\IlsSublocationInfoType
     */
    private $IlsSublocation = null;

    /**
     * @var \IMS\Security\Type\CollectionInfoType
     */
    private $Collection = null;

    /**
     * @var \IMS\Security\Type\MaterialTypeInfoType
     */
    private $MaterialType = null;

    /**
     * @var \IMS\Security\Type\ClassificationGroupInfoType
     */
    private $ClassificationGroup = null;

    /**
     * @var \IMS\Security\Type\ClassificationRangeType
     */
    private $ClassificationRangeStart = null;

    /**
     * @var \IMS\Security\Type\ClassificationRangeType
     */
    private $ClassificationRangeEnd = null;

    /**
     * @var int
     */
    private $MinAccessionAge = null;

    /**
     * @var int
     */
    private $MaxAccessionAge = null;

    /**
     * @var int
     */
    private $MinCurrentTotalItemCount = null;

    /**
     * @var int
     */
    private $MaxCurrentTotalItemCount = null;

    /**
     * @var int
     */
    private $MinCurrentFloatingItemCount = null;

    /**
     * @var int
     */
    private $MaxCurrentFloatingItemCount = null;

    /**
     * @var int
     */
    private $MinCurrentFixedItemCount = null;

    /**
     * @var int
     */
    private $MaxCurrentFixedItemCount = null;

    /**
     * @var int
     */
    private $MinCurrentLendableItemCount = null;

    /**
     * @var int
     */
    private $MaxCurrentLendableItemCount = null;

    /**
     * @var int
     */
    private $MinCurrentReservableItemCount = null;

    /**
     * @var int
     */
    private $MaxCurrentReservableItemCount = null;

    /**
     * @var int
     */
    private $MinCurrentCheckedoutItemCount = null;

    /**
     * @var int
     */
    private $MaxCurrentCheckedoutItemCount = null;

    /**
     * @var int
     */
    private $MinCurrentCheckedoutPct = null;

    /**
     * @var int
     */
    private $MaxCurrentCheckedoutPct = null;

    /**
     * @var int
     */
    private $MinAvgCheckedoutItemCount = null;

    /**
     * @var int
     */
    private $MaxAvgCheckedoutItemCount = null;

    /**
     * @var int
     */
    private $MinCorrCheckedoutPct = null;

    /**
     * @var int
     */
    private $MaxCorrCheckedoutPct = null;

    /**
     * @var int
     */
    private $MinCheckoutByRequisitionPct = null;

    /**
     * @var int
     */
    private $MaxCheckoutByRequisitionPct = null;

    /**
     * @return \IMS\Security\Type\BibrecLifecycleRuleKeyType
     */
    public function getBibrecLifecycleRuleKey()
    {
        return $this->BibrecLifecycleRuleKey;
    }

    /**
     * @param \IMS\Security\Type\BibrecLifecycleRuleKeyType $BibrecLifecycleRuleKey
     * @return BibrecLifecycleRuleInfoType
     */
    public function withBibrecLifecycleRuleKey($BibrecLifecycleRuleKey)
    {
        $new = clone $this;
        $new->BibrecLifecycleRuleKey = $BibrecLifecycleRuleKey;

        return $new;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * @param int $Position
     * @return BibrecLifecycleRuleInfoType
     */
    public function withPosition($Position)
    {
        $new = clone $this;
        $new->Position = $Position;

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
     * @return BibrecLifecycleRuleInfoType
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
     * @return BibrecLifecycleRuleInfoType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CategoryInfoType
     */
    public function getNewCategory()
    {
        return $this->NewCategory;
    }

    /**
     * @param \IMS\Security\Type\CategoryInfoType $NewCategory
     * @return BibrecLifecycleRuleInfoType
     */
    public function withNewCategory($NewCategory)
    {
        $new = clone $this;
        $new->NewCategory = $NewCategory;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReduce()
    {
        return $this->Reduce;
    }

    /**
     * @param bool $Reduce
     * @return BibrecLifecycleRuleInfoType
     */
    public function withReduce($Reduce)
    {
        $new = clone $this;
        $new->Reduce = $Reduce;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSupplement()
    {
        return $this->Supplement;
    }

    /**
     * @param bool $Supplement
     * @return BibrecLifecycleRuleInfoType
     */
    public function withSupplement($Supplement)
    {
        $new = clone $this;
        $new->Supplement = $Supplement;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\FloatCodeInfoType
     */
    public function getFloatCode()
    {
        return $this->FloatCode;
    }

    /**
     * @param \IMS\Security\Type\FloatCodeInfoType $FloatCode
     * @return BibrecLifecycleRuleInfoType
     */
    public function withFloatCode($FloatCode)
    {
        $new = clone $this;
        $new->FloatCode = $FloatCode;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchInfoType
     */
    public function getFixedBranch()
    {
        return $this->FixedBranch;
    }

    /**
     * @param \IMS\Security\Type\BranchInfoType $FixedBranch
     * @return BibrecLifecycleRuleInfoType
     */
    public function withFixedBranch($FixedBranch)
    {
        $new = clone $this;
        $new->FixedBranch = $FixedBranch;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DepartmentTypeInfoType
     */
    public function getDepartmentType()
    {
        return $this->DepartmentType;
    }

    /**
     * @param \IMS\Security\Type\DepartmentTypeInfoType $DepartmentType
     * @return BibrecLifecycleRuleInfoType
     */
    public function withDepartmentType($DepartmentType)
    {
        $new = clone $this;
        $new->DepartmentType = $DepartmentType;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsLocationInfoType
     */
    public function getIlsLocation()
    {
        return $this->IlsLocation;
    }

    /**
     * @param \IMS\Security\Type\IlsLocationInfoType $IlsLocation
     * @return BibrecLifecycleRuleInfoType
     */
    public function withIlsLocation($IlsLocation)
    {
        $new = clone $this;
        $new->IlsLocation = $IlsLocation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsSublocationInfoType
     */
    public function getIlsSublocation()
    {
        return $this->IlsSublocation;
    }

    /**
     * @param \IMS\Security\Type\IlsSublocationInfoType $IlsSublocation
     * @return BibrecLifecycleRuleInfoType
     */
    public function withIlsSublocation($IlsSublocation)
    {
        $new = clone $this;
        $new->IlsSublocation = $IlsSublocation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CollectionInfoType
     */
    public function getCollection()
    {
        return $this->Collection;
    }

    /**
     * @param \IMS\Security\Type\CollectionInfoType $Collection
     * @return BibrecLifecycleRuleInfoType
     */
    public function withCollection($Collection)
    {
        $new = clone $this;
        $new->Collection = $Collection;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\MaterialTypeInfoType
     */
    public function getMaterialType()
    {
        return $this->MaterialType;
    }

    /**
     * @param \IMS\Security\Type\MaterialTypeInfoType $MaterialType
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaterialType($MaterialType)
    {
        $new = clone $this;
        $new->MaterialType = $MaterialType;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ClassificationGroupInfoType
     */
    public function getClassificationGroup()
    {
        return $this->ClassificationGroup;
    }

    /**
     * @param \IMS\Security\Type\ClassificationGroupInfoType $ClassificationGroup
     * @return BibrecLifecycleRuleInfoType
     */
    public function withClassificationGroup($ClassificationGroup)
    {
        $new = clone $this;
        $new->ClassificationGroup = $ClassificationGroup;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ClassificationRangeType
     */
    public function getClassificationRangeStart()
    {
        return $this->ClassificationRangeStart;
    }

    /**
     * @param \IMS\Security\Type\ClassificationRangeType $ClassificationRangeStart
     * @return BibrecLifecycleRuleInfoType
     */
    public function withClassificationRangeStart($ClassificationRangeStart)
    {
        $new = clone $this;
        $new->ClassificationRangeStart = $ClassificationRangeStart;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ClassificationRangeType
     */
    public function getClassificationRangeEnd()
    {
        return $this->ClassificationRangeEnd;
    }

    /**
     * @param \IMS\Security\Type\ClassificationRangeType $ClassificationRangeEnd
     * @return BibrecLifecycleRuleInfoType
     */
    public function withClassificationRangeEnd($ClassificationRangeEnd)
    {
        $new = clone $this;
        $new->ClassificationRangeEnd = $ClassificationRangeEnd;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinAccessionAge()
    {
        return $this->MinAccessionAge;
    }

    /**
     * @param int $MinAccessionAge
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMinAccessionAge($MinAccessionAge)
    {
        $new = clone $this;
        $new->MinAccessionAge = $MinAccessionAge;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxAccessionAge()
    {
        return $this->MaxAccessionAge;
    }

    /**
     * @param int $MaxAccessionAge
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaxAccessionAge($MaxAccessionAge)
    {
        $new = clone $this;
        $new->MaxAccessionAge = $MaxAccessionAge;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinCurrentTotalItemCount()
    {
        return $this->MinCurrentTotalItemCount;
    }

    /**
     * @param int $MinCurrentTotalItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMinCurrentTotalItemCount($MinCurrentTotalItemCount)
    {
        $new = clone $this;
        $new->MinCurrentTotalItemCount = $MinCurrentTotalItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCurrentTotalItemCount()
    {
        return $this->MaxCurrentTotalItemCount;
    }

    /**
     * @param int $MaxCurrentTotalItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaxCurrentTotalItemCount($MaxCurrentTotalItemCount)
    {
        $new = clone $this;
        $new->MaxCurrentTotalItemCount = $MaxCurrentTotalItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinCurrentFloatingItemCount()
    {
        return $this->MinCurrentFloatingItemCount;
    }

    /**
     * @param int $MinCurrentFloatingItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMinCurrentFloatingItemCount($MinCurrentFloatingItemCount)
    {
        $new = clone $this;
        $new->MinCurrentFloatingItemCount = $MinCurrentFloatingItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCurrentFloatingItemCount()
    {
        return $this->MaxCurrentFloatingItemCount;
    }

    /**
     * @param int $MaxCurrentFloatingItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaxCurrentFloatingItemCount($MaxCurrentFloatingItemCount)
    {
        $new = clone $this;
        $new->MaxCurrentFloatingItemCount = $MaxCurrentFloatingItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinCurrentFixedItemCount()
    {
        return $this->MinCurrentFixedItemCount;
    }

    /**
     * @param int $MinCurrentFixedItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMinCurrentFixedItemCount($MinCurrentFixedItemCount)
    {
        $new = clone $this;
        $new->MinCurrentFixedItemCount = $MinCurrentFixedItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCurrentFixedItemCount()
    {
        return $this->MaxCurrentFixedItemCount;
    }

    /**
     * @param int $MaxCurrentFixedItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaxCurrentFixedItemCount($MaxCurrentFixedItemCount)
    {
        $new = clone $this;
        $new->MaxCurrentFixedItemCount = $MaxCurrentFixedItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinCurrentLendableItemCount()
    {
        return $this->MinCurrentLendableItemCount;
    }

    /**
     * @param int $MinCurrentLendableItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMinCurrentLendableItemCount($MinCurrentLendableItemCount)
    {
        $new = clone $this;
        $new->MinCurrentLendableItemCount = $MinCurrentLendableItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCurrentLendableItemCount()
    {
        return $this->MaxCurrentLendableItemCount;
    }

    /**
     * @param int $MaxCurrentLendableItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaxCurrentLendableItemCount($MaxCurrentLendableItemCount)
    {
        $new = clone $this;
        $new->MaxCurrentLendableItemCount = $MaxCurrentLendableItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinCurrentReservableItemCount()
    {
        return $this->MinCurrentReservableItemCount;
    }

    /**
     * @param int $MinCurrentReservableItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMinCurrentReservableItemCount($MinCurrentReservableItemCount)
    {
        $new = clone $this;
        $new->MinCurrentReservableItemCount = $MinCurrentReservableItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCurrentReservableItemCount()
    {
        return $this->MaxCurrentReservableItemCount;
    }

    /**
     * @param int $MaxCurrentReservableItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaxCurrentReservableItemCount($MaxCurrentReservableItemCount)
    {
        $new = clone $this;
        $new->MaxCurrentReservableItemCount = $MaxCurrentReservableItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinCurrentCheckedoutItemCount()
    {
        return $this->MinCurrentCheckedoutItemCount;
    }

    /**
     * @param int $MinCurrentCheckedoutItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMinCurrentCheckedoutItemCount($MinCurrentCheckedoutItemCount)
    {
        $new = clone $this;
        $new->MinCurrentCheckedoutItemCount = $MinCurrentCheckedoutItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCurrentCheckedoutItemCount()
    {
        return $this->MaxCurrentCheckedoutItemCount;
    }

    /**
     * @param int $MaxCurrentCheckedoutItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaxCurrentCheckedoutItemCount($MaxCurrentCheckedoutItemCount)
    {
        $new = clone $this;
        $new->MaxCurrentCheckedoutItemCount = $MaxCurrentCheckedoutItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinCurrentCheckedoutPct()
    {
        return $this->MinCurrentCheckedoutPct;
    }

    /**
     * @param int $MinCurrentCheckedoutPct
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMinCurrentCheckedoutPct($MinCurrentCheckedoutPct)
    {
        $new = clone $this;
        $new->MinCurrentCheckedoutPct = $MinCurrentCheckedoutPct;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCurrentCheckedoutPct()
    {
        return $this->MaxCurrentCheckedoutPct;
    }

    /**
     * @param int $MaxCurrentCheckedoutPct
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaxCurrentCheckedoutPct($MaxCurrentCheckedoutPct)
    {
        $new = clone $this;
        $new->MaxCurrentCheckedoutPct = $MaxCurrentCheckedoutPct;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinAvgCheckedoutItemCount()
    {
        return $this->MinAvgCheckedoutItemCount;
    }

    /**
     * @param int $MinAvgCheckedoutItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMinAvgCheckedoutItemCount($MinAvgCheckedoutItemCount)
    {
        $new = clone $this;
        $new->MinAvgCheckedoutItemCount = $MinAvgCheckedoutItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxAvgCheckedoutItemCount()
    {
        return $this->MaxAvgCheckedoutItemCount;
    }

    /**
     * @param int $MaxAvgCheckedoutItemCount
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaxAvgCheckedoutItemCount($MaxAvgCheckedoutItemCount)
    {
        $new = clone $this;
        $new->MaxAvgCheckedoutItemCount = $MaxAvgCheckedoutItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinCorrCheckedoutPct()
    {
        return $this->MinCorrCheckedoutPct;
    }

    /**
     * @param int $MinCorrCheckedoutPct
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMinCorrCheckedoutPct($MinCorrCheckedoutPct)
    {
        $new = clone $this;
        $new->MinCorrCheckedoutPct = $MinCorrCheckedoutPct;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCorrCheckedoutPct()
    {
        return $this->MaxCorrCheckedoutPct;
    }

    /**
     * @param int $MaxCorrCheckedoutPct
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaxCorrCheckedoutPct($MaxCorrCheckedoutPct)
    {
        $new = clone $this;
        $new->MaxCorrCheckedoutPct = $MaxCorrCheckedoutPct;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinCheckoutByRequisitionPct()
    {
        return $this->MinCheckoutByRequisitionPct;
    }

    /**
     * @param int $MinCheckoutByRequisitionPct
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMinCheckoutByRequisitionPct($MinCheckoutByRequisitionPct)
    {
        $new = clone $this;
        $new->MinCheckoutByRequisitionPct = $MinCheckoutByRequisitionPct;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxCheckoutByRequisitionPct()
    {
        return $this->MaxCheckoutByRequisitionPct;
    }

    /**
     * @param int $MaxCheckoutByRequisitionPct
     * @return BibrecLifecycleRuleInfoType
     */
    public function withMaxCheckoutByRequisitionPct($MaxCheckoutByRequisitionPct)
    {
        $new = clone $this;
        $new->MaxCheckoutByRequisitionPct = $MaxCheckoutByRequisitionPct;

        return $new;
    }


}

