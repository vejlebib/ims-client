<?php

namespace IMS\Query\Type;

class RequisitionInfoType
{

    /**
     * @var \IMS\Query\Type\RequisitionKeyType
     */
    private $RequisitionKey = null;

    /**
     * @var \IMS\Query\Type\RequisitionIdType
     */
    private $RequisitionId = null;

    /**
     * @var \DateTime
     */
    private $RequisitionTime = null;

    /**
     * @var \IMS\Query\Type\RequisitionTypeType
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
     * @var \IMS\Query\Type\RequisitionNoteType
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
     * @var \IMS\Query\Type\BranchInfoType
     */
    private $PickupBranch = null;

    /**
     * @var \IMS\Query\Type\ItemInfoType
     */
    private $TakenItem = null;

    /**
     * @var \IMS\Query\Type\BranchInfoType
     */
    private $PickBranch = null;

    /**
     * @var bool
     */
    private $ReadyForPick = null;

    /**
     * @var \IMS\Query\Type\PlacementTextType
     */
    private $PickPlacementShortText = null;

    /**
     * @var \IMS\Query\Type\PlacementTextType
     */
    private $PickPlacementLongText = null;

    /**
     * @var \IMS\Query\Type\ItemIdType
     */
    private $ItemIdToPick = null;

    /**
     * @return \IMS\Query\Type\RequisitionKeyType
     */
    public function getRequisitionKey()
    {
        return $this->RequisitionKey;
    }

    /**
     * @param \IMS\Query\Type\RequisitionKeyType $RequisitionKey
     * @return RequisitionInfoType
     */
    public function withRequisitionKey($RequisitionKey)
    {
        $new = clone $this;
        $new->RequisitionKey = $RequisitionKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RequisitionIdType
     */
    public function getRequisitionId()
    {
        return $this->RequisitionId;
    }

    /**
     * @param \IMS\Query\Type\RequisitionIdType $RequisitionId
     * @return RequisitionInfoType
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
     * @return RequisitionInfoType
     */
    public function withRequisitionTime($RequisitionTime)
    {
        $new = clone $this;
        $new->RequisitionTime = $RequisitionTime;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RequisitionTypeType
     */
    public function getRequisitionType()
    {
        return $this->RequisitionType;
    }

    /**
     * @param \IMS\Query\Type\RequisitionTypeType $RequisitionType
     * @return RequisitionInfoType
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
     * @return RequisitionInfoType
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
     * @return RequisitionInfoType
     */
    public function withWebOrder($WebOrder)
    {
        $new = clone $this;
        $new->WebOrder = $WebOrder;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RequisitionNoteType
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * @param \IMS\Query\Type\RequisitionNoteType $Note
     * @return RequisitionInfoType
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
     * @return RequisitionInfoType
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
     * @return RequisitionInfoType
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
     * @return RequisitionInfoType
     */
    public function withDeletedInIls($DeletedInIls)
    {
        $new = clone $this;
        $new->DeletedInIls = $DeletedInIls;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchInfoType
     */
    public function getPickupBranch()
    {
        return $this->PickupBranch;
    }

    /**
     * @param \IMS\Query\Type\BranchInfoType $PickupBranch
     * @return RequisitionInfoType
     */
    public function withPickupBranch($PickupBranch)
    {
        $new = clone $this;
        $new->PickupBranch = $PickupBranch;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ItemInfoType
     */
    public function getTakenItem()
    {
        return $this->TakenItem;
    }

    /**
     * @param \IMS\Query\Type\ItemInfoType $TakenItem
     * @return RequisitionInfoType
     */
    public function withTakenItem($TakenItem)
    {
        $new = clone $this;
        $new->TakenItem = $TakenItem;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchInfoType
     */
    public function getPickBranch()
    {
        return $this->PickBranch;
    }

    /**
     * @param \IMS\Query\Type\BranchInfoType $PickBranch
     * @return RequisitionInfoType
     */
    public function withPickBranch($PickBranch)
    {
        $new = clone $this;
        $new->PickBranch = $PickBranch;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReadyForPick()
    {
        return $this->ReadyForPick;
    }

    /**
     * @param bool $ReadyForPick
     * @return RequisitionInfoType
     */
    public function withReadyForPick($ReadyForPick)
    {
        $new = clone $this;
        $new->ReadyForPick = $ReadyForPick;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PlacementTextType
     */
    public function getPickPlacementShortText()
    {
        return $this->PickPlacementShortText;
    }

    /**
     * @param \IMS\Query\Type\PlacementTextType $PickPlacementShortText
     * @return RequisitionInfoType
     */
    public function withPickPlacementShortText($PickPlacementShortText)
    {
        $new = clone $this;
        $new->PickPlacementShortText = $PickPlacementShortText;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PlacementTextType
     */
    public function getPickPlacementLongText()
    {
        return $this->PickPlacementLongText;
    }

    /**
     * @param \IMS\Query\Type\PlacementTextType $PickPlacementLongText
     * @return RequisitionInfoType
     */
    public function withPickPlacementLongText($PickPlacementLongText)
    {
        $new = clone $this;
        $new->PickPlacementLongText = $PickPlacementLongText;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ItemIdType
     */
    public function getItemIdToPick()
    {
        return $this->ItemIdToPick;
    }

    /**
     * @param \IMS\Query\Type\ItemIdType $ItemIdToPick
     * @return RequisitionInfoType
     */
    public function withItemIdToPick($ItemIdToPick)
    {
        $new = clone $this;
        $new->ItemIdToPick = $ItemIdToPick;

        return $new;
    }


}

