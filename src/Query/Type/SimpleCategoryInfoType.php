<?php

namespace IMS\Query\Type;

class SimpleCategoryInfoType
{

    /**
     * @var \IMS\Query\Type\CategoryKeyType
     */
    private $CategoryKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $CategoryName = null;

    /**
     * @return \IMS\Query\Type\CategoryKeyType
     */
    public function getCategoryKey()
    {
        return $this->CategoryKey;
    }

    /**
     * @param \IMS\Query\Type\CategoryKeyType $CategoryKey
     * @return SimpleCategoryInfoType
     */
    public function withCategoryKey($CategoryKey)
    {
        $new = clone $this;
        $new->CategoryKey = $CategoryKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getCategoryName()
    {
        return $this->CategoryName;
    }

    /**
     * @param \IMS\Query\Type\NameType $CategoryName
     * @return SimpleCategoryInfoType
     */
    public function withCategoryName($CategoryName)
    {
        $new = clone $this;
        $new->CategoryName = $CategoryName;

        return $new;
    }


}

