<?php

namespace IMS\Security\Type;

class PickOrderInfoType
{

    /**
     * @var \IMS\Security\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var \IMS\Security\Type\PickPlacementKeyType
     */
    private $PickPlacementKey = null;

    /**
     * @return \IMS\Security\Type\ItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param \IMS\Security\Type\ItemIdType $ItemId
     * @return PickOrderInfoType
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PickPlacementKeyType
     */
    public function getPickPlacementKey()
    {
        return $this->PickPlacementKey;
    }

    /**
     * @param \IMS\Security\Type\PickPlacementKeyType $PickPlacementKey
     * @return PickOrderInfoType
     */
    public function withPickPlacementKey($PickPlacementKey)
    {
        $new = clone $this;
        $new->PickPlacementKey = $PickPlacementKey;

        return $new;
    }


}

