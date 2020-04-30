<?php

namespace IMS\Query\Type;

class BibliographicRecordHistoryEntryType
{

    /**
     * @var \IMS\Query\Type\BibliographicRecordIdType
     */
    private $BibliographicRecordId = null;

    /**
     * @var \IMS\Query\Type\TitleType
     */
    private $Title = null;

    /**
     * @var \IMS\Query\Type\AuthorType
     */
    private $Author = null;

    /**
     * @var \IMS\Query\Type\ClassificationType
     */
    private $Classification = null;

    /**
     * @var \IMS\Query\Type\ClassificationGroupKeyType
     */
    private $ClassificationGroupKey = null;

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
     * @var bool
     */
    private $DeletedInIls = null;

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
     * @var \IMS\Query\Type\SimpleCategoryInfoType
     */
    private $CurrentCategory = null;

    /**
     * @var bool
     */
    private $LifecycleLocked = null;

    /**
     * @return \IMS\Query\Type\BibliographicRecordIdType
     */
    public function getBibliographicRecordId()
    {
        return $this->BibliographicRecordId;
    }

    /**
     * @param \IMS\Query\Type\BibliographicRecordIdType $BibliographicRecordId
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
     */
    public function withClassification($Classification)
    {
        $new = clone $this;
        $new->Classification = $Classification;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ClassificationGroupKeyType
     */
    public function getClassificationGroupKey()
    {
        return $this->ClassificationGroupKey;
    }

    /**
     * @param \IMS\Query\Type\ClassificationGroupKeyType $ClassificationGroupKey
     * @return BibliographicRecordHistoryEntryType
     */
    public function withClassificationGroupKey($ClassificationGroupKey)
    {
        $new = clone $this;
        $new->ClassificationGroupKey = $ClassificationGroupKey;

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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
     */
    public function withInitialCategory($InitialCategory)
    {
        $new = clone $this;
        $new->InitialCategory = $InitialCategory;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDeletedInIls()
    {
        return $this->DeletedInIls;
    }

    /**
     * @param bool $DeletedInIls
     * @return BibliographicRecordHistoryEntryType
     */
    public function withDeletedInIls($DeletedInIls)
    {
        $new = clone $this;
        $new->DeletedInIls = $DeletedInIls;

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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
     */
    public function withPageCountText($PageCountText)
    {
        $new = clone $this;
        $new->PageCountText = $PageCountText;

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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
     */
    public function withFirstBibliographicRecordId($FirstBibliographicRecordId)
    {
        $new = clone $this;
        $new->FirstBibliographicRecordId = $FirstBibliographicRecordId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SimpleCategoryInfoType
     */
    public function getCurrentCategory()
    {
        return $this->CurrentCategory;
    }

    /**
     * @param \IMS\Query\Type\SimpleCategoryInfoType $CurrentCategory
     * @return BibliographicRecordHistoryEntryType
     */
    public function withCurrentCategory($CurrentCategory)
    {
        $new = clone $this;
        $new->CurrentCategory = $CurrentCategory;

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
     * @return BibliographicRecordHistoryEntryType
     */
    public function withLifecycleLocked($LifecycleLocked)
    {
        $new = clone $this;
        $new->LifecycleLocked = $LifecycleLocked;

        return $new;
    }


}

