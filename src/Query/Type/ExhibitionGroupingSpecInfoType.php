<?php

namespace IMS\Query\Type;

class ExhibitionGroupingSpecInfoType
{

    /**
     * @var \IMS\Query\Type\SpecNoType
     */
    private $SpecNo = null;

    /**
     * @var \IMS\Query\Type\DepartmentTypeKeyType
     */
    private $DepartmentTypeKey = null;

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
     * @var int
     */
    private $MaxAge = null;

    /**
     * @var \IMS\Query\Type\CategoryKeyType
     */
    private $CategoryKey = null;

    /**
     * @return \IMS\Query\Type\SpecNoType
     */
    public function getSpecNo()
    {
        return $this->SpecNo;
    }

    /**
     * @param \IMS\Query\Type\SpecNoType $SpecNo
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withSpecNo($SpecNo)
    {
        $new = clone $this;
        $new->SpecNo = $SpecNo;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DepartmentTypeKeyType
     */
    public function getDepartmentTypeKey()
    {
        return $this->DepartmentTypeKey;
    }

    /**
     * @param \IMS\Query\Type\DepartmentTypeKeyType $DepartmentTypeKey
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withDepartmentTypeKey($DepartmentTypeKey)
    {
        $new = clone $this;
        $new->DepartmentTypeKey = $DepartmentTypeKey;

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
     * @return ExhibitionGroupingSpecInfoType
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
     * @return ExhibitionGroupingSpecInfoType
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
     * @return ExhibitionGroupingSpecInfoType
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
     * @return ExhibitionGroupingSpecInfoType
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
     * @return ExhibitionGroupingSpecInfoType
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
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withClassificationRangeEnd($ClassificationRangeEnd)
    {
        $new = clone $this;
        $new->ClassificationRangeEnd = $ClassificationRangeEnd;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxAge()
    {
        return $this->MaxAge;
    }

    /**
     * @param int $MaxAge
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withMaxAge($MaxAge)
    {
        $new = clone $this;
        $new->MaxAge = $MaxAge;

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
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withCategoryKey($CategoryKey)
    {
        $new = clone $this;
        $new->CategoryKey = $CategoryKey;

        return $new;
    }


}

