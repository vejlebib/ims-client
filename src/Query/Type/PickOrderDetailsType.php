<?php

namespace IMS\Query\Type;

class PickOrderDetailsType
{

    /**
     * @var \IMS\Query\Type\PickOrderKeyType
     */
    private $PickOrderKey = null;

    /**
     * @var \IMS\Query\Type\PickOrderTypeInfoType
     */
    private $PickOrderType = null;

    /**
     * @var \DateTime
     */
    private $CreationTime = null;

    /**
     * @var bool
     */
    private $ReadyForPick = null;

    /**
     * @var \IMS\Query\Type\NamedListSummaryType
     */
    private $NamedList = null;

    /**
     * @var \IMS\Query\Type\ItemInfoType
     */
    private $ItemInfo = null;

    /**
     * @var \IMS\Query\Type\PickOrderNoteType
     */
    private $Note = null;

    /**
     * @var \IMS\Query\Type\BranchSummaryType
     */
    private $DestinationBranch = null;

    /**
     * @return \IMS\Query\Type\PickOrderKeyType
     */
    public function getPickOrderKey()
    {
        return $this->PickOrderKey;
    }

    /**
     * @param \IMS\Query\Type\PickOrderKeyType $PickOrderKey
     * @return PickOrderDetailsType
     */
    public function withPickOrderKey($PickOrderKey)
    {
        $new = clone $this;
        $new->PickOrderKey = $PickOrderKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PickOrderTypeInfoType
     */
    public function getPickOrderType()
    {
        return $this->PickOrderType;
    }

    /**
     * @param \IMS\Query\Type\PickOrderTypeInfoType $PickOrderType
     * @return PickOrderDetailsType
     */
    public function withPickOrderType($PickOrderType)
    {
        $new = clone $this;
        $new->PickOrderType = $PickOrderType;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }

    /**
     * @param \DateTime $CreationTime
     * @return PickOrderDetailsType
     */
    public function withCreationTime($CreationTime)
    {
        $new = clone $this;
        $new->CreationTime = $CreationTime;

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
     * @return PickOrderDetailsType
     */
    public function withReadyForPick($ReadyForPick)
    {
        $new = clone $this;
        $new->ReadyForPick = $ReadyForPick;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NamedListSummaryType
     */
    public function getNamedList()
    {
        return $this->NamedList;
    }

    /**
     * @param \IMS\Query\Type\NamedListSummaryType $NamedList
     * @return PickOrderDetailsType
     */
    public function withNamedList($NamedList)
    {
        $new = clone $this;
        $new->NamedList = $NamedList;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ItemInfoType
     */
    public function getItemInfo()
    {
        return $this->ItemInfo;
    }

    /**
     * @param \IMS\Query\Type\ItemInfoType $ItemInfo
     * @return PickOrderDetailsType
     */
    public function withItemInfo($ItemInfo)
    {
        $new = clone $this;
        $new->ItemInfo = $ItemInfo;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PickOrderNoteType
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * @param \IMS\Query\Type\PickOrderNoteType $Note
     * @return PickOrderDetailsType
     */
    public function withNote($Note)
    {
        $new = clone $this;
        $new->Note = $Note;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchSummaryType
     */
    public function getDestinationBranch()
    {
        return $this->DestinationBranch;
    }

    /**
     * @param \IMS\Query\Type\BranchSummaryType $DestinationBranch
     * @return PickOrderDetailsType
     */
    public function withDestinationBranch($DestinationBranch)
    {
        $new = clone $this;
        $new->DestinationBranch = $DestinationBranch;

        return $new;
    }


}

