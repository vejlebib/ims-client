<?php

namespace IMS\Security\Type;

class RequisitionDetailsType
{

    /**
     * @var \IMS\Security\Type\ItemInfoType
     */
    private $Items = null;

    /**
     * @return \IMS\Security\Type\ItemInfoType
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * @param \IMS\Security\Type\ItemInfoType $Items
     * @return RequisitionDetailsType
     */
    public function withItems($Items)
    {
        $new = clone $this;
        $new->Items = $Items;

        return $new;
    }


}

