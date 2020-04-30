<?php

namespace IMS\Query\Type;

class FindRequisitions
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\RequisitionIdType
     */
    private $RequisitionId = null;

    /**
     * @var bool
     */
    private $Taken = null;

    /**
     * @var bool
     */
    private $Fulfilled = null;

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $PickupBranchKey = null;

    /**
     * @var bool
     */
    private $ReadyForPick = null;

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $PickBranchKey = null;

    /**
     * @var \DateTime
     */
    private $RequisitionTimeStart = null;

    /**
     * @var \DateTime
     */
    private $RequisitionTimeEnd = null;

    /**
     * @var \DateTime
     */
    private $ChangeTimeStart = null;

    /**
     * @var \DateTime
     */
    private $ChangeTimeEnd = null;

    /**
     * @var \IMS\Query\Type\ItemIdType
     */
    private $IncludingItemId = null;

    /**
     * @var \IMS\Query\Type\BibliographicRecordIdType
     */
    private $IncludingBibRecId = null;

    /**
     * @var bool
     */
    private $Active = null;

    /**
     * @var bool
     */
    private $Deleted = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return FindRequisitions
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

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
     * @return FindRequisitions
     */
    public function withRequisitionId($RequisitionId)
    {
        $new = clone $this;
        $new->RequisitionId = $RequisitionId;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTaken()
    {
        return $this->Taken;
    }

    /**
     * @param bool $Taken
     * @return FindRequisitions
     */
    public function withTaken($Taken)
    {
        $new = clone $this;
        $new->Taken = $Taken;

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
     * @return FindRequisitions
     */
    public function withFulfilled($Fulfilled)
    {
        $new = clone $this;
        $new->Fulfilled = $Fulfilled;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getPickupBranchKey()
    {
        return $this->PickupBranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $PickupBranchKey
     * @return FindRequisitions
     */
    public function withPickupBranchKey($PickupBranchKey)
    {
        $new = clone $this;
        $new->PickupBranchKey = $PickupBranchKey;

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
     * @return FindRequisitions
     */
    public function withReadyForPick($ReadyForPick)
    {
        $new = clone $this;
        $new->ReadyForPick = $ReadyForPick;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getPickBranchKey()
    {
        return $this->PickBranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $PickBranchKey
     * @return FindRequisitions
     */
    public function withPickBranchKey($PickBranchKey)
    {
        $new = clone $this;
        $new->PickBranchKey = $PickBranchKey;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getRequisitionTimeStart()
    {
        return $this->RequisitionTimeStart;
    }

    /**
     * @param \DateTime $RequisitionTimeStart
     * @return FindRequisitions
     */
    public function withRequisitionTimeStart($RequisitionTimeStart)
    {
        $new = clone $this;
        $new->RequisitionTimeStart = $RequisitionTimeStart;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getRequisitionTimeEnd()
    {
        return $this->RequisitionTimeEnd;
    }

    /**
     * @param \DateTime $RequisitionTimeEnd
     * @return FindRequisitions
     */
    public function withRequisitionTimeEnd($RequisitionTimeEnd)
    {
        $new = clone $this;
        $new->RequisitionTimeEnd = $RequisitionTimeEnd;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getChangeTimeStart()
    {
        return $this->ChangeTimeStart;
    }

    /**
     * @param \DateTime $ChangeTimeStart
     * @return FindRequisitions
     */
    public function withChangeTimeStart($ChangeTimeStart)
    {
        $new = clone $this;
        $new->ChangeTimeStart = $ChangeTimeStart;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getChangeTimeEnd()
    {
        return $this->ChangeTimeEnd;
    }

    /**
     * @param \DateTime $ChangeTimeEnd
     * @return FindRequisitions
     */
    public function withChangeTimeEnd($ChangeTimeEnd)
    {
        $new = clone $this;
        $new->ChangeTimeEnd = $ChangeTimeEnd;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ItemIdType
     */
    public function getIncludingItemId()
    {
        return $this->IncludingItemId;
    }

    /**
     * @param \IMS\Query\Type\ItemIdType $IncludingItemId
     * @return FindRequisitions
     */
    public function withIncludingItemId($IncludingItemId)
    {
        $new = clone $this;
        $new->IncludingItemId = $IncludingItemId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BibliographicRecordIdType
     */
    public function getIncludingBibRecId()
    {
        return $this->IncludingBibRecId;
    }

    /**
     * @param \IMS\Query\Type\BibliographicRecordIdType $IncludingBibRecId
     * @return FindRequisitions
     */
    public function withIncludingBibRecId($IncludingBibRecId)
    {
        $new = clone $this;
        $new->IncludingBibRecId = $IncludingBibRecId;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param bool $Active
     * @return FindRequisitions
     */
    public function withActive($Active)
    {
        $new = clone $this;
        $new->Active = $Active;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDeleted()
    {
        return $this->Deleted;
    }

    /**
     * @param bool $Deleted
     * @return FindRequisitions
     */
    public function withDeleted($Deleted)
    {
        $new = clone $this;
        $new->Deleted = $Deleted;

        return $new;
    }


}

