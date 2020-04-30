<?php

namespace IMS\Query\Type;

class ExtendedBibliographicRecordInfoType
{

    /**
     * @var \IMS\Query\Type\BibliographicRecordKeyType
     */
    private $BibliographicRecordKey = null;

    /**
     * @var \IMS\Query\Type\BibliographicRecordIdType
     */
    private $BibliographicRecordId = null;

    /**
     * @var \IMS\Query\Type\TitleType
     */
    private $Title = null;

    /**
     * @var \IMS\Query\Type\SimpleCategoryInfoType
     */
    private $Category = null;

    /**
     * @var bool
     */
    private $LifecycleLocked = null;

    /**
     * @var \IMS\Query\Type\AuthorType
     */
    private $Author = null;

    /**
     * @var \IMS\Query\Type\ClassificationType
     */
    private $Classification = null;

    /**
     * @var \IMS\Query\Type\ClassificationGroupInfoType
     */
    private $ClassificationGroup = null;

    /**
     * @var \IMS\Query\Type\AlphabetisationType
     */
    private $Alphabetisation = null;

    /**
     * @var \IMS\Query\Type\MaterialTypeInfoType
     */
    private $MaterialType = null;

    /**
     * @var \IMS\Query\Type\SimpleCategoryInfoType
     */
    private $InitialCategory = null;

    /**
     * @var \IMS\Query\Type\ClassificationDisplayType
     */
    private $ClassificationDisplay = null;

    /**
     * @var \IMS\Query\Type\MusicClassificationTextType
     */
    private $MusicClassificationText = null;

    /**
     * @var \IMS\Query\Type\PageCountTextType
     */
    private $PageCountText = null;

    /**
     * @var int
     */
    private $ExtractedPageCount = null;

    /**
     * @var \IMS\Query\Type\EditionType
     */
    private $Edition = null;

    /**
     * @var \IMS\Query\Type\PhysicalDescriptionType
     */
    private $PhysicalDescription = null;

    /**
     * @var \IMS\Query\Type\SeriesType
     */
    private $Series = null;

    /**
     * @var \IMS\Query\Type\RecordLabelNumberType
     */
    private $RecordLabelNumber = null;

    /**
     * @var \IMS\Query\Type\BibliographicRecordIdType
     */
    private $FirstBibliographicRecordId = null;

    /**
     * @var \IMS\Query\Type\CapacityType
     */
    private $SpecifiedWidth = null;

    /**
     * @return \IMS\Query\Type\BibliographicRecordKeyType
     */
    public function getBibliographicRecordKey()
    {
        return $this->BibliographicRecordKey;
    }

    /**
     * @param \IMS\Query\Type\BibliographicRecordKeyType $BibliographicRecordKey
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withBibliographicRecordKey($BibliographicRecordKey)
    {
        $new = clone $this;
        $new->BibliographicRecordKey = $BibliographicRecordKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BibliographicRecordIdType
     */
    public function getBibliographicRecordId()
    {
        return $this->BibliographicRecordId;
    }

    /**
     * @param \IMS\Query\Type\BibliographicRecordIdType $BibliographicRecordId
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withBibliographicRecordId($BibliographicRecordId)
    {
        $new = clone $this;
        $new->BibliographicRecordId = $BibliographicRecordId;

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
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SimpleCategoryInfoType
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param \IMS\Query\Type\SimpleCategoryInfoType $Category
     * @return ExtendedBibliographicRecordInfoType
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
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withLifecycleLocked($LifecycleLocked)
    {
        $new = clone $this;
        $new->LifecycleLocked = $LifecycleLocked;

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
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withAuthor($Author)
    {
        $new = clone $this;
        $new->Author = $Author;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ClassificationType
     */
    public function getClassification()
    {
        return $this->Classification;
    }

    /**
     * @param \IMS\Query\Type\ClassificationType $Classification
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withClassification($Classification)
    {
        $new = clone $this;
        $new->Classification = $Classification;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ClassificationGroupInfoType
     */
    public function getClassificationGroup()
    {
        return $this->ClassificationGroup;
    }

    /**
     * @param \IMS\Query\Type\ClassificationGroupInfoType $ClassificationGroup
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withClassificationGroup($ClassificationGroup)
    {
        $new = clone $this;
        $new->ClassificationGroup = $ClassificationGroup;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\AlphabetisationType
     */
    public function getAlphabetisation()
    {
        return $this->Alphabetisation;
    }

    /**
     * @param \IMS\Query\Type\AlphabetisationType $Alphabetisation
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withAlphabetisation($Alphabetisation)
    {
        $new = clone $this;
        $new->Alphabetisation = $Alphabetisation;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialTypeInfoType
     */
    public function getMaterialType()
    {
        return $this->MaterialType;
    }

    /**
     * @param \IMS\Query\Type\MaterialTypeInfoType $MaterialType
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withMaterialType($MaterialType)
    {
        $new = clone $this;
        $new->MaterialType = $MaterialType;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SimpleCategoryInfoType
     */
    public function getInitialCategory()
    {
        return $this->InitialCategory;
    }

    /**
     * @param \IMS\Query\Type\SimpleCategoryInfoType $InitialCategory
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withInitialCategory($InitialCategory)
    {
        $new = clone $this;
        $new->InitialCategory = $InitialCategory;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ClassificationDisplayType
     */
    public function getClassificationDisplay()
    {
        return $this->ClassificationDisplay;
    }

    /**
     * @param \IMS\Query\Type\ClassificationDisplayType $ClassificationDisplay
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withClassificationDisplay($ClassificationDisplay)
    {
        $new = clone $this;
        $new->ClassificationDisplay = $ClassificationDisplay;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MusicClassificationTextType
     */
    public function getMusicClassificationText()
    {
        return $this->MusicClassificationText;
    }

    /**
     * @param \IMS\Query\Type\MusicClassificationTextType $MusicClassificationText
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withMusicClassificationText($MusicClassificationText)
    {
        $new = clone $this;
        $new->MusicClassificationText = $MusicClassificationText;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PageCountTextType
     */
    public function getPageCountText()
    {
        return $this->PageCountText;
    }

    /**
     * @param \IMS\Query\Type\PageCountTextType $PageCountText
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withPageCountText($PageCountText)
    {
        $new = clone $this;
        $new->PageCountText = $PageCountText;

        return $new;
    }

    /**
     * @return int
     */
    public function getExtractedPageCount()
    {
        return $this->ExtractedPageCount;
    }

    /**
     * @param int $ExtractedPageCount
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withExtractedPageCount($ExtractedPageCount)
    {
        $new = clone $this;
        $new->ExtractedPageCount = $ExtractedPageCount;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\EditionType
     */
    public function getEdition()
    {
        return $this->Edition;
    }

    /**
     * @param \IMS\Query\Type\EditionType $Edition
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withEdition($Edition)
    {
        $new = clone $this;
        $new->Edition = $Edition;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PhysicalDescriptionType
     */
    public function getPhysicalDescription()
    {
        return $this->PhysicalDescription;
    }

    /**
     * @param \IMS\Query\Type\PhysicalDescriptionType $PhysicalDescription
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withPhysicalDescription($PhysicalDescription)
    {
        $new = clone $this;
        $new->PhysicalDescription = $PhysicalDescription;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SeriesType
     */
    public function getSeries()
    {
        return $this->Series;
    }

    /**
     * @param \IMS\Query\Type\SeriesType $Series
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withSeries($Series)
    {
        $new = clone $this;
        $new->Series = $Series;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RecordLabelNumberType
     */
    public function getRecordLabelNumber()
    {
        return $this->RecordLabelNumber;
    }

    /**
     * @param \IMS\Query\Type\RecordLabelNumberType $RecordLabelNumber
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withRecordLabelNumber($RecordLabelNumber)
    {
        $new = clone $this;
        $new->RecordLabelNumber = $RecordLabelNumber;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BibliographicRecordIdType
     */
    public function getFirstBibliographicRecordId()
    {
        return $this->FirstBibliographicRecordId;
    }

    /**
     * @param \IMS\Query\Type\BibliographicRecordIdType $FirstBibliographicRecordId
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withFirstBibliographicRecordId($FirstBibliographicRecordId)
    {
        $new = clone $this;
        $new->FirstBibliographicRecordId = $FirstBibliographicRecordId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CapacityType
     */
    public function getSpecifiedWidth()
    {
        return $this->SpecifiedWidth;
    }

    /**
     * @param \IMS\Query\Type\CapacityType $SpecifiedWidth
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withSpecifiedWidth($SpecifiedWidth)
    {
        $new = clone $this;
        $new->SpecifiedWidth = $SpecifiedWidth;

        return $new;
    }


}

