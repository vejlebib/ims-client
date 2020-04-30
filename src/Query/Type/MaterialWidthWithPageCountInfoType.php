<?php

namespace IMS\Query\Type;

class MaterialWidthWithPageCountInfoType
{

    /**
     * @var int
     */
    private $Position = null;

    /**
     * @var \IMS\Query\Type\MaterialWidthKeyType
     */
    private $MaterialWidthKey = null;

    /**
     * @var \IMS\Query\Type\DepartmentTypeInfoType
     */
    private $DepartmentType = null;

    /**
     * @var \IMS\Query\Type\IlsLocationInfoType
     */
    private $IlsLocation = null;

    /**
     * @var \IMS\Query\Type\IlsSublocationInfoType
     */
    private $IlsSublocation = null;

    /**
     * @var \IMS\Query\Type\CollectionInfoType
     */
    private $Collection = null;

    /**
     * @var \IMS\Query\Type\MaterialTypeInfoType
     */
    private $MaterialType = null;

    /**
     * @var \IMS\Query\Type\ClassificationRangeType
     */
    private $ClassificationRangeStart = null;

    /**
     * @var \IMS\Query\Type\ClassificationRangeType
     */
    private $ClassificationRangeEnd = null;

    /**
     * @var \IMS\Query\Type\CapacityType
     */
    private $PageWidth = null;

    /**
     * @var \IMS\Query\Type\CapacityType
     */
    private $CoverWidth = null;

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * @param int $Position
     * @return MaterialWidthWithPageCountInfoType
     */
    public function withPosition($Position)
    {
        $new = clone $this;
        $new->Position = $Position;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialWidthKeyType
     */
    public function getMaterialWidthKey()
    {
        return $this->MaterialWidthKey;
    }

    /**
     * @param \IMS\Query\Type\MaterialWidthKeyType $MaterialWidthKey
     * @return MaterialWidthWithPageCountInfoType
     */
    public function withMaterialWidthKey($MaterialWidthKey)
    {
        $new = clone $this;
        $new->MaterialWidthKey = $MaterialWidthKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DepartmentTypeInfoType
     */
    public function getDepartmentType()
    {
        return $this->DepartmentType;
    }

    /**
     * @param \IMS\Query\Type\DepartmentTypeInfoType $DepartmentType
     * @return MaterialWidthWithPageCountInfoType
     */
    public function withDepartmentType($DepartmentType)
    {
        $new = clone $this;
        $new->DepartmentType = $DepartmentType;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsLocationInfoType
     */
    public function getIlsLocation()
    {
        return $this->IlsLocation;
    }

    /**
     * @param \IMS\Query\Type\IlsLocationInfoType $IlsLocation
     * @return MaterialWidthWithPageCountInfoType
     */
    public function withIlsLocation($IlsLocation)
    {
        $new = clone $this;
        $new->IlsLocation = $IlsLocation;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsSublocationInfoType
     */
    public function getIlsSublocation()
    {
        return $this->IlsSublocation;
    }

    /**
     * @param \IMS\Query\Type\IlsSublocationInfoType $IlsSublocation
     * @return MaterialWidthWithPageCountInfoType
     */
    public function withIlsSublocation($IlsSublocation)
    {
        $new = clone $this;
        $new->IlsSublocation = $IlsSublocation;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CollectionInfoType
     */
    public function getCollection()
    {
        return $this->Collection;
    }

    /**
     * @param \IMS\Query\Type\CollectionInfoType $Collection
     * @return MaterialWidthWithPageCountInfoType
     */
    public function withCollection($Collection)
    {
        $new = clone $this;
        $new->Collection = $Collection;

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
     * @return MaterialWidthWithPageCountInfoType
     */
    public function withMaterialType($MaterialType)
    {
        $new = clone $this;
        $new->MaterialType = $MaterialType;

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
     * @return MaterialWidthWithPageCountInfoType
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
     * @return MaterialWidthWithPageCountInfoType
     */
    public function withClassificationRangeEnd($ClassificationRangeEnd)
    {
        $new = clone $this;
        $new->ClassificationRangeEnd = $ClassificationRangeEnd;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CapacityType
     */
    public function getPageWidth()
    {
        return $this->PageWidth;
    }

    /**
     * @param \IMS\Query\Type\CapacityType $PageWidth
     * @return MaterialWidthWithPageCountInfoType
     */
    public function withPageWidth($PageWidth)
    {
        $new = clone $this;
        $new->PageWidth = $PageWidth;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CapacityType
     */
    public function getCoverWidth()
    {
        return $this->CoverWidth;
    }

    /**
     * @param \IMS\Query\Type\CapacityType $CoverWidth
     * @return MaterialWidthWithPageCountInfoType
     */
    public function withCoverWidth($CoverWidth)
    {
        $new = clone $this;
        $new->CoverWidth = $CoverWidth;

        return $new;
    }


}

