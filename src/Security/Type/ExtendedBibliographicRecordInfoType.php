<?php

namespace IMS\Security\Type;

class ExtendedBibliographicRecordInfoType
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
     * @var \IMS\Security\Type\SimpleCategoryInfoType
     */
    private $Category = null;

    /**
     * @var bool
     */
    private $LifecycleLocked = null;

    /**
     * @var \IMS\Security\Type\AuthorType
     */
    private $Author = null;

    /**
     * @var \IMS\Security\Type\ClassificationType
     */
    private $Classification = null;

    /**
     * @var \IMS\Security\Type\ClassificationGroupInfoType
     */
    private $ClassificationGroup = null;

    /**
     * @var \IMS\Security\Type\AlphabetisationType
     */
    private $Alphabetisation = null;

    /**
     * @var \IMS\Security\Type\MaterialTypeInfoType
     */
    private $MaterialType = null;

    /**
     * @var \IMS\Security\Type\SimpleCategoryInfoType
     */
    private $InitialCategory = null;

    /**
     * @var \IMS\Security\Type\ClassificationDisplayType
     */
    private $ClassificationDisplay = null;

    /**
     * @var \IMS\Security\Type\MusicClassificationTextType
     */
    private $MusicClassificationText = null;

    /**
     * @var \IMS\Security\Type\PageCountTextType
     */
    private $PageCountText = null;

    /**
     * @var int
     */
    private $ExtractedPageCount = null;

    /**
     * @var \IMS\Security\Type\EditionType
     */
    private $Edition = null;

    /**
     * @var \IMS\Security\Type\PhysicalDescriptionType
     */
    private $PhysicalDescription = null;

    /**
     * @var \IMS\Security\Type\SeriesType
     */
    private $Series = null;

    /**
     * @var \IMS\Security\Type\RecordLabelNumberType
     */
    private $RecordLabelNumber = null;

    /**
     * @var \IMS\Security\Type\BibliographicRecordIdType
     */
    private $FirstBibliographicRecordId = null;

    /**
     * @var \IMS\Security\Type\CapacityType
     */
    private $SpecifiedWidth = null;

    /**
     * @return \IMS\Security\Type\BibliographicRecordKeyType
     */
    public function getBibliographicRecordKey()
    {
        return $this->BibliographicRecordKey;
    }

    /**
     * @param \IMS\Security\Type\BibliographicRecordKeyType $BibliographicRecordKey
     * @return ExtendedBibliographicRecordInfoType
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
     * @return ExtendedBibliographicRecordInfoType
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
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

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
     * @return \IMS\Security\Type\AuthorType
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * @param \IMS\Security\Type\AuthorType $Author
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withAuthor($Author)
    {
        $new = clone $this;
        $new->Author = $Author;

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
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withClassification($Classification)
    {
        $new = clone $this;
        $new->Classification = $Classification;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ClassificationGroupInfoType
     */
    public function getClassificationGroup()
    {
        return $this->ClassificationGroup;
    }

    /**
     * @param \IMS\Security\Type\ClassificationGroupInfoType $ClassificationGroup
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withClassificationGroup($ClassificationGroup)
    {
        $new = clone $this;
        $new->ClassificationGroup = $ClassificationGroup;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\AlphabetisationType
     */
    public function getAlphabetisation()
    {
        return $this->Alphabetisation;
    }

    /**
     * @param \IMS\Security\Type\AlphabetisationType $Alphabetisation
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withAlphabetisation($Alphabetisation)
    {
        $new = clone $this;
        $new->Alphabetisation = $Alphabetisation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\MaterialTypeInfoType
     */
    public function getMaterialType()
    {
        return $this->MaterialType;
    }

    /**
     * @param \IMS\Security\Type\MaterialTypeInfoType $MaterialType
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withMaterialType($MaterialType)
    {
        $new = clone $this;
        $new->MaterialType = $MaterialType;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SimpleCategoryInfoType
     */
    public function getInitialCategory()
    {
        return $this->InitialCategory;
    }

    /**
     * @param \IMS\Security\Type\SimpleCategoryInfoType $InitialCategory
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withInitialCategory($InitialCategory)
    {
        $new = clone $this;
        $new->InitialCategory = $InitialCategory;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ClassificationDisplayType
     */
    public function getClassificationDisplay()
    {
        return $this->ClassificationDisplay;
    }

    /**
     * @param \IMS\Security\Type\ClassificationDisplayType $ClassificationDisplay
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withClassificationDisplay($ClassificationDisplay)
    {
        $new = clone $this;
        $new->ClassificationDisplay = $ClassificationDisplay;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\MusicClassificationTextType
     */
    public function getMusicClassificationText()
    {
        return $this->MusicClassificationText;
    }

    /**
     * @param \IMS\Security\Type\MusicClassificationTextType $MusicClassificationText
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withMusicClassificationText($MusicClassificationText)
    {
        $new = clone $this;
        $new->MusicClassificationText = $MusicClassificationText;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PageCountTextType
     */
    public function getPageCountText()
    {
        return $this->PageCountText;
    }

    /**
     * @param \IMS\Security\Type\PageCountTextType $PageCountText
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
     * @return \IMS\Security\Type\EditionType
     */
    public function getEdition()
    {
        return $this->Edition;
    }

    /**
     * @param \IMS\Security\Type\EditionType $Edition
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withEdition($Edition)
    {
        $new = clone $this;
        $new->Edition = $Edition;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PhysicalDescriptionType
     */
    public function getPhysicalDescription()
    {
        return $this->PhysicalDescription;
    }

    /**
     * @param \IMS\Security\Type\PhysicalDescriptionType $PhysicalDescription
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withPhysicalDescription($PhysicalDescription)
    {
        $new = clone $this;
        $new->PhysicalDescription = $PhysicalDescription;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SeriesType
     */
    public function getSeries()
    {
        return $this->Series;
    }

    /**
     * @param \IMS\Security\Type\SeriesType $Series
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withSeries($Series)
    {
        $new = clone $this;
        $new->Series = $Series;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\RecordLabelNumberType
     */
    public function getRecordLabelNumber()
    {
        return $this->RecordLabelNumber;
    }

    /**
     * @param \IMS\Security\Type\RecordLabelNumberType $RecordLabelNumber
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withRecordLabelNumber($RecordLabelNumber)
    {
        $new = clone $this;
        $new->RecordLabelNumber = $RecordLabelNumber;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BibliographicRecordIdType
     */
    public function getFirstBibliographicRecordId()
    {
        return $this->FirstBibliographicRecordId;
    }

    /**
     * @param \IMS\Security\Type\BibliographicRecordIdType $FirstBibliographicRecordId
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withFirstBibliographicRecordId($FirstBibliographicRecordId)
    {
        $new = clone $this;
        $new->FirstBibliographicRecordId = $FirstBibliographicRecordId;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CapacityType
     */
    public function getSpecifiedWidth()
    {
        return $this->SpecifiedWidth;
    }

    /**
     * @param \IMS\Security\Type\CapacityType $SpecifiedWidth
     * @return ExtendedBibliographicRecordInfoType
     */
    public function withSpecifiedWidth($SpecifiedWidth)
    {
        $new = clone $this;
        $new->SpecifiedWidth = $SpecifiedWidth;

        return $new;
    }


}

