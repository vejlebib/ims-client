<?php

namespace IMS\Security\Type;

class SimpleCategoryInfoType
{

    /**
     * @var \IMS\Security\Type\CategoryKeyType
     */
    private $CategoryKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $CategoryName = null;

    /**
     * @return \IMS\Security\Type\CategoryKeyType
     */
    public function getCategoryKey()
    {
        return $this->CategoryKey;
    }

    /**
     * @param \IMS\Security\Type\CategoryKeyType $CategoryKey
     * @return SimpleCategoryInfoType
     */
    public function withCategoryKey($CategoryKey)
    {
        $new = clone $this;
        $new->CategoryKey = $CategoryKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\NameType
     */
    public function getCategoryName()
    {
        return $this->CategoryName;
    }

    /**
     * @param \IMS\Security\Type\NameType $CategoryName
     * @return SimpleCategoryInfoType
     */
    public function withCategoryName($CategoryName)
    {
        $new = clone $this;
        $new->CategoryName = $CategoryName;

        return $new;
    }


}

