<?php

namespace IMS\Query\Type;

class GetRequisitionHistoryResponse
{

    /**
     * @var \IMS\Query\Type\RequisitionHistoryEntryType
     */
    private $HistoryEntries = null;

    /**
     * @return \IMS\Query\Type\RequisitionHistoryEntryType
     */
    public function getHistoryEntries()
    {
        return $this->HistoryEntries;
    }

    /**
     * @param \IMS\Query\Type\RequisitionHistoryEntryType $HistoryEntries
     * @return GetRequisitionHistoryResponse
     */
    public function withHistoryEntries($HistoryEntries)
    {
        $new = clone $this;
        $new->HistoryEntries = $HistoryEntries;

        return $new;
    }


}

