<?php

namespace IMS\Query\Type;

class MaterialWidthWithoutPageCountInfoType
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
    private $Width = null;

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * @param int $Position
     * @return MaterialWidthWithoutPageCountInfoType
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
     * @return MaterialWidthWithoutPageCountInfoType
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
     * @return MaterialWidthWithoutPageCountInfoType
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
     * @return MaterialWidthWithoutPageCountInfoType
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
     * @return MaterialWidthWithoutPageCountInfoType
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
     * @return MaterialWidthWithoutPageCountInfoType
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
     * @return MaterialWidthWithoutPageCountInfoType
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
     * @return MaterialWidthWithoutPageCountInfoType
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
     * @return MaterialWidthWithoutPageCountInfoType
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
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param \IMS\Query\Type\CapacityType $Width
     * @return MaterialWidthWithoutPageCountInfoType
     */
    public function withWidth($Width)
    {
        $new = clone $this;
        $new->Width = $Width;

        return $new;
    }


}

