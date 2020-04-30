<?php

namespace IMS\Query\Type;

class PickOrderInfoType
{

    /**
     * @var \IMS\Query\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var \IMS\Query\Type\PickPlacementKeyType
     */
    private $PickPlacementKey = null;

    /**
     * @return \IMS\Query\Type\ItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param \IMS\Query\Type\ItemIdType $ItemId
     * @return PickOrderInfoType
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PickPlacementKeyType
     */
    public function getPickPlacementKey()
    {
        return $this->PickPlacementKey;
    }

    /**
     * @param \IMS\Query\Type\PickPlacementKeyType $PickPlacementKey
     * @return PickOrderInfoType
     */
    public function withPickPlacementKey($PickPlacementKey)
    {
        $new = clone $this;
        $new->PickPlacementKey = $PickPlacementKey;

        return $new;
    }


}

