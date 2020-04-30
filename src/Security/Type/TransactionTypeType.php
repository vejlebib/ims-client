<?php

namespace IMS\Security\Type;

class TransactionTypeType
{

    /**
     * @var \IMS\Security\Type\TransactionTypeKeyType
     */
    private $TransactionTypeKey = null;

    /**
     * @var \IMS\Security\Type\TransactionTypeNameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\TransactionTypeDescriptionType
     */
    private $Description = null;

    /**
     * @return \IMS\Security\Type\TransactionTypeKeyType
     */
    public function getTransactionTypeKey()
    {
        return $this->TransactionTypeKey;
    }

    /**
     * @param \IMS\Security\Type\TransactionTypeKeyType $TransactionTypeKey
     * @return TransactionTypeType
     */
    public function withTransactionTypeKey($TransactionTypeKey)
    {
        $new = clone $this;
        $new->TransactionTypeKey = $TransactionTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\TransactionTypeNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\TransactionTypeNameType $Name
     * @return TransactionTypeType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\TransactionTypeDescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Security\Type\TransactionTypeDescriptionType $Description
     * @return TransactionTypeType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }


}

