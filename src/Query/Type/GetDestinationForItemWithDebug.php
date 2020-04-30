<?php

namespace IMS\Query\Type;

class GetDestinationForItemWithDebug
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
     * @var \IMS\Query\Type\BranchCodeType
     */
    private $BranchCode = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetDestinationForItemWithDebug
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
     * @return GetDestinationForItemWithDebug
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchCodeType
     */
    public function getBranchCode()
    {
        return $this->BranchCode;
    }

    /**
     * @param \IMS\Query\Type\BranchCodeType $BranchCode
     * @return GetDestinationForItemWithDebug
     */
    public function withBranchCode($BranchCode)
    {
        $new = clone $this;
        $new->BranchCode = $BranchCode;

        return $new;
    }


}

