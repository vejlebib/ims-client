<?php

namespace IMS\Query\Type;

class GetRequisitionDetails
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\RequisitionIdType
     */
    private $RequisitionId = null;

    /**
     * @var \IMS\Query\Type\RequisitionKeyType
     */
    private $RequisitionKey = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetRequisitionDetails
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RequisitionIdType
     */
    public function getRequisitionId()
    {
        return $this->RequisitionId;
    }

    /**
     * @param \IMS\Query\Type\RequisitionIdType $RequisitionId
     * @return GetRequisitionDetails
     */
    public function withRequisitionId($RequisitionId)
    {
        $new = clone $this;
        $new->RequisitionId = $RequisitionId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RequisitionKeyType
     */
    public function getRequisitionKey()
    {
        return $this->RequisitionKey;
    }

    /**
     * @param \IMS\Query\Type\RequisitionKeyType $RequisitionKey
     * @return GetRequisitionDetails
     */
    public function withRequisitionKey($RequisitionKey)
    {
        $new = clone $this;
        $new->RequisitionKey = $RequisitionKey;

        return $new;
    }


}

