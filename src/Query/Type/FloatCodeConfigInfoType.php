<?php

namespace IMS\Query\Type;

class FloatCodeConfigInfoType
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
     * @var \IMS\Query\Type\FloatCodeInfoType
     */
    private $FloatCode = null;

    /**
     * @var \IMS\Query\Type\DepartmentTypeInfoType
     */
    private $DepartmentType = null;

    /**
     * @var \IMS\Query\Type\DepartmentInfoType
     */
    private $Department = null;

    /**
     * @var bool
     */
    private $FloatMember = null;

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $BranchKey
     * @return FloatCodeConfigInfoType
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
     * @return FloatCodeConfigInfoType
     */
    public function withBranchConfigurationKey($BranchConfigurationKey)
    {
        $new = clone $this;
        $new->BranchConfigurationKey = $BranchConfigurationKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\FloatCodeInfoType
     */
    public function getFloatCode()
    {
        return $this->FloatCode;
    }

    /**
     * @param \IMS\Query\Type\FloatCodeInfoType $FloatCode
     * @return FloatCodeConfigInfoType
     */
    public function withFloatCode($FloatCode)
    {
        $new = clone $this;
        $new->FloatCode = $FloatCode;

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
     * @return FloatCodeConfigInfoType
     */
    public function withDepartmentType($DepartmentType)
    {
        $new = clone $this;
        $new->DepartmentType = $DepartmentType;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DepartmentInfoType
     */
    public function getDepartment()
    {
        return $this->Department;
    }

    /**
     * @param \IMS\Query\Type\DepartmentInfoType $Department
     * @return FloatCodeConfigInfoType
     */
    public function withDepartment($Department)
    {
        $new = clone $this;
        $new->Department = $Department;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFloatMember()
    {
        return $this->FloatMember;
    }

    /**
     * @param bool $FloatMember
     * @return FloatCodeConfigInfoType
     */
    public function withFloatMember($FloatMember)
    {
        $new = clone $this;
        $new->FloatMember = $FloatMember;

        return $new;
    }


}

