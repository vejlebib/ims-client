<?php

namespace IMS\Query\Type;

class GetHistoryOfItem
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var int
     */
    private $MaxRecords = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetHistoryOfItem
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param \IMS\Query\Type\ItemIdType $ItemId
     * @return GetHistoryOfItem
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxRecords()
    {
        return $this->MaxRecords;
    }

    /**
     * @param int $MaxRecords
     * @return GetHistoryOfItem
     */
    public function withMaxRecords($MaxRecords)
    {
        $new = clone $this;
        $new->MaxRecords = $MaxRecords;

        return $new;
    }


}

