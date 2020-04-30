<?php

namespace IMS\Query\Type;

class GetItemHistoryResponse
{

    /**
     * @var \IMS\Query\Type\ItemHistoryEntryType
     */
    private $HistoryEntries = null;

    /**
     * @return \IMS\Query\Type\ItemHistoryEntryType
     */
    public function getHistoryEntries()
    {
        return $this->HistoryEntries;
    }

    /**
     * @param \IMS\Query\Type\ItemHistoryEntryType $HistoryEntries
     * @return GetItemHistoryResponse
     */
    public function withHistoryEntries($HistoryEntries)
    {
        $new = clone $this;
        $new->HistoryEntries = $HistoryEntries;

        return $new;
    }


}

