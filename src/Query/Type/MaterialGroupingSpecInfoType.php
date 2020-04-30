<?php

namespace IMS\Query\Type;

class MaterialGroupingSpecInfoType
{

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Query\Type\BranchConfigurationKeyType
     */
    private $BranchConfigurationKey = null;

    /**
     * @var \IMS\Query\Type\MaterialGroupingKeyType
     */
    private $MaterialGroupingKey = null;

    /**
     * @var \IMS\Query\Type\SpecNoType
     */
    private $SpecNo = null;

    /**
     * @var \IMS\Query\Type\MaterialGroupingLevelType
     */
    private $MaterialGroupingLevel = null;

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
     * @var int
     */
    private $CopiesMin = null;

    /**
     * @var int
     */
    private $CopiesMax = null;

    /**
     * @var \IMS\Query\Type\CapacityType
     */
    private $Sum = null;

    /**
     * @var int
     */
    private $NumberOfItems = null;

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $BranchKey
     * @return MaterialGroupingSpecInfoType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchConfigurationKeyType
     */
    public function getBranchConfigurationKey()
    {
        return $this->BranchConfigurationKey;
    }

    /**
     * @param \IMS\Query\Type\BranchConfigurationKeyType $BranchConfigurationKey
     * @return MaterialGroupingSpecInfoType
     */
    public function withBranchConfigurationKey($BranchConfigurationKey)
    {
        $new = clone $this;
        $new->BranchConfigurationKey = $BranchConfigurationKey;

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
     * @return MaterialGroupingSpecInfoType
     */
    public function withMaterialGroupingKey($MaterialGroupingKey)
    {
        $new = clone $this;
        $new->MaterialGroupingKey = $MaterialGroupingKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SpecNoType
     */
    public function getSpecNo()
    {
        return $this->SpecNo;
    }

    /**
     * @param \IMS\Query\Type\SpecNoType $SpecNo
     * @return MaterialGroupingSpecInfoType
     */
    public function withSpecNo($SpecNo)
    {
        $new = clone $this;
        $new->SpecNo = $SpecNo;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialGroupingLevelType
     */
    public function getMaterialGroupingLevel()
    {
        return $this->MaterialGroupingLevel;
    }

    /**
     * @param \IMS\Query\Type\MaterialGroupingLevelType $MaterialGroupingLevel
     * @return MaterialGroupingSpecInfoType
     */
    public function withMaterialGroupingLevel($MaterialGroupingLevel)
    {
        $new = clone $this;
        $new->MaterialGroupingLevel = $MaterialGroupingLevel;

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
     * @return MaterialGroupingSpecInfoType
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
     * @return MaterialGroupingSpecInfoType
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
     * @return MaterialGroupingSpecInfoType
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
     * @return MaterialGroupingSpecInfoType
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
     * @return MaterialGroupingSpecInfoType
     */
    public function withMaterialTypeKey($MaterialTypeKey)
    {
        $new = clone $this;
        $new->MaterialTypeKey = $MaterialTypeKey;

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
     * @return MaterialGroupingSpecInfoType
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
     * @return MaterialGroupingSpecInfoType
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
     * @return MaterialGroupingSpecInfoType
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
     * @return MaterialGroupingSpecInfoType
     */
    public function withAlphabetisationRangeEnd($AlphabetisationRangeEnd)
    {
        $new = clone $this;
        $new->AlphabetisationRangeEnd = $AlphabetisationRangeEnd;

        return $new;
    }

    /**
     * @return int
     */
    public function getCopiesMin()
    {
        return $this->CopiesMin;
    }

    /**
     * @param int $CopiesMin
     * @return MaterialGroupingSpecInfoType
     */
    public function withCopiesMin($CopiesMin)
    {
        $new = clone $this;
        $new->CopiesMin = $CopiesMin;

        return $new;
    }

    /**
     * @return int
     */
    public function getCopiesMax()
    {
        return $this->CopiesMax;
    }

    /**
     * @param int $CopiesMax
     * @return MaterialGroupingSpecInfoType
     */
    public function withCopiesMax($CopiesMax)
    {
        $new = clone $this;
        $new->CopiesMax = $CopiesMax;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CapacityType
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * @param \IMS\Query\Type\CapacityType $Sum
     * @return MaterialGroupingSpecInfoType
     */
    public function withSum($Sum)
    {
        $new = clone $this;
        $new->Sum = $Sum;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfItems()
    {
        return $this->NumberOfItems;
    }

    /**
     * @param int $NumberOfItems
     * @return MaterialGroupingSpecInfoType
     */
    public function withNumberOfItems($NumberOfItems)
    {
        $new = clone $this;
        $new->NumberOfItems = $NumberOfItems;

        return $new;
    }


}

