<?php

namespace IMS\Query\Type;

class FloatCodeInfoType
{

    /**
     * @var \IMS\Query\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Query\Type\DepartmentTypeInfoType
     */
    private $DepartmentType = null;

    /**
     * @var bool
     */
    private $UsesDepartmentChange = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @var bool
     */
    private $DeletedInIls = null;

    /**
     * @return \IMS\Query\Type\DescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Query\Type\DescriptionType $Description
     * @return FloatCodeInfoType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

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
     * @return FloatCodeInfoType
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
    public function getUsesDepartmentChange()
    {
        return $this->UsesDepartmentChange;
    }

    /**
     * @param bool $UsesDepartmentChange
     * @return FloatCodeInfoType
     */
    public function withUsesDepartmentChange($UsesDepartmentChange)
    {
        $new = clone $this;
        $new->UsesDepartmentChange = $UsesDepartmentChange;

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
     * @return FloatCodeInfoType
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
    public function getDeletedInIls()
    {
        return $this->DeletedInIls;
    }

    /**
     * @param bool $DeletedInIls
     * @return FloatCodeInfoType
     */
    public function withDeletedInIls($DeletedInIls)
    {
        $new = clone $this;
        $new->DeletedInIls = $DeletedInIls;

        return $new;
    }


}

