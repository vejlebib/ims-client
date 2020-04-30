<?php

namespace IMS\Security\Type;

class DepartmentInfoType
{

    /**
     * @var \IMS\Security\Type\DepartmentTypeInfoType
     */
    private $DepartmentType = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @var bool
     */
    private $Excluded = null;

    /**
     * @var bool
     */
    private $DeletedInIls = null;

    /**
     * @return \IMS\Security\Type\DepartmentTypeInfoType
     */
    public function getDepartmentType()
    {
        return $this->DepartmentType;
    }

    /**
     * @param \IMS\Security\Type\DepartmentTypeInfoType $DepartmentType
     * @return DepartmentInfoType
     */
    public function withDepartmentType($DepartmentType)
    {
        $new = clone $this;
        $new->DepartmentType = $DepartmentType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->Disabled;
    }

    /**
     * @param bool $Disabled
     * @return DepartmentInfoType
     */
    public function withDisabled($Disabled)
    {
        $new = clone $this;
        $new->Disabled = $Disabled;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExcluded()
    {
        return $this->Excluded;
    }

    /**
     * @param bool $Excluded
     * @return DepartmentInfoType
     */
    public function withExcluded($Excluded)
    {
        $new = clone $this;
        $new->Excluded = $Excluded;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDeletedInIls()
    {
        return $this->DeletedInIls;
    }

    /**
     * @param bool $DeletedInIls
     * @return DepartmentInfoType
     */
    public function withDeletedInIls($DeletedInIls)
    {
        $new = clone $this;
        $new->DeletedInIls = $DeletedInIls;

        return $new;
    }


}

