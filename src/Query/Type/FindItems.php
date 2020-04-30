<?php

namespace IMS\Query\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FindItems implements RequestInterface
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\AuthorType
     */
    private $Author = null;

    /**
     * @var \IMS\Query\Type\TitleType
     */
    private $Title = null;

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
    private $DepartmentKey = null;

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
     * @var \IMS\Query\Type\IlsStatusKeyType
     */
    private $IlsStatusKey = null;

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $CurrentBranchKey = null;

    /**
     * @var \IMS\Query\Type\MaterialGroupingKeyType
     */
    private $CurrentMaterialGroupingKey = null;

    /**
     * @var \IMS\Query\Type\LocationKeyType
     */
    private $CurrentLocationKey = null;

    /**
     * @var bool
     */
    private $IncludeSublocations = null;

    /**
     * @var bool
     */
    private $IncludeItemsInTransportUnits = null;

    /**
     * @var \DateTime
     */
    private $AccessionDateStart = null;

    /**
     * @var \DateTime
     */
    private $AccessionDateEnd = null;

    /**
     * @var \DateTime
     */
    private $LastCheckoutTimeStart = null;

    /**
     * @var \DateTime
     */
    private $LastCheckoutTimeEnd = null;

    /**
     * @var \DateTime
     */
    private $LastTransactionTimeStart = null;

    /**
     * @var \DateTime
     */
    private $LastTransactionTimeEnd = null;

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
     * @return FindItems
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

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
     * @return FindItems
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
     * @return FindItems
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

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
     * @return FindItems
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
     * @return FindItems
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
     * @return FindItems
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
     * @return FindItems
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
     * @return FindItems
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
     * @return FindItems
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
     * @return FindItems
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
     * @return FindItems
     */
    public function withCategoryKey($CategoryKey)
    {
        $new = clone $this;
        $new->CategoryKey = $CategoryKey;

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
     * @return FindItems
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
     * @return FindItems
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
    public function getDepartmentKey()
    {
        return $this->DepartmentKey;
    }

    /**
     * @param \IMS\Query\Type\DepartmentKeyType $DepartmentKey
     * @return FindItems
     */
    public function withDepartmentKey($DepartmentKey)
    {
        $new = clone $this;
        $new->DepartmentKey = $DepartmentKey;

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
     * @return FindItems
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
     * @return FindItems
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
     * @return FindItems
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
     * @return FindItems
     */
    public function withMaterialTypeKey($MaterialTypeKey)
    {
        $new = clone $this;
        $new->MaterialTypeKey = $MaterialTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsStatusKeyType
     */
    public function getIlsStatusKey()
    {
        return $this->IlsStatusKey;
    }

    /**
     * @param \IMS\Query\Type\IlsStatusKeyType $IlsStatusKey
     * @return FindItems
     */
    public function withIlsStatusKey($IlsStatusKey)
    {
        $new = clone $this;
        $new->IlsStatusKey = $IlsStatusKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getCurrentBranchKey()
    {
        return $this->CurrentBranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $CurrentBranchKey
     * @return FindItems
     */
    public function withCurrentBranchKey($CurrentBranchKey)
    {
        $new = clone $this;
        $new->CurrentBranchKey = $CurrentBranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialGroupingKeyType
     */
    public function getCurrentMaterialGroupingKey()
    {
        return $this->CurrentMaterialGroupingKey;
    }

    /**
     * @param \IMS\Query\Type\MaterialGroupingKeyType $CurrentMaterialGroupingKey
     * @return FindItems
     */
    public function withCurrentMaterialGroupingKey($CurrentMaterialGroupingKey)
    {
        $new = clone $this;
        $new->CurrentMaterialGroupingKey = $CurrentMaterialGroupingKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\LocationKeyType
     */
    public function getCurrentLocationKey()
    {
        return $this->CurrentLocationKey;
    }

    /**
     * @param \IMS\Query\Type\LocationKeyType $CurrentLocationKey
     * @return FindItems
     */
    public function withCurrentLocationKey($CurrentLocationKey)
    {
        $new = clone $this;
        $new->CurrentLocationKey = $CurrentLocationKey;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeSublocations()
    {
        return $this->IncludeSublocations;
    }

    /**
     * @param bool $IncludeSublocations
     * @return FindItems
     */
    public function withIncludeSublocations($IncludeSublocations)
    {
        $new = clone $this;
        $new->IncludeSublocations = $IncludeSublocations;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIncludeItemsInTransportUnits()
    {
        return $this->IncludeItemsInTransportUnits;
    }

    /**
     * @param bool $IncludeItemsInTransportUnits
     * @return FindItems
     */
    public function withIncludeItemsInTransportUnits($IncludeItemsInTransportUnits)
    {
        $new = clone $this;
        $new->IncludeItemsInTransportUnits = $IncludeItemsInTransportUnits;

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
     * @return FindItems
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
     * @return FindItems
     */
    public function withAccessionDateEnd($AccessionDateEnd)
    {
        $new = clone $this;
        $new->AccessionDateEnd = $AccessionDateEnd;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getLastCheckoutTimeStart()
    {
        return $this->LastCheckoutTimeStart;
    }

    /**
     * @param \DateTime $LastCheckoutTimeStart
     * @return FindItems
     */
    public function withLastCheckoutTimeStart($LastCheckoutTimeStart)
    {
        $new = clone $this;
        $new->LastCheckoutTimeStart = $LastCheckoutTimeStart;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getLastCheckoutTimeEnd()
    {
        return $this->LastCheckoutTimeEnd;
    }

    /**
     * @param \DateTime $LastCheckoutTimeEnd
     * @return FindItems
     */
    public function withLastCheckoutTimeEnd($LastCheckoutTimeEnd)
    {
        $new = clone $this;
        $new->LastCheckoutTimeEnd = $LastCheckoutTimeEnd;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getLastTransactionTimeStart()
    {
        return $this->LastTransactionTimeStart;
    }

    /**
     * @param \DateTime $LastTransactionTimeStart
     * @return FindItems
     */
    public function withLastTransactionTimeStart($LastTransactionTimeStart)
    {
        $new = clone $this;
        $new->LastTransactionTimeStart = $LastTransactionTimeStart;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getLastTransactionTimeEnd()
    {
        return $this->LastTransactionTimeEnd;
    }

    /**
     * @param \DateTime $LastTransactionTimeEnd
     * @return FindItems
     */
    public function withLastTransactionTimeEnd($LastTransactionTimeEnd)
    {
        $new = clone $this;
        $new->LastTransactionTimeEnd = $LastTransactionTimeEnd;

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
     * @return FindItems
     */
    public function withExcluded($Excluded)
    {
        $new = clone $this;
        $new->Excluded = $Excluded;

        return $new;
    }


}
