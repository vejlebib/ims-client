<?php

namespace IMS\Query\Type;

class FineSortingDetailedResultType
{

    /**
     * @var \IMS\Query\Type\ItemKeyType
     */
    private $ItemKey = null;

    /**
     * @var \IMS\Query\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var \IMS\Query\Type\AuthorType
     */
    private $Author = null;

    /**
     * @var \IMS\Query\Type\TitleType
     */
    private $Title = null;

    /**
     * @var \IMS\Query\Type\MaterialGroupingKeyType
     */
    private $MaterialGroupingKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $MaterialGroupingName = null;

    /**
     * @var \IMS\Query\Type\FineSortingKeyType
     */
    private $FineSortingKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $FineSortingName = null;

    /**
     * @return \IMS\Query\Type\ItemKeyType
     */
    public function getItemKey()
    {
        return $this->ItemKey;
    }

    /**
     * @param \IMS\Query\Type\ItemKeyType $ItemKey
     * @return FineSortingDetailedResultType
     */
    public function withItemKey($ItemKey)
    {
        $new = clone $this;
        $new->ItemKey = $ItemKey;

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
     * @return FineSortingDetailedResultType
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\AuthorType
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * @param \IMS\Query\Type\AuthorType $Author
     * @return FineSortingDetailedResultType
     */
    public function withAuthor($Author)
    {
        $new = clone $this;
        $new->Author = $Author;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\TitleType
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param \IMS\Query\Type\TitleType $Title
     * @return FineSortingDetailedResultType
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialGroupingKeyType
     */
    public function getMaterialGroupingKey()
    {
        return $this->MaterialGroupingKey;
    }

    /**
     * @param \IMS\Query\Type\MaterialGroupingKeyType $MaterialGroupingKey
     * @return FineSortingDetailedResultType
     */
    public function withMaterialGroupingKey($MaterialGroupingKey)
    {
        $new = clone $this;
        $new->MaterialGroupingKey = $MaterialGroupingKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getMaterialGroupingName()
    {
        return $this->MaterialGroupingName;
    }

    /**
     * @param \IMS\Query\Type\NameType $MaterialGroupingName
     * @return FineSortingDetailedResultType
     */
    public function withMaterialGroupingName($MaterialGroupingName)
    {
        $new = clone $this;
        $new->MaterialGroupingName = $MaterialGroupingName;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\FineSortingKeyType
     */
    public function getFineSortingKey()
    {
        return $this->FineSortingKey;
    }

    /**
     * @param \IMS\Query\Type\FineSortingKeyType $FineSortingKey
     * @return FineSortingDetailedResultType
     */
    public function withFineSortingKey($FineSortingKey)
    {
        $new = clone $this;
        $new->FineSortingKey = $FineSortingKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getFineSortingName()
    {
        return $this->FineSortingName;
    }

    /**
     * @param \IMS\Query\Type\NameType $FineSortingName
     * @return FineSortingDetailedResultType
     */
    public function withFineSortingName($FineSortingName)
    {
        $new = clone $this;
        $new->FineSortingName = $FineSortingName;

        return $new;
    }


}

