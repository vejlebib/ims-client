<?php

namespace IMS\Query\Type;

class RequisitionDetailsType
{

    /**
     * @var \IMS\Query\Type\ItemInfoType
     */
    private $Items = null;

    /**
     * @return \IMS\Query\Type\ItemInfoType
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * @param \IMS\Query\Type\ItemInfoType $Items
     * @return RequisitionDetailsType
     */
    public function withItems($Items)
    {
        $new = clone $this;
        $new->Items = $Items;

        return $new;
    }


}

