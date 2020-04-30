<?php

namespace IMS\Query\Type;

class TransactionTypeType
{

    /**
     * @var \IMS\Query\Type\TransactionTypeKeyType
     */
    private $TransactionTypeKey = null;

    /**
     * @var \IMS\Query\Type\TransactionTypeNameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\TransactionTypeDescriptionType
     */
    private $Description = null;

    /**
     * @return \IMS\Query\Type\TransactionTypeKeyType
     */
    public function getTransactionTypeKey()
    {
        return $this->TransactionTypeKey;
    }

    /**
     * @param \IMS\Query\Type\TransactionTypeKeyType $TransactionTypeKey
     * @return TransactionTypeType
     */
    public function withTransactionTypeKey($TransactionTypeKey)
    {
        $new = clone $this;
        $new->TransactionTypeKey = $TransactionTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\TransactionTypeNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\TransactionTypeNameType $Name
     * @return TransactionTypeType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\TransactionTypeDescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Query\Type\TransactionTypeDescriptionType $Description
     * @return TransactionTypeType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }


}

