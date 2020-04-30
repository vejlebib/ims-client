<?php

namespace IMS\Query\Type;

class ParameterType
{

    /**
     * @var \IMS\Query\Type\ParameterIdType
     */
    private $ParameterId = null;

    /**
     * @var \IMS\Query\Type\ParameterValueType
     */
    private $Value = null;

    /**
     * @var bool
     */
    private $IsSet = null;

    /**
     * @var bool
     */
    private $AllowNotSet = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\ParameterDescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Query\Type\ParameterGroupType
     */
    private $ParameterGroup = null;

    /**
     * @var \IMS\Query\Type\ParameterSortingType
     */
    private $Sorting = null;

    /**
     * @var \IMS\Query\Type\ParameterTypeKeyType
     */
    private $ParameterTypeKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $ParameterTypeName = null;

    /**
     * @var bool
     */
    private $AllowEmpty = null;

    /**
     * @var \IMS\Query\Type\ParameterValueType
     */
    private $DefaultValue = null;

    /**
     * @var \IMS\Query\Type\ParameterNumericValueType
     */
    private $MinNumericValue = null;

    /**
     * @var \IMS\Query\Type\ParameterNumericValueType
     */
    private $MaxNumericValue = null;

    /**
     * @var \IMS\Query\Type\ParameterStringLengthType
     */
    private $MinStringLength = null;

    /**
     * @var \IMS\Query\Type\ParameterStringLengthType
     */
    private $MaxStringLength = null;

    /**
     * @var \IMS\Query\Type\ParameterNumericPrecisionType
     */
    private $NumericPrecision = null;

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @return \IMS\Query\Type\ParameterIdType
     */
    public function getParameterId()
    {
        return $this->ParameterId;
    }

    /**
     * @param \IMS\Query\Type\ParameterIdType $ParameterId
     * @return ParameterType
     */
    public function withParameterId($ParameterId)
    {
        $new = clone $this;
        $new->ParameterId = $ParameterId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterValueType
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param \IMS\Query\Type\ParameterValueType $Value
     * @return ParameterType
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsSet()
    {
        return $this->IsSet;
    }

    /**
     * @param bool $IsSet
     * @return ParameterType
     */
    public function withIsSet($IsSet)
    {
        $new = clone $this;
        $new->IsSet = $IsSet;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowNotSet()
    {
        return $this->AllowNotSet;
    }

    /**
     * @param bool $AllowNotSet
     * @return ParameterType
     */
    public function withAllowNotSet($AllowNotSet)
    {
        $new = clone $this;
        $new->AllowNotSet = $AllowNotSet;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\NameType $Name
     * @return ParameterType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterDescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Query\Type\ParameterDescriptionType $Description
     * @return ParameterType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterGroupType
     */
    public function getParameterGroup()
    {
        return $this->ParameterGroup;
    }

    /**
     * @param \IMS\Query\Type\ParameterGroupType $ParameterGroup
     * @return ParameterType
     */
    public function withParameterGroup($ParameterGroup)
    {
        $new = clone $this;
        $new->ParameterGroup = $ParameterGroup;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterSortingType
     */
    public function getSorting()
    {
        return $this->Sorting;
    }

    /**
     * @param \IMS\Query\Type\ParameterSortingType $Sorting
     * @return ParameterType
     */
    public function withSorting($Sorting)
    {
        $new = clone $this;
        $new->Sorting = $Sorting;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterTypeKeyType
     */
    public function getParameterTypeKey()
    {
        return $this->ParameterTypeKey;
    }

    /**
     * @param \IMS\Query\Type\ParameterTypeKeyType $ParameterTypeKey
     * @return ParameterType
     */
    public function withParameterTypeKey($ParameterTypeKey)
    {
        $new = clone $this;
        $new->ParameterTypeKey = $ParameterTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getParameterTypeName()
    {
        return $this->ParameterTypeName;
    }

    /**
     * @param \IMS\Query\Type\NameType $ParameterTypeName
     * @return ParameterType
     */
    public function withParameterTypeName($ParameterTypeName)
    {
        $new = clone $this;
        $new->ParameterTypeName = $ParameterTypeName;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowEmpty()
    {
        return $this->AllowEmpty;
    }

    /**
     * @param bool $AllowEmpty
     * @return ParameterType
     */
    public function withAllowEmpty($AllowEmpty)
    {
        $new = clone $this;
        $new->AllowEmpty = $AllowEmpty;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterValueType
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }

    /**
     * @param \IMS\Query\Type\ParameterValueType $DefaultValue
     * @return ParameterType
     */
    public function withDefaultValue($DefaultValue)
    {
        $new = clone $this;
        $new->DefaultValue = $DefaultValue;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterNumericValueType
     */
    public function getMinNumericValue()
    {
        return $this->MinNumericValue;
    }

    /**
     * @param \IMS\Query\Type\ParameterNumericValueType $MinNumericValue
     * @return ParameterType
     */
    public function withMinNumericValue($MinNumericValue)
    {
        $new = clone $this;
        $new->MinNumericValue = $MinNumericValue;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterNumericValueType
     */
    public function getMaxNumericValue()
    {
        return $this->MaxNumericValue;
    }

    /**
     * @param \IMS\Query\Type\ParameterNumericValueType $MaxNumericValue
     * @return ParameterType
     */
    public function withMaxNumericValue($MaxNumericValue)
    {
        $new = clone $this;
        $new->MaxNumericValue = $MaxNumericValue;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterStringLengthType
     */
    public function getMinStringLength()
    {
        return $this->MinStringLength;
    }

    /**
     * @param \IMS\Query\Type\ParameterStringLengthType $MinStringLength
     * @return ParameterType
     */
    public function withMinStringLength($MinStringLength)
    {
        $new = clone $this;
        $new->MinStringLength = $MinStringLength;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterStringLengthType
     */
    public function getMaxStringLength()
    {
        return $this->MaxStringLength;
    }

    /**
     * @param \IMS\Query\Type\ParameterStringLengthType $MaxStringLength
     * @return ParameterType
     */
    public function withMaxStringLength($MaxStringLength)
    {
        $new = clone $this;
        $new->MaxStringLength = $MaxStringLength;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterNumericPrecisionType
     */
    public function getNumericPrecision()
    {
        return $this->NumericPrecision;
    }

    /**
     * @param \IMS\Query\Type\ParameterNumericPrecisionType $NumericPrecision
     * @return ParameterType
     */
    public function withNumericPrecision($NumericPrecision)
    {
        $new = clone $this;
        $new->NumericPrecision = $NumericPrecision;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $BranchKey
     * @return ParameterType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }


}

