<?php

namespace IMS\Query\Type;

class FindBibliographicRecords
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\TitleType
     */
    private $Title = null;

    /**
     * @var \IMS\Query\Type\AuthorType
     */
    private $Author = null;

    /**
     * @var \IMS\Query\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var \IMS\Query\Type\BibliographicRecordIdType
     */
    private $BibliographicRecordId = null;

    /**
     * @var \IMS\Query\Type\ClassificationRangeType
     */
    private $ClassificationRangeStart = null;

    /**
     * @var \IMS\Query\Type\ClassificationRangeType
     */
    private $ClassificationRangeEnd = null;

    /**
     * @var \IMS\Query\Type\AlphabetisationRangeType
     */
    private $AlphabetisationRangeStart = null;

    /**
     * @var \IMS\Query\Type\AlphabetisationRangeType
     */
    private $AlphabetisationRangeEnd = null;

    /**
     * @var bool
     */
    private $ComplexClassificationAlphabetisation = null;

    /**
     * @var \IMS\Query\Type\CategoryKeyType
     */
    private $CategoryKey = null;

    /**
     * @var bool
     */
    private $LifecycleLocked = null;

    /**
     * @var \IMS\Query\Type\FloatCodeKeyType
     */
    private $FloatCodeKey = null;

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $FixedBranchKey = null;

    /**
     * @var \IMS\Query\Type\DepartmentKeyType
     */
    private $FixedDepartmentKey = null;

    /**
     * @var \IMS\Query\Type\IlsLocationKeyType
     */
    private $IlsLocationKey = null;

    /**
     * @var \IMS\Query\Type\IlsSublocationKeyType
     */
    private $IlsSublocationKey = null;

    /**
     * @var \IMS\Query\Type\CollectionKeyType
     */
    private $CollectionKey = null;

    /**
     * @var \IMS\Query\Type\MaterialTypeKeyType
     */
    private $MaterialTypeKey = null;

    /**
     * @var \DateTime
     */
    private $AccessionDateStart = null;

    /**
     * @var \DateTime
     */
    private $AccessionDateEnd = null;

    /**
     * @var bool
     */
    private $Excluded = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return FindBibliographicRecords
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

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
     * @return FindBibliographicRecords
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
     * @return FindBibliographicRecords
     */
    public function withAuthor($Author)
    {
        $new = clone $this;
        $new->Author = $Author;

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
     * @return FindBibliographicRecords
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

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
     * @return FindBibliographicRecords
     */
    public function withBibliographicRecordId($BibliographicRecordId)
    {
        $new = clone $this;
        $new->BibliographicRecordId = $BibliographicRecordId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ClassificationRangeType
     */
    public function getClassificationRangeStart()
    {
        return $this->ClassificationRangeStart;
    }

    /**
     * @param \IMS\Query\Type\ClassificationRangeType $ClassificationRangeStart
     * @return FindBibliographicRecords
     */
    public function withClassificationRangeStart($ClassificationRangeStart)
    {
        $new = clone $this;
        $new->ClassificationRangeStart = $ClassificationRangeStart;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ClassificationRangeType
     */
    public function getClassificationRangeEnd()
    {
        return $this->ClassificationRangeEnd;
    }

    /**
     * @param \IMS\Query\Type\ClassificationRangeType $ClassificationRangeEnd
     * @return FindBibliographicRecords
     */
    public function withClassificationRangeEnd($ClassificationRangeEnd)
    {
        $new = clone $this;
        $new->ClassificationRangeEnd = $ClassificationRangeEnd;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\AlphabetisationRangeType
     */
    public function getAlphabetisationRangeStart()
    {
        return $this->AlphabetisationRangeStart;
    }

    /**
     * @param \IMS\Query\Type\AlphabetisationRangeType $AlphabetisationRangeStart
     * @return FindBibliographicRecords
     */
    public function withAlphabetisationRangeStart($AlphabetisationRangeStart)
    {
        $new = clone $this;
        $new->AlphabetisationRangeStart = $AlphabetisationRangeStart;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\AlphabetisationRangeType
     */
    public function getAlphabetisationRangeEnd()
    {
        return $this->AlphabetisationRangeEnd;
    }

    /**
     * @param \IMS\Query\Type\AlphabetisationRangeType $AlphabetisationRangeEnd
     * @return FindBibliographicRecords
     */
    public function withAlphabetisationRangeEnd($AlphabetisationRangeEnd)
    {
        $new = clone $this;
        $new->AlphabetisationRangeEnd = $AlphabetisationRangeEnd;

        return $new;
    }

    /**
     * @return bool
     */
    public function getComplexClassificationAlphabetisation()
    {
        return $this->ComplexClassificationAlphabetisation;
    }

    /**
     * @param bool $ComplexClassificationAlphabetisation
     * @return FindBibliographicRecords
     */
    public function withComplexClassificationAlphabetisation($ComplexClassificationAlphabetisation)
    {
        $new = clone $this;
        $new->ComplexClassificationAlphabetisation = $ComplexClassificationAlphabetisation;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CategoryKeyType
     */
    public function getCategoryKey()
    {
        return $this->CategoryKey;
    }

    /**
     * @param \IMS\Query\Type\CategoryKeyType $CategoryKey
     * @return FindBibliographicRecords
     */
    public function withCategoryKey($CategoryKey)
    {
        $new = clone $this;
        $new->CategoryKey = $CategoryKey;

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
     * @return FindBibliographicRecords
     */
    public function withLifecycleLocked($LifecycleLocked)
    {
        $new = clone $this;
        $new->LifecycleLocked = $LifecycleLocked;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\FloatCodeKeyType
     */
    public function getFloatCodeKey()
    {
        return $this->FloatCodeKey;
    }

    /**
     * @param \IMS\Query\Type\FloatCodeKeyType $FloatCodeKey
     * @return FindBibliographicRecords
     */
    public function withFloatCodeKey($FloatCodeKey)
    {
        $new = clone $this;
        $new->FloatCodeKey = $FloatCodeKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getFixedBranchKey()
    {
        return $this->FixedBranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $FixedBranchKey
     * @return FindBibliographicRecords
     */
    public function withFixedBranchKey($FixedBranchKey)
    {
        $new = clone $this;
        $new->FixedBranchKey = $FixedBranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DepartmentKeyType
     */
    public function getFixedDepartmentKey()
    {
        return $this->FixedDepartmentKey;
    }

    /**
     * @param \IMS\Query\Type\DepartmentKeyType $FixedDepartmentKey
     * @return FindBibliographicRecords
     */
    public function withFixedDepartmentKey($FixedDepartmentKey)
    {
        $new = clone $this;
        $new->FixedDepartmentKey = $FixedDepartmentKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsLocationKeyType
     */
    public function getIlsLocationKey()
    {
        return $this->IlsLocationKey;
    }

    /**
     * @param \IMS\Query\Type\IlsLocationKeyType $IlsLocationKey
     * @return FindBibliographicRecords
     */
    public function withIlsLocationKey($IlsLocationKey)
    {
        $new = clone $this;
        $new->IlsLocationKey = $IlsLocationKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsSublocationKeyType
     */
    public function getIlsSublocationKey()
    {
        return $this->IlsSublocationKey;
    }

    /**
     * @param \IMS\Query\Type\IlsSublocationKeyType $IlsSublocationKey
     * @return FindBibliographicRecords
     */
    public function withIlsSublocationKey($IlsSublocationKey)
    {
        $new = clone $this;
        $new->IlsSublocationKey = $IlsSublocationKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CollectionKeyType
     */
    public function getCollectionKey()
    {
        return $this->CollectionKey;
    }

    /**
     * @param \IMS\Query\Type\CollectionKeyType $CollectionKey
     * @return FindBibliographicRecords
     */
    public function withCollectionKey($CollectionKey)
    {
        $new = clone $this;
        $new->CollectionKey = $CollectionKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialTypeKeyType
     */
    public function getMaterialTypeKey()
    {
        return $this->MaterialTypeKey;
    }

    /**
     * @param \IMS\Query\Type\MaterialTypeKeyType $MaterialTypeKey
     * @return FindBibliographicRecords
     */
    public function withMaterialTypeKey($MaterialTypeKey)
    {
        $new = clone $this;
        $new->MaterialTypeKey = $MaterialTypeKey;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getAccessionDateStart()
    {
        return $this->AccessionDateStart;
    }

    /**
     * @param \DateTime $AccessionDateStart
     * @return FindBibliographicRecords
     */
    public function withAccessionDateStart($AccessionDateStart)
    {
        $new = clone $this;
        $new->AccessionDateStart = $AccessionDateStart;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getAccessionDateEnd()
    {
        return $this->AccessionDateEnd;
    }

    /**
     * @param \DateTime $AccessionDateEnd
     * @return FindBibliographicRecords
     */
    public function withAccessionDateEnd($AccessionDateEnd)
    {
        $new = clone $this;
        $new->AccessionDateEnd = $AccessionDateEnd;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExcluded()
    {
        return $this->Excluded;
    }

    /**
     * @param bool $Excluded
     * @return FindBibliographicRecords
     */
    public function withExcluded($Excluded)
    {
        $new = clone $this;
        $new->Excluded = $Excluded;

        return $new;
    }


}

