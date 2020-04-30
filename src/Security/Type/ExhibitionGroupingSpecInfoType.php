<?php

namespace IMS\Security\Type;

class ExhibitionGroupingSpecInfoType
{

    /**
     * @var \IMS\Security\Type\SpecNoType
     */
    private $SpecNo = null;

    /**
     * @var \IMS\Security\Type\DepartmentTypeKeyType
     */
    private $DepartmentTypeKey = null;

    /**
     * @var \IMS\Security\Type\IlsLocationKeyType
     */
    private $IlsLocationKey = null;

    /**
     * @var \IMS\Security\Type\IlsSublocationKeyType
     */
    private $IlsSublocationKey = null;

    /**
     * @var \IMS\Security\Type\CollectionKeyType
     */
    private $CollectionKey = null;

    /**
     * @var \IMS\Security\Type\MaterialTypeKeyType
     */
    private $MaterialTypeKey = null;

    /**
     * @var \IMS\Security\Type\ClassificationRangeType
     */
    private $ClassificationRangeStart = null;

    /**
     * @var \IMS\Security\Type\ClassificationRangeType
     */
    private $ClassificationRangeEnd = null;

    /**
     * @var int
     */
    private $MaxAge = null;

    /**
     * @var \IMS\Security\Type\CategoryKeyType
     */
    private $CategoryKey = null;

    /**
     * @return \IMS\Security\Type\SpecNoType
     */
    public function getSpecNo()
    {
        return $this->SpecNo;
    }

    /**
     * @param \IMS\Security\Type\SpecNoType $SpecNo
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withSpecNo($SpecNo)
    {
        $new = clone $this;
        $new->SpecNo = $SpecNo;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DepartmentTypeKeyType
     */
    public function getDepartmentTypeKey()
    {
        return $this->DepartmentTypeKey;
    }

    /**
     * @param \IMS\Security\Type\DepartmentTypeKeyType $DepartmentTypeKey
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withDepartmentTypeKey($DepartmentTypeKey)
    {
        $new = clone $this;
        $new->DepartmentTypeKey = $DepartmentTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsLocationKeyType
     */
    public function getIlsLocationKey()
    {
        return $this->IlsLocationKey;
    }

    /**
     * @param \IMS\Security\Type\IlsLocationKeyType $IlsLocationKey
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withIlsLocationKey($IlsLocationKey)
    {
        $new = clone $this;
        $new->IlsLocationKey = $IlsLocationKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsSublocationKeyType
     */
    public function getIlsSublocationKey()
    {
        return $this->IlsSublocationKey;
    }

    /**
     * @param \IMS\Security\Type\IlsSublocationKeyType $IlsSublocationKey
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withIlsSublocationKey($IlsSublocationKey)
    {
        $new = clone $this;
        $new->IlsSublocationKey = $IlsSublocationKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CollectionKeyType
     */
    public function getCollectionKey()
    {
        return $this->CollectionKey;
    }

    /**
     * @param \IMS\Security\Type\CollectionKeyType $CollectionKey
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withCollectionKey($CollectionKey)
    {
        $new = clone $this;
        $new->CollectionKey = $CollectionKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\MaterialTypeKeyType
     */
    public function getMaterialTypeKey()
    {
        return $this->MaterialTypeKey;
    }

    /**
     * @param \IMS\Security\Type\MaterialTypeKeyType $MaterialTypeKey
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withMaterialTypeKey($MaterialTypeKey)
    {
        $new = clone $this;
        $new->MaterialTypeKey = $MaterialTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ClassificationRangeType
     */
    public function getClassificationRangeStart()
    {
        return $this->ClassificationRangeStart;
    }

    /**
     * @param \IMS\Security\Type\ClassificationRangeType $ClassificationRangeStart
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withClassificationRangeStart($ClassificationRangeStart)
    {
        $new = clone $this;
        $new->ClassificationRangeStart = $ClassificationRangeStart;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ClassificationRangeType
     */
    public function getClassificationRangeEnd()
    {
        return $this->ClassificationRangeEnd;
    }

    /**
     * @param \IMS\Security\Type\ClassificationRangeType $ClassificationRangeEnd
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
     * @return \IMS\Security\Type\CategoryKeyType
     */
    public function getCategoryKey()
    {
        return $this->CategoryKey;
    }

    /**
     * @param \IMS\Security\Type\CategoryKeyType $CategoryKey
     * @return ExhibitionGroupingSpecInfoType
     */
    public function withCategoryKey($CategoryKey)
    {
        $new = clone $this;
        $new->CategoryKey = $CategoryKey;

        return $new;
    }


}

