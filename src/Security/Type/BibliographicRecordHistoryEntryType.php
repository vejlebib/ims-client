<?php

namespace IMS\Security\Type;

class BibliographicRecordHistoryEntryType
{

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
     * @var \IMS\Security\Type\ClassificationType
     */
    private $Classification = null;

    /**
     * @var \IMS\Security\Type\ClassificationGroupKeyType
     */
    private $ClassificationGroupKey = null;

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
     * @var bool
     */
    private $DeletedInIls = null;

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
     * @var \IMS\Security\Type\SimpleCategoryInfoType
     */
    private $CurrentCategory = null;

    /**
     * @var bool
     */
    private $LifecycleLocked = null;

    /**
     * @return \IMS\Security\Type\BibliographicRecordIdType
     */
    public function getBibliographicRecordId()
    {
        return $this->BibliographicRecordId;
    }

    /**
     * @param \IMS\Security\Type\BibliographicRecordIdType $BibliographicRecordId
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
     */
    public function withClassification($Classification)
    {
        $new = clone $this;
        $new->Classification = $Classification;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ClassificationGroupKeyType
     */
    public function getClassificationGroupKey()
    {
        return $this->ClassificationGroupKey;
    }

    /**
     * @param \IMS\Security\Type\ClassificationGroupKeyType $ClassificationGroupKey
     * @return BibliographicRecordHistoryEntryType
     */
    public function withClassificationGroupKey($ClassificationGroupKey)
    {
        $new = clone $this;
        $new->ClassificationGroupKey = $ClassificationGroupKey;

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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return \IMS\Security\Type\ClassificationDisplayType
     */
    public function getClassificationDisplay()
    {
        return $this->ClassificationDisplay;
    }

    /**
     * @param \IMS\Security\Type\ClassificationDisplayType $ClassificationDisplay
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
     */
    public function withPageCountText($PageCountText)
    {
        $new = clone $this;
        $new->PageCountText = $PageCountText;

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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
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
     * @return BibliographicRecordHistoryEntryType
     */
    public function withFirstBibliographicRecordId($FirstBibliographicRecordId)
    {
        $new = clone $this;
        $new->FirstBibliographicRecordId = $FirstBibliographicRecordId;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SimpleCategoryInfoType
     */
    public function getCurrentCategory()
    {
        return $this->CurrentCategory;
    }

    /**
     * @param \IMS\Security\Type\SimpleCategoryInfoType $CurrentCategory
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

