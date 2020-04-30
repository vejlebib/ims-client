<?php

namespace IMS\Query\Type;

class GetBibliographicRecordDetailsResponse
{

    /**
     * @var \IMS\Query\Type\ExtendedBibliographicRecordInfoType
     */
    private $BibliographicRecordDetails = null;

    /**
     * @return \IMS\Query\Type\ExtendedBibliographicRecordInfoType
     */
    public function getBibliographicRecordDetails()
    {
        return $this->BibliographicRecordDetails;
    }

    /**
     * @param \IMS\Query\Type\ExtendedBibliographicRecordInfoType
     * $BibliographicRecordDetails
     * @return GetBibliographicRecordDetailsResponse
     */
    public function withBibliographicRecordDetails($BibliographicRecordDetails)
    {
        $new = clone $this;
        $new->BibliographicRecordDetails = $BibliographicRecordDetails;

        return $new;
    }


}

