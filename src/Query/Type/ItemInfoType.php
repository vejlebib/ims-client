<?php

namespace IMS\Query\Type;

class ItemInfoType
{

    /**
     * @var \IMS\Query\Type\ItemKeyType
     */
    private $ItemKey = null;

    /**
     * @var \IMS\Query\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var \DateTime
     */
    private $TransactionTime = null;

    /**
     * @var \IMS\Query\Type\TitleType
     */
    private $Title = null;

    /**
     * @var \IMS\Query\Type\AuthorType
     */
    private $Author = null;

    /**
     * @var \IMS\Query\Type\PlacementInfoType
     */
    private $PlacementInfo = null;

    /**
     * @var \IMS\Query\Type\ClassificationType
     */
    private $Classification = null;

    /**
     * @var \IMS\Query\Type\BranchInfoType
     */
    private $CurrentBranch = null;

    /**
     * @var \IMS\Query\Type\ValueType
     */
    private $Destination = null;

    /**
     * @var \IMS\Query\Type\CapacityType
     */
    private $Width = null;

    /**
     * @var \IMS\Query\Type\RequisitionIdType
     */
    private $TakenForRequisitionId = null;

    /**
     * @var bool
     */
    private $FloatCodeLocked = null;

    /**
     * @var \IMS\Query\Type\FloatCodeSummaryType
     */
    private $FloatCode = null;

    /**
     * @var \IMS\Query\Type\DepartmentSummaryType
     */
    private $CurrentDepartment = null;

    /**
     * @var \IMS\Query\Type\IlsLocationSummaryType
     */
    private $CurrentIlsLocation = null;

    /**
     * @var \IMS\Query\Type\IlsSublocationSummaryType
     */
    private $CurrentIlsSublocation = null;

    /**
     * @var \IMS\Query\Type\CollectionSummaryType
     */
    private $CurrentCollection = null;

    /**
     * @var \IMS\Query\Type\MaterialTypeSummaryType
     */
    private $MaterialType = null;

    /**
     * @return \IMS\Query\Type\ItemKeyType
     */
    public function getItemKey()
    {
        return $this->ItemKey;
    }

    /**
     * @param \IMS\Query\Type\ItemKeyType $ItemKey
     * @return ItemInfoType
     */
    public function withItemKey($ItemKey)
    {
        $new = clone $this;
        $new->ItemKey = $ItemKey;

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
     * @return \IMS\Query\Type\TitleType
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param \IMS\Query\Type\TitleType $Title
     * @return ItemInfoType
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\AuthorType
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * @param \IMS\Query\Type\AuthorType $Author
     * @return ItemInfoType
     */
    public function withAuthor($Author)
    {
        $new = clone $this;
        $new->Author = $Author;

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
     * @return ItemInfoType
     */
    public function withPlacementInfo($PlacementInfo)
    {
        $new = clone $this;
        $new->PlacementInfo = $PlacementInfo;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ClassificationType
     */
    public function getClassification()
    {
        return $this->Classification;
    }

    /**
     * @param \IMS\Query\Type\ClassificationType $Classification
     * @return ItemInfoType
     */
    public function withClassification($Classification)
    {
        $new = clone $this;
        $new->Classification = $Classification;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchInfoType
     */
    public function getCurrentBranch()
    {
        return $this->CurrentBranch;
    }

    /**
     * @param \IMS\Query\Type\BranchInfoType $CurrentBranch
     * @return ItemInfoType
     */
    public function withCurrentBranch($CurrentBranch)
    {
        $new = clone $this;
        $new->CurrentBranch = $CurrentBranch;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ValueType
     */
    public function getDestination()
    {
        return $this->Destination;
    }

    /**
     * @param \IMS\Query\Type\ValueType $Destination
     * @return ItemInfoType
     */
    public function withDestination($Destination)
    {
        $new = clone $this;
        $new->Destination = $Destination;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CapacityType
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param \IMS\Query\Type\CapacityType $Width
     * @return ItemInfoType
     */
    public function withWidth($Width)
    {
        $new = clone $this;
        $new->Width = $Width;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RequisitionIdType
     */
    public function getTakenForRequisitionId()
    {
        return $this->TakenForRequisitionId;
    }

    /**
     * @param \IMS\Query\Type\RequisitionIdType $TakenForRequisitionId
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
     * @return \IMS\Query\Type\FloatCodeSummaryType
     */
    public function getFloatCode()
    {
        return $this->FloatCode;
    }

    /**
     * @param \IMS\Query\Type\FloatCodeSummaryType $FloatCode
     * @return ItemInfoType
     */
    public function withFloatCode($FloatCode)
    {
        $new = clone $this;
        $new->FloatCode = $FloatCode;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DepartmentSummaryType
     */
    public function getCurrentDepartment()
    {
        return $this->CurrentDepartment;
    }

    /**
     * @param \IMS\Query\Type\DepartmentSummaryType $CurrentDepartment
     * @return ItemInfoType
     */
    public function withCurrentDepartment($CurrentDepartment)
    {
        $new = clone $this;
        $new->CurrentDepartment = $CurrentDepartment;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsLocationSummaryType
     */
    public function getCurrentIlsLocation()
    {
        return $this->CurrentIlsLocation;
    }

    /**
     * @param \IMS\Query\Type\IlsLocationSummaryType $CurrentIlsLocation
     * @return ItemInfoType
     */
    public function withCurrentIlsLocation($CurrentIlsLocation)
    {
        $new = clone $this;
        $new->CurrentIlsLocation = $CurrentIlsLocation;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsSublocationSummaryType
     */
    public function getCurrentIlsSublocation()
    {
        return $this->CurrentIlsSublocation;
    }

    /**
     * @param \IMS\Query\Type\IlsSublocationSummaryType $CurrentIlsSublocation
     * @return ItemInfoType
     */
    public function withCurrentIlsSublocation($CurrentIlsSublocation)
    {
        $new = clone $this;
        $new->CurrentIlsSublocation = $CurrentIlsSublocation;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CollectionSummaryType
     */
    public function getCurrentCollection()
    {
        return $this->CurrentCollection;
    }

    /**
     * @param \IMS\Query\Type\CollectionSummaryType $CurrentCollection
     * @return ItemInfoType
     */
    public function withCurrentCollection($CurrentCollection)
    {
        $new = clone $this;
        $new->CurrentCollection = $CurrentCollection;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialTypeSummaryType
     */
    public function getMaterialType()
    {
        return $this->MaterialType;
    }

    /**
     * @param \IMS\Query\Type\MaterialTypeSummaryType $MaterialType
     * @return ItemInfoType
     */
    public function withMaterialType($MaterialType)
    {
        $new = clone $this;
        $new->MaterialType = $MaterialType;

        return $new;
    }


}

