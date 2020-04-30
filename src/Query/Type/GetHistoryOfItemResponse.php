<?php

namespace IMS\Query\Type;

class GetHistoryOfItemResponse
{

    /**
     * @var \IMS\Query\Type\ItemHistoryInfoType
     */
    private $ItemHistory = null;

    /**
     * @return \IMS\Query\Type\ItemHistoryInfoType
     */
    public function getItemHistory()
    {
        return $this->ItemHistory;
    }

    /**
     * @param \IMS\Query\Type\ItemHistoryInfoType $ItemHistory
     * @return GetHistoryOfItemResponse
     */
    public function withItemHistory($ItemHistory)
    {
        $new = clone $this;
        $new->ItemHistory = $ItemHistory;

        return $new;
    }


}

