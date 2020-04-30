<?php

namespace IMS\Security\Type;

class ParameterType
{

    /**
     * @var \IMS\Security\Type\ParameterIdType
     */
    private $ParameterId = null;

    /**
     * @var \IMS\Security\Type\ParameterValueType
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
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\ParameterDescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Security\Type\ParameterGroupType
     */
    private $ParameterGroup = null;

    /**
     * @var \IMS\Security\Type\ParameterSortingType
     */
    private $Sorting = null;

    /**
     * @var \IMS\Security\Type\ParameterTypeKeyType
     */
    private $ParameterTypeKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $ParameterTypeName = null;

    /**
     * @var bool
     */
    private $AllowEmpty = null;

    /**
     * @var \IMS\Security\Type\ParameterValueType
     */
    private $DefaultValue = null;

    /**
     * @var \IMS\Security\Type\ParameterNumericValueType
     */
    private $MinNumericValue = null;

    /**
     * @var \IMS\Security\Type\ParameterNumericValueType
     */
    private $MaxNumericValue = null;

    /**
     * @var \IMS\Security\Type\ParameterStringLengthType
     */
    private $MinStringLength = null;

    /**
     * @var \IMS\Security\Type\ParameterStringLengthType
     */
    private $MaxStringLength = null;

    /**
     * @var \IMS\Security\Type\ParameterNumericPrecisionType
     */
    private $NumericPrecision = null;

    /**
     * @var \IMS\Security\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @return \IMS\Security\Type\ParameterIdType
     */
    public function getParameterId()
    {
        return $this->ParameterId;
    }

    /**
     * @param \IMS\Security\Type\ParameterIdType $ParameterId
     * @return ParameterType
     */
    public function withParameterId($ParameterId)
    {
        $new = clone $this;
        $new->ParameterId = $ParameterId;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ParameterValueType
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param \IMS\Security\Type\ParameterValueType $Value
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
     * @return \IMS\Security\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\NameType $Name
     * @return ParameterType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ParameterDescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Security\Type\ParameterDescriptionType $Description
     * @return ParameterType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ParameterGroupType
     */
    public function getParameterGroup()
    {
        return $this->ParameterGroup;
    }

    /**
     * @param \IMS\Security\Type\ParameterGroupType $ParameterGroup
     * @return ParameterType
     */
    public function withParameterGroup($ParameterGroup)
    {
        $new = clone $this;
        $new->ParameterGroup = $ParameterGroup;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ParameterSortingType
     */
    public function getSorting()
    {
        return $this->Sorting;
    }

    /**
     * @param \IMS\Security\Type\ParameterSortingType $Sorting
     * @return ParameterType
     */
    public function withSorting($Sorting)
    {
        $new = clone $this;
        $new->Sorting = $Sorting;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ParameterTypeKeyType
     */
    public function getParameterTypeKey()
    {
        return $this->ParameterTypeKey;
    }

    /**
     * @param \IMS\Security\Type\ParameterTypeKeyType $ParameterTypeKey
     * @return ParameterType
     */
    public function withParameterTypeKey($ParameterTypeKey)
    {
        $new = clone $this;
        $new->ParameterTypeKey = $ParameterTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\NameType
     */
    public function getParameterTypeName()
    {
        return $this->ParameterTypeName;
    }

    /**
     * @param \IMS\Security\Type\NameType $ParameterTypeName
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
     * @return \IMS\Security\Type\ParameterValueType
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }

    /**
     * @param \IMS\Security\Type\ParameterValueType $DefaultValue
     * @return ParameterType
     */
    public function withDefaultValue($DefaultValue)
    {
        $new = clone $this;
        $new->DefaultValue = $DefaultValue;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ParameterNumericValueType
     */
    public function getMinNumericValue()
    {
        return $this->MinNumericValue;
    }

    /**
     * @param \IMS\Security\Type\ParameterNumericValueType $MinNumericValue
     * @return ParameterType
     */
    public function withMinNumericValue($MinNumericValue)
    {
        $new = clone $this;
        $new->MinNumericValue = $MinNumericValue;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ParameterNumericValueType
     */
    public function getMaxNumericValue()
    {
        return $this->MaxNumericValue;
    }

    /**
     * @param \IMS\Security\Type\ParameterNumericValueType $MaxNumericValue
     * @return ParameterType
     */
    public function withMaxNumericValue($MaxNumericValue)
    {
        $new = clone $this;
        $new->MaxNumericValue = $MaxNumericValue;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ParameterStringLengthType
     */
    public function getMinStringLength()
    {
        return $this->MinStringLength;
    }

    /**
     * @param \IMS\Security\Type\ParameterStringLengthType $MinStringLength
     * @return ParameterType
     */
    public function withMinStringLength($MinStringLength)
    {
        $new = clone $this;
        $new->MinStringLength = $MinStringLength;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ParameterStringLengthType
     */
    public function getMaxStringLength()
    {
        return $this->MaxStringLength;
    }

    /**
     * @param \IMS\Security\Type\ParameterStringLengthType $MaxStringLength
     * @return ParameterType
     */
    public function withMaxStringLength($MaxStringLength)
    {
        $new = clone $this;
        $new->MaxStringLength = $MaxStringLength;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ParameterNumericPrecisionType
     */
    public function getNumericPrecision()
    {
        return $this->NumericPrecision;
    }

    /**
     * @param \IMS\Security\Type\ParameterNumericPrecisionType $NumericPrecision
     * @return ParameterType
     */
    public function withNumericPrecision($NumericPrecision)
    {
        $new = clone $this;
        $new->NumericPrecision = $NumericPrecision;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Security\Type\BranchKeyType $BranchKey
     * @return ParameterType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }


}

