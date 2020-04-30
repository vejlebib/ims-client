<?php

namespace IMS\Query\Type;

class ItemHistoryEntryType
{

    /**
     * @var \IMS\Query\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var \IMS\Query\Type\PlacementInfoType
     */
    private $Placement = null;

    /**
     * @var \IMS\Query\Type\RequisitionIdType
     */
    private $TakenForRequisitionId = null;

    /**
     * @return \IMS\Query\Type\ItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param \IMS\Query\Type\ItemIdType $ItemId
     * @return ItemHistoryEntryType
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PlacementInfoType
     */
    public function getPlacement()
    {
        return $this->Placement;
    }

    /**
     * @param \IMS\Query\Type\PlacementInfoType $Placement
     * @return ItemHistoryEntryType
     */
    public function withPlacement($Placement)
    {
        $new = clone $this;
        $new->Placement = $Placement;

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
     * @return ItemHistoryEntryType
     */
    public function withTakenForRequisitionId($TakenForRequisitionId)
    {
        $new = clone $this;
        $new->TakenForRequisitionId = $TakenForRequisitionId;

        return $new;
    }


}

