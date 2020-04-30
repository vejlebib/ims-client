<?php

namespace IMS\Security\Type;

class BibliographicRecordInfoType
{

    /**
     * @var \IMS\Security\Type\BibliographicRecordKeyType
     */
    private $BibliographicRecordKey = null;

    /**
     * @var \IMS\Security\Type\BibliographicRecordIdType
     */
    private $BibliographicRecordId = null;

    /**
     * @var \IMS\Security\Type\TitleType
     */
    private $Title = null;

    /**
     * @var \IMS\Security\Type\AuthorType
     */
    private $Author = null;

    /**
     * @var \IMS\Security\Type\SimpleCategoryInfoType
     */
    private $Category = null;

    /**
     * @var bool
     */
    private $LifecycleLocked = null;

    /**
     * @var \IMS\Security\Type\ClassificationType
     */
    private $Classification = null;

    /**
     * @var \IMS\Security\Type\CapacityType
     */
    private $SpecificWidth = null;

    /**
     * @var int
     */
    private $NumberOfMatchingItems = null;

    /**
     * @var int
     */
    private $TotalNumberOfItems = null;

    /**
     * @return \IMS\Security\Type\BibliographicRecordKeyType
     */
    public function getBibliographicRecordKey()
    {
        return $this->BibliographicRecordKey;
    }

    /**
     * @param \IMS\Security\Type\BibliographicRecordKeyType $BibliographicRecordKey
     * @return BibliographicRecordInfoType
     */
    public function withBibliographicRecordKey($BibliographicRecordKey)
    {
        $new = clone $this;
        $new->BibliographicRecordKey = $BibliographicRecordKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BibliographicRecordIdType
     */
    public function getBibliographicRecordId()
    {
        return $this->BibliographicRecordId;
    }

    /**
     * @param \IMS\Security\Type\BibliographicRecordIdType $BibliographicRecordId
     * @return BibliographicRecordInfoType
     */
    public function withBibliographicRecordId($BibliographicRecordId)
    {
        $new = clone $this;
        $new->BibliographicRecordId = $BibliographicRecordId;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\TitleType
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param \IMS\Security\Type\TitleType $Title
     * @return BibliographicRecordInfoType
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\AuthorType
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * @param \IMS\Security\Type\AuthorType $Author
     * @return BibliographicRecordInfoType
     */
    public function withAuthor($Author)
    {
        $new = clone $this;
        $new->Author = $Author;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SimpleCategoryInfoType
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param \IMS\Security\Type\SimpleCategoryInfoType $Category
     * @return BibliographicRecordInfoType
     */
    public function withCategory($Category)
    {
        $new = clone $this;
        $new->Category = $Category;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLifecycleLocked()
    {
        return $this->LifecycleLocked;
    }

    /**
     * @param bool $LifecycleLocked
     * @return BibliographicRecordInfoType
     */
    public function withLifecycleLocked($LifecycleLocked)
    {
        $new = clone $this;
        $new->LifecycleLocked = $LifecycleLocked;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ClassificationType
     */
    public function getClassification()
    {
        return $this->Classification;
    }

    /**
     * @param \IMS\Security\Type\ClassificationType $Classification
     * @return BibliographicRecordInfoType
     */
    public function withClassification($Classification)
    {
        $new = clone $this;
        $new->Classification = $Classification;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CapacityType
     */
    public function getSpecificWidth()
    {
        return $this->SpecificWidth;
    }

    /**
     * @param \IMS\Security\Type\CapacityType $SpecificWidth
     * @return BibliographicRecordInfoType
     */
    public function withSpecificWidth($SpecificWidth)
    {
        $new = clone $this;
        $new->SpecificWidth = $SpecificWidth;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfMatchingItems()
    {
        return $this->NumberOfMatchingItems;
    }

    /**
     * @param int $NumberOfMatchingItems
     * @return BibliographicRecordInfoType
     */
    public function withNumberOfMatchingItems($NumberOfMatchingItems)
    {
        $new = clone $this;
        $new->NumberOfMatchingItems = $NumberOfMatchingItems;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalNumberOfItems()
    {
        return $this->TotalNumberOfItems;
    }

    /**
     * @param int $TotalNumberOfItems
     * @return BibliographicRecordInfoType
     */
    public function withTotalNumberOfItems($TotalNumberOfItems)
    {
        $new = clone $this;
        $new->TotalNumberOfItems = $TotalNumberOfItems;

        return $new;
    }


}

