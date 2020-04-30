<?php

namespace IMS\Security\Type;

class ExtendedItemInfoType
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
     * @var \IMS\Security\Type\ExtendedBibliographicRecordInfoType
     */
    private $BibliographicRecord = null;

    /**
     * @var bool
     */
    private $IsInPlace = null;

    /**
     * @var \IMS\Security\Type\PlacementTextType
     */
    private $PlacementText = null;

    /**
     * @var \IMS\Security\Type\BranchInfoType
     */
    private $CurrentBranch = null;

    /**
     * @var \IMS\Security\Type\SimpleLocationInfoType
     */
    private $CurrentLocation = null;

    /**
     * @var \IMS\Security\Type\TransportUnitInfoType
     */
    private $CurrentTransportUnit = null;

    /**
     * @var \IMS\Security\Type\SimpleMaterialGroupingInfoType
     */
    private $CurrentMaterialGrouping = null;

    /**
     * @var \IMS\Security\Type\FloatCodeInfoType
     */
    private $FloatCode = null;

    /**
     * @var \IMS\Security\Type\BranchInfoType
     */
    private $FixedBranch = null;

    /**
     * @var \IMS\Security\Type\DepartmentInfoType
     */
    private $CurrentDepartment = null;

    /**
     * @var \IMS\Security\Type\DepartmentInfoType
     */
    private $FixedDepartment = null;

    /**
     * @var \IMS\Security\Type\IlsLocationInfoType
     */
    private $CurrentIlsLocation = null;

    /**
     * @var \IMS\Security\Type\IlsLocationInfoType
     */
    private $FixedIlsLocation = null;

    /**
     * @var \IMS\Security\Type\IlsSublocationInfoType
     */
    private $CurrentIlsSublocation = null;

    /**
     * @var \IMS\Security\Type\IlsSublocationInfoType
     */
    private $FixedIlsSublocation = null;

    /**
     * @var \IMS\Security\Type\CollectionInfoType
     */
    private $CurrentCollection = null;

    /**
     * @var \IMS\Security\Type\CollectionInfoType
     */
    private $FixedCollection = null;

    /**
     * @var \IMS\Security\Type\IlsStatusType
     */
    private $IlsStatus = null;

    /**
     * @var \DateTime
     */
    private $AccessionDate = null;

    /**
     * @var \IMS\Security\Type\DiscardReasonInfoType
     */
    private $DiscardReason = null;

    /**
     * @var \IMS\Security\Type\PeriodicalInfoType
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
     * @var \IMS\Security\Type\AssignmentInfoType
     */
    private $Assignment = null;

    /**
     * @var \IMS\Security\Type\CapacityType
     */
    private $Width = null;

    /**
     * @var \IMS\Security\Type\RequisitionInfoType
     */
    private $TakenForRequisition = null;

    /**
     * @var bool
     */
    private $FloatCodeLocked = null;

    /**
     * @return \IMS\Security\Type\ItemKeyType
     */
    public function getItemKey()
    {
        return $this->ItemKey;
    }

    /**
     * @param \IMS\Security\Type\ItemKeyType $ItemKey
     * @return ExtendedItemInfoType
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
     * @return ExtendedItemInfoType
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ExtendedBibliographicRecordInfoType
     */
    public function getBibliographicRecord()
    {
        return $this->BibliographicRecord;
    }

    /**
     * @param \IMS\Security\Type\ExtendedBibliographicRecordInfoType
     * $BibliographicRecord
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
     * @return \IMS\Security\Type\PlacementTextType
     */
    public function getPlacementText()
    {
        return $this->PlacementText;
    }

    /**
     * @param \IMS\Security\Type\PlacementTextType $PlacementText
     * @return ExtendedItemInfoType
     */
    public function withPlacementText($PlacementText)
    {
        $new = clone $this;
        $new->PlacementText = $PlacementText;

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
     * @return ExtendedItemInfoType
     */
    public function withCurrentBranch($CurrentBranch)
    {
        $new = clone $this;
        $new->CurrentBranch = $CurrentBranch;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SimpleLocationInfoType
     */
    public function getCurrentLocation()
    {
        return $this->CurrentLocation;
    }

    /**
     * @param \IMS\Security\Type\SimpleLocationInfoType $CurrentLocation
     * @return ExtendedItemInfoType
     */
    public function withCurrentLocation($CurrentLocation)
    {
        $new = clone $this;
        $new->CurrentLocation = $CurrentLocation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\TransportUnitInfoType
     */
    public function getCurrentTransportUnit()
    {
        return $this->CurrentTransportUnit;
    }

    /**
     * @param \IMS\Security\Type\TransportUnitInfoType $CurrentTransportUnit
     * @return ExtendedItemInfoType
     */
    public function withCurrentTransportUnit($CurrentTransportUnit)
    {
        $new = clone $this;
        $new->CurrentTransportUnit = $CurrentTransportUnit;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SimpleMaterialGroupingInfoType
     */
    public function getCurrentMaterialGrouping()
    {
        return $this->CurrentMaterialGrouping;
    }

    /**
     * @param \IMS\Security\Type\SimpleMaterialGroupingInfoType
     * $CurrentMaterialGrouping
     * @return ExtendedItemInfoType
     */
    public function withCurrentMaterialGrouping($CurrentMaterialGrouping)
    {
        $new = clone $this;
        $new->CurrentMaterialGrouping = $CurrentMaterialGrouping;

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
     * @return ExtendedItemInfoType
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
     * @return ExtendedItemInfoType
     */
    public function withFixedBranch($FixedBranch)
    {
        $new = clone $this;
        $new->FixedBranch = $FixedBranch;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DepartmentInfoType
     */
    public function getCurrentDepartment()
    {
        return $this->CurrentDepartment;
    }

    /**
     * @param \IMS\Security\Type\DepartmentInfoType $CurrentDepartment
     * @return ExtendedItemInfoType
     */
    public function withCurrentDepartment($CurrentDepartment)
    {
        $new = clone $this;
        $new->CurrentDepartment = $CurrentDepartment;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DepartmentInfoType
     */
    public function getFixedDepartment()
    {
        return $this->FixedDepartment;
    }

    /**
     * @param \IMS\Security\Type\DepartmentInfoType $FixedDepartment
     * @return ExtendedItemInfoType
     */
    public function withFixedDepartment($FixedDepartment)
    {
        $new = clone $this;
        $new->FixedDepartment = $FixedDepartment;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsLocationInfoType
     */
    public function getCurrentIlsLocation()
    {
        return $this->CurrentIlsLocation;
    }

    /**
     * @param \IMS\Security\Type\IlsLocationInfoType $CurrentIlsLocation
     * @return ExtendedItemInfoType
     */
    public function withCurrentIlsLocation($CurrentIlsLocation)
    {
        $new = clone $this;
        $new->CurrentIlsLocation = $CurrentIlsLocation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsLocationInfoType
     */
    public function getFixedIlsLocation()
    {
        return $this->FixedIlsLocation;
    }

    /**
     * @param \IMS\Security\Type\IlsLocationInfoType $FixedIlsLocation
     * @return ExtendedItemInfoType
     */
    public function withFixedIlsLocation($FixedIlsLocation)
    {
        $new = clone $this;
        $new->FixedIlsLocation = $FixedIlsLocation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsSublocationInfoType
     */
    public function getCurrentIlsSublocation()
    {
        return $this->CurrentIlsSublocation;
    }

    /**
     * @param \IMS\Security\Type\IlsSublocationInfoType $CurrentIlsSublocation
     * @return ExtendedItemInfoType
     */
    public function withCurrentIlsSublocation($CurrentIlsSublocation)
    {
        $new = clone $this;
        $new->CurrentIlsSublocation = $CurrentIlsSublocation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsSublocationInfoType
     */
    public function getFixedIlsSublocation()
    {
        return $this->FixedIlsSublocation;
    }

    /**
     * @param \IMS\Security\Type\IlsSublocationInfoType $FixedIlsSublocation
     * @return ExtendedItemInfoType
     */
    public function withFixedIlsSublocation($FixedIlsSublocation)
    {
        $new = clone $this;
        $new->FixedIlsSublocation = $FixedIlsSublocation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CollectionInfoType
     */
    public function getCurrentCollection()
    {
        return $this->CurrentCollection;
    }

    /**
     * @param \IMS\Security\Type\CollectionInfoType $CurrentCollection
     * @return ExtendedItemInfoType
     */
    public function withCurrentCollection($CurrentCollection)
    {
        $new = clone $this;
        $new->CurrentCollection = $CurrentCollection;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CollectionInfoType
     */
    public function getFixedCollection()
    {
        return $this->FixedCollection;
    }

    /**
     * @param \IMS\Security\Type\CollectionInfoType $FixedCollection
     * @return ExtendedItemInfoType
     */
    public function withFixedCollection($FixedCollection)
    {
        $new = clone $this;
        $new->FixedCollection = $FixedCollection;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsStatusType
     */
    public function getIlsStatus()
    {
        return $this->IlsStatus;
    }

    /**
     * @param \IMS\Security\Type\IlsStatusType $IlsStatus
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
     * @return \IMS\Security\Type\DiscardReasonInfoType
     */
    public function getDiscardReason()
    {
        return $this->DiscardReason;
    }

    /**
     * @param \IMS\Security\Type\DiscardReasonInfoType $DiscardReason
     * @return ExtendedItemInfoType
     */
    public function withDiscardReason($DiscardReason)
    {
        $new = clone $this;
        $new->DiscardReason = $DiscardReason;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PeriodicalInfoType
     */
    public function getPeriodical()
    {
        return $this->Periodical;
    }

    /**
     * @param \IMS\Security\Type\PeriodicalInfoType $Periodical
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
     * @return \IMS\Security\Type\AssignmentInfoType
     */
    public function getAssignment()
    {
        return $this->Assignment;
    }

    /**
     * @param \IMS\Security\Type\AssignmentInfoType $Assignment
     * @return ExtendedItemInfoType
     */
    public function withAssignment($Assignment)
    {
        $new = clone $this;
        $new->Assignment = $Assignment;

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
     * @return ExtendedItemInfoType
     */
    public function withWidth($Width)
    {
        $new = clone $this;
        $new->Width = $Width;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\RequisitionInfoType
     */
    public function getTakenForRequisition()
    {
        return $this->TakenForRequisition;
    }

    /**
     * @param \IMS\Security\Type\RequisitionInfoType $TakenForRequisition
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

