<?php

namespace IMS\Security\Type;

class CollectionSummaryType
{

    /**
     * @var \IMS\Security\Type\CollectionKeyType
     */
    private $CollectionKey = null;

    /**
     * @var \IMS\Security\Type\CollectionCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Security\Type\CollectionNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\CollectionKeyType
     */
    public function getCollectionKey()
    {
        return $this->CollectionKey;
    }

    /**
     * @param \IMS\Security\Type\CollectionKeyType $CollectionKey
     * @return CollectionSummaryType
     */
    public function withCollectionKey($CollectionKey)
    {
        $new = clone $this;
        $new->CollectionKey = $CollectionKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CollectionCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Security\Type\CollectionCodeType $Code
     * @return CollectionSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CollectionNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\CollectionNameType $Name
     * @return CollectionSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

