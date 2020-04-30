<?php

namespace IMS\Security\Type;

class RequisitionHistoryEntryType
{

    /**
     * @var \IMS\Security\Type\RequisitionIdType
     */
    private $RequisitionId = null;

    /**
     * @var \DateTime
     */
    private $RequisitionTime = null;

    /**
     * @var \IMS\Security\Type\RequisitionTypeType
     */
    private $RequisitionType = null;

    /**
     * @var bool
     */
    private $SpecialHandling = null;

    /**
     * @var bool
     */
    private $WebOrder = null;

    /**
     * @var \IMS\Security\Type\RequisitionNoteType
     */
    private $Note = null;

    /**
     * @var bool
     */
    private $Fulfilled = null;

    /**
     * @var bool
     */
    private $ActiveInIls = null;

    /**
     * @var bool
     */
    private $DeletedInIls = null;

    /**
     * @var \IMS\Security\Type\BranchInfoType
     */
    private $PickupBranch = null;

    /**
     * @var \IMS\Security\Type\ItemIdType
     */
    private $TakenItemId = null;

    /**
     * @var \IMS\Security\Type\BranchInfoType
     */
    private $PickBranch = null;

    /**
     * @var int
     */
    private $ItemCount = null;

    /**
     * @return \IMS\Security\Type\RequisitionIdType
     */
    public function getRequisitionId()
    {
        return $this->RequisitionId;
    }

    /**
     * @param \IMS\Security\Type\RequisitionIdType $RequisitionId
     * @return RequisitionHistoryEntryType
     */
    public function withRequisitionId($RequisitionId)
    {
        $new = clone $this;
        $new->RequisitionId = $RequisitionId;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getRequisitionTime()
    {
        return $this->RequisitionTime;
    }

    /**
     * @param \DateTime $RequisitionTime
     * @return RequisitionHistoryEntryType
     */
    public function withRequisitionTime($RequisitionTime)
    {
        $new = clone $this;
        $new->RequisitionTime = $RequisitionTime;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\RequisitionTypeType
     */
    public function getRequisitionType()
    {
        return $this->RequisitionType;
    }

    /**
     * @param \IMS\Security\Type\RequisitionTypeType $RequisitionType
     * @return RequisitionHistoryEntryType
     */
    public function withRequisitionType($RequisitionType)
    {
        $new = clone $this;
        $new->RequisitionType = $RequisitionType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSpecialHandling()
    {
        return $this->SpecialHandling;
    }

    /**
     * @param bool $SpecialHandling
     * @return RequisitionHistoryEntryType
     */
    public function withSpecialHandling($SpecialHandling)
    {
        $new = clone $this;
        $new->SpecialHandling = $SpecialHandling;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWebOrder()
    {
        return $this->WebOrder;
    }

    /**
     * @param bool $WebOrder
     * @return RequisitionHistoryEntryType
     */
    public function withWebOrder($WebOrder)
    {
        $new = clone $this;
        $new->WebOrder = $WebOrder;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\RequisitionNoteType
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * @param \IMS\Security\Type\RequisitionNoteType $Note
     * @return RequisitionHistoryEntryType
     */
    public function withNote($Note)
    {
        $new = clone $this;
        $new->Note = $Note;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFulfilled()
    {
        return $this->Fulfilled;
    }

    /**
     * @param bool $Fulfilled
     * @return RequisitionHistoryEntryType
     */
    public function withFulfilled($Fulfilled)
    {
        $new = clone $this;
        $new->Fulfilled = $Fulfilled;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActiveInIls()
    {
        return $this->ActiveInIls;
    }

    /**
     * @param bool $ActiveInIls
     * @return RequisitionHistoryEntryType
     */
    public function withActiveInIls($ActiveInIls)
    {
        $new = clone $this;
        $new->ActiveInIls = $ActiveInIls;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDeletedInIls()
    {
        return $this->DeletedInIls;
    }

    /**
     * @param bool $DeletedInIls
     * @return RequisitionHistoryEntryType
     */
    public function withDeletedInIls($DeletedInIls)
    {
        $new = clone $this;
        $new->DeletedInIls = $DeletedInIls;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchInfoType
     */
    public function getPickupBranch()
    {
        return $this->PickupBranch;
    }

    /**
     * @param \IMS\Security\Type\BranchInfoType $PickupBranch
     * @return RequisitionHistoryEntryType
     */
    public function withPickupBranch($PickupBranch)
    {
        $new = clone $this;
        $new->PickupBranch = $PickupBranch;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ItemIdType
     */
    public function getTakenItemId()
    {
        return $this->TakenItemId;
    }

    /**
     * @param \IMS\Security\Type\ItemIdType $TakenItemId
     * @return RequisitionHistoryEntryType
     */
    public function withTakenItemId($TakenItemId)
    {
        $new = clone $this;
        $new->TakenItemId = $TakenItemId;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchInfoType
     */
    public function getPickBranch()
    {
        return $this->PickBranch;
    }

    /**
     * @param \IMS\Security\Type\BranchInfoType $PickBranch
     * @return RequisitionHistoryEntryType
     */
    public function withPickBranch($PickBranch)
    {
        $new = clone $this;
        $new->PickBranch = $PickBranch;

        return $new;
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }

    /**
     * @param int $ItemCount
     * @return RequisitionHistoryEntryType
     */
    public function withItemCount($ItemCount)
    {
        $new = clone $this;
        $new->ItemCount = $ItemCount;

        return $new;
    }


}

