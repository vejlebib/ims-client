<?php

namespace IMS\Security\Type;

class DepartmentSummaryType
{

    /**
     * @var \IMS\Security\Type\DepartmentKeyType
     */
    private $DepartmentKey = null;

    /**
     * @var \IMS\Security\Type\DepartmentCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Security\Type\DepartmentNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\DepartmentKeyType
     */
    public function getDepartmentKey()
    {
        return $this->DepartmentKey;
    }

    /**
     * @param \IMS\Security\Type\DepartmentKeyType $DepartmentKey
     * @return DepartmentSummaryType
     */
    public function withDepartmentKey($DepartmentKey)
    {
        $new = clone $this;
        $new->DepartmentKey = $DepartmentKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DepartmentCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Security\Type\DepartmentCodeType $Code
     * @return DepartmentSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

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
     * @return DepartmentSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

