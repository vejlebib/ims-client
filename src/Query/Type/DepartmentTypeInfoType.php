<?php

namespace IMS\Query\Type;

class DepartmentTypeInfoType
{

    /**
     * @var \IMS\Query\Type\DepartmentTypeKeyType
     */
    private $DepartmentTypeKey = null;

    /**
     * @var \IMS\Query\Type\DepartmentNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\DepartmentTypeKeyType
     */
    public function getDepartmentTypeKey()
    {
        return $this->DepartmentTypeKey;
    }

    /**
     * @param \IMS\Query\Type\DepartmentTypeKeyType $DepartmentTypeKey
     * @return DepartmentTypeInfoType
     */
    public function withDepartmentTypeKey($DepartmentTypeKey)
    {
        $new = clone $this;
        $new->DepartmentTypeKey = $DepartmentTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DepartmentNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\DepartmentNameType $Name
     * @return DepartmentTypeInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

