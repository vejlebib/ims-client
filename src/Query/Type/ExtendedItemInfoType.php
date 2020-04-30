<?php

namespace IMS\Query\Type;

class ExtendedItemInfoType
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
     * @var \IMS\Query\Type\ExtendedBibliographicRecordInfoType
     */
    private $BibliographicRecord = null;

    /**
     * @var bool
     */
    private $IsInPlace = null;

    /**
     * @var \IMS\Query\Type\PlacementTextType
     */
    private $PlacementText = null;

    /**
     * @var \IMS\Query\Type\BranchInfoType
     */
    private $CurrentBranch = null;

    /**
     * @var \IMS\Query\Type\SimpleLocationInfoType
     */
    private $CurrentLocation = null;

    /**
     * @var \IMS\Query\Type\TransportUnitInfoType
     */
    private $CurrentTransportUnit = null;

    /**
     * @var \IMS\Query\Type\SimpleMaterialGroupingInfoType
     */
    private $CurrentMaterialGrouping = null;

    /**
     * @var \IMS\Query\Type\FloatCodeInfoType
     */
    private $FloatCode = null;

    /**
     * @var \IMS\Query\Type\BranchInfoType
     */
    private $FixedBranch = null;

    /**
     * @var \IMS\Query\Type\DepartmentInfoType
     */
    private $CurrentDepartment = null;

    /**
     * @var \IMS\Query\Type\DepartmentInfoType
     */
    private $FixedDepartment = null;

    /**
     * @var \IMS\Query\Type\IlsLocationInfoType
     */
    private $CurrentIlsLocation = null;

    /**
     * @var \IMS\Query\Type\IlsLocationInfoType
     */
    private $FixedIlsLocation = null;

    /**
     * @var \IMS\Query\Type\IlsSublocationInfoType
     */
    private $CurrentIlsSublocation = null;

    /**
     * @var \IMS\Query\Type\IlsSublocationInfoType
     */
    private $FixedIlsSublocation = null;

    /**
     * @var \IMS\Query\Type\CollectionInfoType
     */
    private $CurrentCollection = null;

    /**
     * @var \IMS\Query\Type\CollectionInfoType
     */
    private $FixedCollection = null;

    /**
     * @var \IMS\Query\Type\IlsStatusType
     */
    private $IlsStatus = null;

    /**
     * @var \DateTime
     */
    private $AccessionDate = null;

    /**
     * @var \IMS\Query\Type\DiscardReasonInfoType
     */
    private $DiscardReason = null;

    /**
     * @var \IMS\Query\Type\PeriodicalInfoType
     */
    private $Periodical = null;

    /**
     * @var bool
     */
    private $InterLibrary = null;

    /**
     * @var bool
     */
    private $AvailabilityInIls = null;

    /**
     * @var \IMS\Query\Type\AssignmentInfoType
     */
    private $Assignment = null;

    /**
     * @var \IMS\Query\Type\CapacityType
     */
    private $Width = null;

    /**
     * @var \IMS\Query\Type\RequisitionInfoType
     */
    private $TakenForRequisition = null;

    /**
     * @var bool
     */
    private $FloatCodeLocked = null;

    /**
     * @return \IMS\Query\Type\ItemKeyType
     */
    public function getItemKey()
    {
        return $this->ItemKey;
    }

    /**
     * @param \IMS\Query\Type\ItemKeyType $ItemKey
     * @return ExtendedItemInfoType
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
     * @return ExtendedItemInfoType
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ExtendedBibliographicRecordInfoType
     */
    public function getBibliographicRecord()
    {
        return $this->BibliographicRecord;
    }

    /**
     * @param \IMS\Query\Type\ExtendedBibliographicRecordInfoType $BibliographicRecord
     * @return ExtendedItemInfoType
     */
    public function withBibliographicRecord($BibliographicRecord)
    {
        $new = clone $this;
        $new->BibliographicRecord = $BibliographicRecord;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsInPlace()
    {
        return $this->IsInPlace;
    }

    /**
     * @param bool $IsInPlace
     * @return ExtendedItemInfoType
     */
    public function withIsInPlace($IsInPlace)
    {
        $new = clone $this;
        $new->IsInPlace = $IsInPlace;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PlacementTextType
     */
    public function getPlacementText()
    {
        return $this->PlacementText;
    }

    /**
     * @param \IMS\Query\Type\PlacementTextType $PlacementText
     * @return ExtendedItemInfoType
     */
    public function withPlacementText($PlacementText)
    {
        $new = clone $this;
        $new->PlacementText = $PlacementText;

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
     * @return ExtendedItemInfoType
     */
    public function withCurrentBranch($CurrentBranch)
    {
        $new = clone $this;
        $new->CurrentBranch = $CurrentBranch;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SimpleLocationInfoType
     */
    public function getCurrentLocation()
    {
        return $this->CurrentLocation;
    }

    /**
     * @param \IMS\Query\Type\SimpleLocationInfoType $CurrentLocation
     * @return ExtendedItemInfoType
     */
    public function withCurrentLocation($CurrentLocation)
    {
        $new = clone $this;
        $new->CurrentLocation = $CurrentLocation;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\TransportUnitInfoType
     */
    public function getCurrentTransportUnit()
    {
        return $this->CurrentTransportUnit;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitInfoType $CurrentTransportUnit
     * @return ExtendedItemInfoType
     */
    public function withCurrentTransportUnit($CurrentTransportUnit)
    {
        $new = clone $this;
        $new->CurrentTransportUnit = $CurrentTransportUnit;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SimpleMaterialGroupingInfoType
     */
    public function getCurrentMaterialGrouping()
    {
        return $this->CurrentMaterialGrouping;
    }

    /**
     * @param \IMS\Query\Type\SimpleMaterialGroupingInfoType $CurrentMaterialGrouping
     * @return ExtendedItemInfoType
     */
    public function withCurrentMaterialGrouping($CurrentMaterialGrouping)
    {
        $new = clone $this;
        $new->CurrentMaterialGrouping = $CurrentMaterialGrouping;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\FloatCodeInfoType
     */
    public function getFloatCode()
    {
        return $this->FloatCode;
    }

    /**
     * @param \IMS\Query\Type\FloatCodeInfoType $FloatCode
     * @return ExtendedItemInfoType
     */
    public function withFloatCode($FloatCode)
    {
        $new = clone $this;
        $new->FloatCode = $FloatCode;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchInfoType
     */
    public function getFixedBranch()
    {
        return $this->FixedBranch;
    }

    /**
     * @param \IMS\Query\Type\BranchInfoType $FixedBranch
     * @return ExtendedItemInfoType
     */
    public function withFixedBranch($FixedBranch)
    {
        $new = clone $this;
        $new->FixedBranch = $FixedBranch;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DepartmentInfoType
     */
    public function getCurrentDepartment()
    {
        return $this->CurrentDepartment;
    }

    /**
     * @param \IMS\Query\Type\DepartmentInfoType $CurrentDepartment
     * @return ExtendedItemInfoType
     */
    public function withCurrentDepartment($CurrentDepartment)
    {
        $new = clone $this;
        $new->CurrentDepartment = $CurrentDepartment;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DepartmentInfoType
     */
    public function getFixedDepartment()
    {
        return $this->FixedDepartment;
    }

    /**
     * @param \IMS\Query\Type\DepartmentInfoType $FixedDepartment
     * @return ExtendedItemInfoType
     */
    public function withFixedDepartment($FixedDepartment)
    {
        $new = clone $this;
        $new->FixedDepartment = $FixedDepartment;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsLocationInfoType
     */
    public function getCurrentIlsLocation()
    {
        return $this->CurrentIlsLocation;
    }

    /**
     * @param \IMS\Query\Type\IlsLocationInfoType $CurrentIlsLocation
     * @return ExtendedItemInfoType
     */
    public function withCurrentIlsLocation($CurrentIlsLocation)
    {
        $new = clone $this;
        $new->CurrentIlsLocation = $CurrentIlsLocation;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsLocationInfoType
     */
    public function getFixedIlsLocation()
    {
        return $this->FixedIlsLocation;
    }

    /**
     * @param \IMS\Query\Type\IlsLocationInfoType $FixedIlsLocation
     * @return ExtendedItemInfoType
     */
    public function withFixedIlsLocation($FixedIlsLocation)
    {
        $new = clone $this;
        $new->FixedIlsLocation = $FixedIlsLocation;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsSublocationInfoType
     */
    public function getCurrentIlsSublocation()
    {
        return $this->CurrentIlsSublocation;
    }

    /**
     * @param \IMS\Query\Type\IlsSublocationInfoType $CurrentIlsSublocation
     * @return ExtendedItemInfoType
     */
    public function withCurrentIlsSublocation($CurrentIlsSublocation)
    {
        $new = clone $this;
        $new->CurrentIlsSublocation = $CurrentIlsSublocation;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsSublocationInfoType
     */
    public function getFixedIlsSublocation()
    {
        return $this->FixedIlsSublocation;
    }

    /**
     * @param \IMS\Query\Type\IlsSublocationInfoType $FixedIlsSublocation
     * @return ExtendedItemInfoType
     */
    public function withFixedIlsSublocation($FixedIlsSublocation)
    {
        $new = clone $this;
        $new->FixedIlsSublocation = $FixedIlsSublocation;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CollectionInfoType
     */
    public function getCurrentCollection()
    {
        return $this->CurrentCollection;
    }

    /**
     * @param \IMS\Query\Type\CollectionInfoType $CurrentCollection
     * @return ExtendedItemInfoType
     */
    public function withCurrentCollection($CurrentCollection)
    {
        $new = clone $this;
        $new->CurrentCollection = $CurrentCollection;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CollectionInfoType
     */
    public function getFixedCollection()
    {
        return $this->FixedCollection;
    }

    /**
     * @param \IMS\Query\Type\CollectionInfoType $FixedCollection
     * @return ExtendedItemInfoType
     */
    public function withFixedCollection($FixedCollection)
    {
        $new = clone $this;
        $new->FixedCollection = $FixedCollection;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsStatusType
     */
    public function getIlsStatus()
    {
        return $this->IlsStatus;
    }

    /**
     * @param \IMS\Query\Type\IlsStatusType $IlsStatus
     * @return ExtendedItemInfoType
     */
    public function withIlsStatus($IlsStatus)
    {
        $new = clone $this;
        $new->IlsStatus = $IlsStatus;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getAccessionDate()
    {
        return $this->AccessionDate;
    }

    /**
     * @param \DateTime $AccessionDate
     * @return ExtendedItemInfoType
     */
    public function withAccessionDate($AccessionDate)
    {
        $new = clone $this;
        $new->AccessionDate = $AccessionDate;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DiscardReasonInfoType
     */
    public function getDiscardReason()
    {
        return $this->DiscardReason;
    }

    /**
     * @param \IMS\Query\Type\DiscardReasonInfoType $DiscardReason
     * @return ExtendedItemInfoType
     */
    public function withDiscardReason($DiscardReason)
    {
        $new = clone $this;
        $new->DiscardReason = $DiscardReason;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PeriodicalInfoType
     */
    public function getPeriodical()
    {
        return $this->Periodical;
    }

    /**
     * @param \IMS\Query\Type\PeriodicalInfoType $Periodical
     * @return ExtendedItemInfoType
     */
    public function withPeriodical($Periodical)
    {
        $new = clone $this;
        $new->Periodical = $Periodical;

        return $new;
    }

    /**
     * @return bool
     */
    public function getInterLibrary()
    {
        return $this->InterLibrary;
    }

    /**
     * @param bool $InterLibrary
     * @return ExtendedItemInfoType
     */
    public function withInterLibrary($InterLibrary)
    {
        $new = clone $this;
        $new->InterLibrary = $InterLibrary;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAvailabilityInIls()
    {
        return $this->AvailabilityInIls;
    }

    /**
     * @param bool $AvailabilityInIls
     * @return ExtendedItemInfoType
     */
    public function withAvailabilityInIls($AvailabilityInIls)
    {
        $new = clone $this;
        $new->AvailabilityInIls = $AvailabilityInIls;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\AssignmentInfoType
     */
    public function getAssignment()
    {
        return $this->Assignment;
    }

    /**
     * @param \IMS\Query\Type\AssignmentInfoType $Assignment
     * @return ExtendedItemInfoType
     */
    public function withAssignment($Assignment)
    {
        $new = clone $this;
        $new->Assignment = $Assignment;

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
     * @return ExtendedItemInfoType
     */
    public function withWidth($Width)
    {
        $new = clone $this;
        $new->Width = $Width;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RequisitionInfoType
     */
    public function getTakenForRequisition()
    {
        return $this->TakenForRequisition;
    }

    /**
     * @param \IMS\Query\Type\RequisitionInfoType $TakenForRequisition
     * @return ExtendedItemInfoType
     */
    public function withTakenForRequisition($TakenForRequisition)
    {
        $new = clone $this;
        $new->TakenForRequisition = $TakenForRequisition;

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
     * @return ExtendedItemInfoType
     */
    public function withFloatCodeLocked($FloatCodeLocked)
    {
        $new = clone $this;
        $new->FloatCodeLocked = $FloatCodeLocked;

        return $new;
    }


}

