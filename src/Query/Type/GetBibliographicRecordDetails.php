<?php

namespace IMS\Query\Type;

class GetBibliographicRecordDetails
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\BibliographicRecordKeyType
     */
    private $BibliographicRecordKey = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetBibliographicRecordDetails
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BibliographicRecordKeyType
     */
    public function getBibliographicRecordKey()
    {
        return $this->BibliographicRecordKey;
    }

    /**
     * @param \IMS\Query\Type\BibliographicRecordKeyType $BibliographicRecordKey
     * @return GetBibliographicRecordDetails
     */
    public function withBibliographicRecordKey($BibliographicRecordKey)
    {
        $new = clone $this;
        $new->BibliographicRecordKey = $BibliographicRecordKey;

        return $new;
    }


}

