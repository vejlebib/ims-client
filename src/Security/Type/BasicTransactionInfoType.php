<?php

namespace IMS\Security\Type;

class BasicTransactionInfoType
{

    /**
     * @var \IMS\Security\Type\TransactionKeyType
     */
    private $TransactionKey = null;

    /**
     * @var \DateTime
     */
    private $TransactionTime = null;

    /**
     * @var \IMS\Security\Type\TransactionTypeType
     */
    private $TransactionType = null;

    /**
     * @var \IMS\Security\Type\OperatorBasicInfoType
     */
    private $CreatedBy = null;

    /**
     * @return \IMS\Security\Type\TransactionKeyType
     */
    public function getTransactionKey()
    {
        return $this->TransactionKey;
    }

    /**
     * @param \IMS\Security\Type\TransactionKeyType $TransactionKey
     * @return BasicTransactionInfoType
     */
    public function withTransactionKey($TransactionKey)
    {
        $new = clone $this;
        $new->TransactionKey = $TransactionKey;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getTransactionTime()
    {
        return $this->TransactionTime;
    }

    /**
     * @param \DateTime $TransactionTime
     * @return BasicTransactionInfoType
     */
    public function withTransactionTime($TransactionTime)
    {
        $new = clone $this;
        $new->TransactionTime = $TransactionTime;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\TransactionTypeType
     */
    public function getTransactionType()
    {
        return $this->TransactionType;
    }

    /**
     * @param \IMS\Security\Type\TransactionTypeType $TransactionType
     * @return BasicTransactionInfoType
     */
    public function withTransactionType($TransactionType)
    {
        $new = clone $this;
        $new->TransactionType = $TransactionType;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\OperatorBasicInfoType
     */
    public function getCreatedBy()
    {
        return $this->CreatedBy;
    }

    /**
     * @param \IMS\Security\Type\OperatorBasicInfoType $CreatedBy
     * @return BasicTransactionInfoType
     */
    public function withCreatedBy($CreatedBy)
    {
        $new = clone $this;
        $new->CreatedBy = $CreatedBy;

        return $new;
    }


}

