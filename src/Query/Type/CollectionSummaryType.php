<?php

namespace IMS\Query\Type;

class CollectionSummaryType
{

    /**
     * @var \IMS\Query\Type\CollectionKeyType
     */
    private $CollectionKey = null;

    /**
     * @var \IMS\Query\Type\CollectionCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Query\Type\CollectionNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\CollectionKeyType
     */
    public function getCollectionKey()
    {
        return $this->CollectionKey;
    }

    /**
     * @param \IMS\Query\Type\CollectionKeyType $CollectionKey
     * @return CollectionSummaryType
     */
    public function withCollectionKey($CollectionKey)
    {
        $new = clone $this;
        $new->CollectionKey = $CollectionKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CollectionCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Query\Type\CollectionCodeType $Code
     * @return CollectionSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CollectionNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\CollectionNameType $Name
     * @return CollectionSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

