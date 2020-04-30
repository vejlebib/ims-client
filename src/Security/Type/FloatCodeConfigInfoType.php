<?php

namespace IMS\Security\Type;

class FloatCodeConfigInfoType
{

    /**
     * @var \IMS\Security\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Security\Type\BranchConfigurationKeyType
     */
    private $BranchConfigurationKey = null;

    /**
     * @var \IMS\Security\Type\FloatCodeInfoType
     */
    private $FloatCode = null;

    /**
     * @var \IMS\Security\Type\DepartmentTypeInfoType
     */
    private $DepartmentType = null;

    /**
     * @var \IMS\Security\Type\DepartmentInfoType
     */
    private $Department = null;

    /**
     * @var bool
     */
    private $FloatMember = null;

    /**
     * @return \IMS\Security\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Security\Type\BranchKeyType $BranchKey
     * @return FloatCodeConfigInfoType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchConfigurationKeyType
     */
    public function getBranchConfigurationKey()
    {
        return $this->BranchConfigurationKey;
    }

    /**
     * @param \IMS\Security\Type\BranchConfigurationKeyType $BranchConfigurationKey
     * @return FloatCodeConfigInfoType
     */
    public function withBranchConfigurationKey($BranchConfigurationKey)
    {
        $new = clone $this;
        $new->BranchConfigurationKey = $BranchConfigurationKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\FloatCodeInfoType
     */
    public function getFloatCode()
    {
        return $this->FloatCode;
    }

    /**
     * @param \IMS\Security\Type\FloatCodeInfoType $FloatCode
     * @return FloatCodeConfigInfoType
     */
    public function withFloatCode($FloatCode)
    {
        $new = clone $this;
        $new->FloatCode = $FloatCode;

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
     * @return FloatCodeConfigInfoType
     */
    public function withDepartmentType($DepartmentType)
    {
        $new = clone $this;
        $new->DepartmentType = $DepartmentType;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DepartmentInfoType
     */
    public function getDepartment()
    {
        return $this->Department;
    }

    /**
     * @param \IMS\Security\Type\DepartmentInfoType $Department
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

