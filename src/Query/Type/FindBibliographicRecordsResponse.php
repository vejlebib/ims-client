<?php

namespace IMS\Query\Type;

class FindBibliographicRecordsResponse
{

    /**
     * @var \IMS\Query\Type\BibliographicRecordInfoType
     */
    private $BibliographicRecords = null;

    /**
     * @return \IMS\Query\Type\BibliographicRecordInfoType
     */
    public function getBibliographicRecords()
    {
        return $this->BibliographicRecords;
    }

    /**
     * @param \IMS\Query\Type\BibliographicRecordInfoType $BibliographicRecords
     * @return FindBibliographicRecordsResponse
     */
    public function withBibliographicRecords($BibliographicRecords)
    {
        $new = clone $this;
        $new->BibliographicRecords = $BibliographicRecords;

        return $new;
    }


}

