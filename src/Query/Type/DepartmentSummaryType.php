<?php

namespace IMS\Query\Type;

class DepartmentSummaryType
{

    /**
     * @var \IMS\Query\Type\DepartmentKeyType
     */
    private $DepartmentKey = null;

    /**
     * @var \IMS\Query\Type\DepartmentCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Query\Type\DepartmentNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\DepartmentKeyType
     */
    public function getDepartmentKey()
    {
        return $this->DepartmentKey;
    }

    /**
     * @param \IMS\Query\Type\DepartmentKeyType $DepartmentKey
     * @return DepartmentSummaryType
     */
    public function withDepartmentKey($DepartmentKey)
    {
        $new = clone $this;
        $new->DepartmentKey = $DepartmentKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DepartmentCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Query\Type\DepartmentCodeType $Code
     * @return DepartmentSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

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
     * @return DepartmentSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

