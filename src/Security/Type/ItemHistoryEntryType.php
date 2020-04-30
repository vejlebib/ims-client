<?php

namespace IMS\Security\Type;

class ItemHistoryEntryType
{

    /**
     * @var \IMS\Security\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var \IMS\Security\Type\PlacementInfoType
     */
    private $Placement = null;

    /**
     * @var \IMS\Security\Type\RequisitionIdType
     */
    private $TakenForRequisitionId = null;

    /**
     * @return \IMS\Security\Type\ItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param \IMS\Security\Type\ItemIdType $ItemId
     * @return ItemHistoryEntryType
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PlacementInfoType
     */
    public function getPlacement()
    {
        return $this->Placement;
    }

    /**
     * @param \IMS\Security\Type\PlacementInfoType $Placement
     * @return ItemHistoryEntryType
     */
    public function withPlacement($Placement)
    {
        $new = clone $this;
        $new->Placement = $Placement;

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
     * @return ItemHistoryEntryType
     */
    public function withTakenForRequisitionId($TakenForRequisitionId)
    {
        $new = clone $this;
        $new->TakenForRequisitionId = $TakenForRequisitionId;

        return $new;
    }


}

