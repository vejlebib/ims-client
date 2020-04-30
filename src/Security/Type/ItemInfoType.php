<?php

namespace IMS\Security\Type;

class ItemInfoType
{

    /**
     * @var \IMS\Security\Type\ItemKeyType
     */
    private $ItemKey = null;

    /**
     * @var \IMS\Security\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var \DateTime
     */
    private $TransactionTime = null;

    /**
     * @var \IMS\Security\Type\TitleType
     */
    private $Title = null;

    /**
     * @var \IMS\Security\Type\AuthorType
     */
    private $Author = null;

    /**
     * @var \IMS\Security\Type\PlacementInfoType
     */
    private $PlacementInfo = null;

    /**
     * @var \IMS\Security\Type\ClassificationType
     */
    private $Classification = null;

    /**
     * @var \IMS\Security\Type\BranchInfoType
     */
    private $CurrentBranch = null;

    /**
     * @var \IMS\Security\Type\ValueType
     */
    private $Destination = null;

    /**
     * @var \IMS\Security\Type\CapacityType
     */
    private $Width = null;

    /**
     * @var \IMS\Security\Type\RequisitionIdType
     */
    private $TakenForRequisitionId = null;

    /**
     * @var bool
     */
    private $FloatCodeLocked = null;

    /**
     * @var \IMS\Security\Type\FloatCodeSummaryType
     */
    private $FloatCode = null;

    /**
     * @var \IMS\Security\Type\DepartmentSummaryType
     */
    private $CurrentDepartment = null;

    /**
     * @var \IMS\Security\Type\IlsLocationSummaryType
     */
    private $CurrentIlsLocation = null;

    /**
     * @var \IMS\Security\Type\IlsSublocationSummaryType
     */
    private $CurrentIlsSublocation = null;

    /**
     * @var \IMS\Security\Type\CollectionSummaryType
     */
    private $CurrentCollection = null;

    /**
     * @var \IMS\Security\Type\MaterialTypeSummaryType
     */
    private $MaterialType = null;

    /**
     * @return \IMS\Security\Type\ItemKeyType
     */
    public function getItemKey()
    {
        return $this->ItemKey;
    }

    /**
     * @param \IMS\Security\Type\ItemKeyType $ItemKey
     * @return ItemInfoType
     */
    public function withItemKey($ItemKey)
    {
        $new = clone $this;
        $new->ItemKey = $ItemKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param \IMS\Security\Type\ItemIdType $ItemId
     * @return ItemInfoType
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getTransactionTime()
    {
        return $this->TransactionTime;
    }

    /**
     * @param \DateTime $TransactionTime
     * @return ItemInfoType
     */
    public function withTransactionTime($TransactionTime)
    {
        $new = clone $this;
        $new->TransactionTime = $TransactionTime;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\TitleType
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param \IMS\Security\Type\TitleType $Title
     * @return ItemInfoType
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\AuthorType
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * @param \IMS\Security\Type\AuthorType $Author
     * @return ItemInfoType
     */
    public function withAuthor($Author)
    {
        $new = clone $this;
        $new->Author = $Author;

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
     * @return ItemInfoType
     */
    public function withPlacementInfo($PlacementInfo)
    {
        $new = clone $this;
        $new->PlacementInfo = $PlacementInfo;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ClassificationType
     */
    public function getClassification()
    {
        return $this->Classification;
    }

    /**
     * @param \IMS\Security\Type\ClassificationType $Classification
     * @return ItemInfoType
     */
    public function withClassification($Classification)
    {
        $new = clone $this;
        $new->Classification = $Classification;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchInfoType
     */
    public function getCurrentBranch()
    {
        return $this->CurrentBranch;
    }

    /**
     * @param \IMS\Security\Type\BranchInfoType $CurrentBranch
     * @return ItemInfoType
     */
    public function withCurrentBranch($CurrentBranch)
    {
        $new = clone $this;
        $new->CurrentBranch = $CurrentBranch;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ValueType
     */
    public function getDestination()
    {
        return $this->Destination;
    }

    /**
     * @param \IMS\Security\Type\ValueType $Destination
     * @return ItemInfoType
     */
    public function withDestination($Destination)
    {
        $new = clone $this;
        $new->Destination = $Destination;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CapacityType
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param \IMS\Security\Type\CapacityType $Width
     * @return ItemInfoType
     */
    public function withWidth($Width)
    {
        $new = clone $this;
        $new->Width = $Width;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\RequisitionIdType
     */
    public function getTakenForRequisitionId()
    {
        return $this->TakenForRequisitionId;
    }

    /**
     * @param \IMS\Security\Type\RequisitionIdType $TakenForRequisitionId
     * @return ItemInfoType
     */
    public function withTakenForRequisitionId($TakenForRequisitionId)
    {
        $new = clone $this;
        $new->TakenForRequisitionId = $TakenForRequisitionId;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFloatCodeLocked()
    {
        return $this->FloatCodeLocked;
    }

    /**
     * @param bool $FloatCodeLocked
     * @return ItemInfoType
     */
    public function withFloatCodeLocked($FloatCodeLocked)
    {
        $new = clone $this;
        $new->FloatCodeLocked = $FloatCodeLocked;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\FloatCodeSummaryType
     */
    public function getFloatCode()
    {
        return $this->FloatCode;
    }

    /**
     * @param \IMS\Security\Type\FloatCodeSummaryType $FloatCode
     * @return ItemInfoType
     */
    public function withFloatCode($FloatCode)
    {
        $new = clone $this;
        $new->FloatCode = $FloatCode;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DepartmentSummaryType
     */
    public function getCurrentDepartment()
    {
        return $this->CurrentDepartment;
    }

    /**
     * @param \IMS\Security\Type\DepartmentSummaryType $CurrentDepartment
     * @return ItemInfoType
     */
    public function withCurrentDepartment($CurrentDepartment)
    {
        $new = clone $this;
        $new->CurrentDepartment = $CurrentDepartment;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsLocationSummaryType
     */
    public function getCurrentIlsLocation()
    {
        return $this->CurrentIlsLocation;
    }

    /**
     * @param \IMS\Security\Type\IlsLocationSummaryType $CurrentIlsLocation
     * @return ItemInfoType
     */
    public function withCurrentIlsLocation($CurrentIlsLocation)
    {
        $new = clone $this;
        $new->CurrentIlsLocation = $CurrentIlsLocation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsSublocationSummaryType
     */
    public function getCurrentIlsSublocation()
    {
        return $this->CurrentIlsSublocation;
    }

    /**
     * @param \IMS\Security\Type\IlsSublocationSummaryType $CurrentIlsSublocation
     * @return ItemInfoType
     */
    public function withCurrentIlsSublocation($CurrentIlsSublocation)
    {
        $new = clone $this;
        $new->CurrentIlsSublocation = $CurrentIlsSublocation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CollectionSummaryType
     */
    public function getCurrentCollection()
    {
        return $this->CurrentCollection;
    }

    /**
     * @param \IMS\Security\Type\CollectionSummaryType $CurrentCollection
     * @return ItemInfoType
     */
    public function withCurrentCollection($CurrentCollection)
    {
        $new = clone $this;
        $new->CurrentCollection = $CurrentCollection;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\MaterialTypeSummaryType
     */
    public function getMaterialType()
    {
        return $this->MaterialType;
    }

    /**
     * @param \IMS\Security\Type\MaterialTypeSummaryType $MaterialType
     * @return ItemInfoType
     */
    public function withMaterialType($MaterialType)
    {
        $new = clone $this;
        $new->MaterialType = $MaterialType;

        return $new;
    }


}

