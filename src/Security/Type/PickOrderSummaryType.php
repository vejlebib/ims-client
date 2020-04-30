<?php

namespace IMS\Security\Type;

class PickOrderSummaryType
{

    /**
     * @var \IMS\Security\Type\PickOrderKeyType
     */
    private $PickOrderKey = null;

    /**
     * @var \IMS\Security\Type\PickOrderTypeInfoType
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
     * @var \IMS\Security\Type\NamedListSummaryType
     */
    private $NamedList = null;

    /**
     * @var \IMS\Security\Type\ItemInfoType
     */
    private $ItemInfo = null;

    /**
     * @var \IMS\Security\Type\PickOrderNoteType
     */
    private $Note = null;

    /**
     * @var \IMS\Security\Type\BranchSummaryType
     */
    private $DestinationBranch = null;

    /**
     * @return \IMS\Security\Type\PickOrderKeyType
     */
    public function getPickOrderKey()
    {
        return $this->PickOrderKey;
    }

    /**
     * @param \IMS\Security\Type\PickOrderKeyType $PickOrderKey
     * @return PickOrderSummaryType
     */
    public function withPickOrderKey($PickOrderKey)
    {
        $new = clone $this;
        $new->PickOrderKey = $PickOrderKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PickOrderTypeInfoType
     */
    public function getPickOrderType()
    {
        return $this->PickOrderType;
    }

    /**
     * @param \IMS\Security\Type\PickOrderTypeInfoType $PickOrderType
     * @return PickOrderSummaryType
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
     * @return PickOrderSummaryType
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
     * @return PickOrderSummaryType
     */
    public function withReadyForPick($ReadyForPick)
    {
        $new = clone $this;
        $new->ReadyForPick = $ReadyForPick;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\NamedListSummaryType
     */
    public function getNamedList()
    {
        return $this->NamedList;
    }

    /**
     * @param \IMS\Security\Type\NamedListSummaryType $NamedList
     * @return PickOrderSummaryType
     */
    public function withNamedList($NamedList)
    {
        $new = clone $this;
        $new->NamedList = $NamedList;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ItemInfoType
     */
    public function getItemInfo()
    {
        return $this->ItemInfo;
    }

    /**
     * @param \IMS\Security\Type\ItemInfoType $ItemInfo
     * @return PickOrderSummaryType
     */
    public function withItemInfo($ItemInfo)
    {
        $new = clone $this;
        $new->ItemInfo = $ItemInfo;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PickOrderNoteType
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * @param \IMS\Security\Type\PickOrderNoteType $Note
     * @return PickOrderSummaryType
     */
    public function withNote($Note)
    {
        $new = clone $this;
        $new->Note = $Note;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchSummaryType
     */
    public function getDestinationBranch()
    {
        return $this->DestinationBranch;
    }

    /**
     * @param \IMS\Security\Type\BranchSummaryType $DestinationBranch
     * @return PickOrderSummaryType
     */
    public function withDestinationBranch($DestinationBranch)
    {
        $new = clone $this;
        $new->DestinationBranch = $DestinationBranch;

        return $new;
    }


}

