<?php

namespace IMS\Query\Type;

class GetBibliographicRecordHistoryResponse
{

    /**
     * @var \IMS\Query\Type\BibliographicRecordHistoryEntryType
     */
    private $HistoryEntries = null;

    /**
     * @return \IMS\Query\Type\BibliographicRecordHistoryEntryType
     */
    public function getHistoryEntries()
    {
        return $this->HistoryEntries;
    }

    /**
     * @param \IMS\Query\Type\BibliographicRecordHistoryEntryType $HistoryEntries
     * @return GetBibliographicRecordHistoryResponse
     */
    public function withHistoryEntries($HistoryEntries)
    {
        $new = clone $this;
        $new->HistoryEntries = $HistoryEntries;

        return $new;
    }


}

