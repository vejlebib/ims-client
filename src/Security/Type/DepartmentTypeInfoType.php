<?php

namespace IMS\Security\Type;

class DepartmentTypeInfoType
{

    /**
     * @var \IMS\Security\Type\DepartmentTypeKeyType
     */
    private $DepartmentTypeKey = null;

    /**
     * @var \IMS\Security\Type\DepartmentNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\DepartmentTypeKeyType
     */
    public function getDepartmentTypeKey()
    {
        return $this->DepartmentTypeKey;
    }

    /**
     * @param \IMS\Security\Type\DepartmentTypeKeyType $DepartmentTypeKey
     * @return DepartmentTypeInfoType
     */
    public function withDepartmentTypeKey($DepartmentTypeKey)
    {
        $new = clone $this;
        $new->DepartmentTypeKey = $DepartmentTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DepartmentNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\DepartmentNameType $Name
     * @return DepartmentTypeInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

