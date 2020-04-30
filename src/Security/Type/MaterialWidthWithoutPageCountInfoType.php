<?php

namespace IMS\Security\Type;

class MaterialWidthWithoutPageCountInfoType
{

    /**
     * @var int
     */
    private $Position = null;

    /**
     * @var \IMS\Security\Type\MaterialWidthKeyType
     */
    private $MaterialWidthKey = null;

    /**
     * @var \IMS\Security\Type\DepartmentTypeInfoType
     */
    private $DepartmentType = null;

    /**
     * @var \IMS\Security\Type\IlsLocationInfoType
     */
    private $IlsLocation = null;

    /**
     * @var \IMS\Security\Type\IlsSublocationInfoType
     */
    private $IlsSublocation = null;

    /**
     * @var \IMS\Security\Type\CollectionInfoType
     */
    private $Collection = null;

    /**
     * @var \IMS\Security\Type\MaterialTypeInfoType
     */
    private $MaterialType = null;

    /**
     * @var \IMS\Security\Type\ClassificationRangeType
     */
    private $ClassificationRangeStart = null;

    /**
     * @var \IMS\Security\Type\ClassificationRangeType
     */
    private $ClassificationRangeEnd = null;

    /**
     * @var \IMS\Security\Type\CapacityType
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
     * @return \IMS\Security\Type\MaterialWidthKeyType
     */
    public function getMaterialWidthKey()
    {
        return $this->MaterialWidthKey;
    }

    /**
     * @param \IMS\Security\Type\MaterialWidthKeyType $MaterialWidthKey
     * @return MaterialWidthWithoutPageCountInfoType
     */
    public function withMaterialWidthKey($MaterialWidthKey)
    {
        $new = clone $this;
        $new->MaterialWidthKey = $MaterialWidthKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DepartmentTypeInfoType
     */
    public function getDepartmentType()
    {
        return $this->DepartmentType;
    }

    /**
     * @param \IMS\Security\Type\DepartmentTypeInfoType $DepartmentType
     * @return MaterialWidthWithoutPageCountInfoType
     */
    public function withDepartmentType($DepartmentType)
    {
        $new = clone $this;
        $new->DepartmentType = $DepartmentType;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsLocationInfoType
     */
    public function getIlsLocation()
    {
        return $this->IlsLocation;
    }

    /**
     * @param \IMS\Security\Type\IlsLocationInfoType $IlsLocation
     * @return MaterialWidthWithoutPageCountInfoType
     */
    public function withIlsLocation($IlsLocation)
    {
        $new = clone $this;
        $new->IlsLocation = $IlsLocation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsSublocationInfoType
     */
    public function getIlsSublocation()
    {
        return $this->IlsSublocation;
    }

    /**
     * @param \IMS\Security\Type\IlsSublocationInfoType $IlsSublocation
     * @return MaterialWidthWithoutPageCountInfoType
     */
    public function withIlsSublocation($IlsSublocation)
    {
        $new = clone $this;
        $new->IlsSublocation = $IlsSublocation;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CollectionInfoType
     */
    public function getCollection()
    {
        return $this->Collection;
    }

    /**
     * @param \IMS\Security\Type\CollectionInfoType $Collection
     * @return MaterialWidthWithoutPageCountInfoType
     */
    public function withCollection($Collection)
    {
        $new = clone $this;
        $new->Collection = $Collection;

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
     * @return MaterialWidthWithoutPageCountInfoType
     */
    public function withMaterialType($MaterialType)
    {
        $new = clone $this;
        $new->MaterialType = $MaterialType;

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
     * @return MaterialWidthWithoutPageCountInfoType
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
     * @return MaterialWidthWithoutPageCountInfoType
     */
    public function withClassificationRangeEnd($ClassificationRangeEnd)
    {
        $new = clone $this;
        $new->ClassificationRangeEnd = $ClassificationRangeEnd;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CapacityType
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param \IMS\Security\Type\CapacityType $Width
     * @return MaterialWidthWithoutPageCountInfoType
     */
    public function withWidth($Width)
    {
        $new = clone $this;
        $new->Width = $Width;

        return $new;
    }


}

