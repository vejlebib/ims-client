<?php

namespace IMS\Query\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindItemsResponse implements ResultInterface
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
     * @return FindItemsResponse
     */
    public function withItems($Items)
    {
        $new = clone $this;
        $new->Items = $Items;

        return $new;
    }


}
