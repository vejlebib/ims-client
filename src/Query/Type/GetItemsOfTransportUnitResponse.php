<?php

namespace IMS\Query\Type;

class GetItemsOfTransportUnitResponse
{

    /**
     * @var \IMS\Query\Type\ItemInfoType
     */
    private $ItemInfo = null;

    /**
     * @return \IMS\Query\Type\ItemInfoType
     */
    public function getItemInfo()
    {
        return $this->ItemInfo;
    }

    /**
     * @param \IMS\Query\Type\ItemInfoType $ItemInfo
     * @return GetItemsOfTransportUnitResponse
     */
    public function withItemInfo($ItemInfo)
    {
        $new = clone $this;
        $new->ItemInfo = $ItemInfo;

        return $new;
    }


}

