<?php

namespace IMS\Query\Type;

class RoleType
{

    /**
     * @var \IMS\Query\Type\RoleKeyType
     */
    private $RoleKey = null;

    /**
     * @var \IMS\Query\Type\RoleNameType
     */
    private $Name = null;

    /**
     * @var bool
     */
    private $BranchOriented = null;

    /**
     * @return \IMS\Query\Type\RoleKeyType
     */
    public function getRoleKey()
    {
        return $this->RoleKey;
    }

    /**
     * @param \IMS\Query\Type\RoleKeyType $RoleKey
     * @return RoleType
     */
    public function withRoleKey($RoleKey)
    {
        $new = clone $this;
        $new->RoleKey = $RoleKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RoleNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\RoleNameType $Name
     * @return RoleType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBranchOriented()
    {
        return $this->BranchOriented;
    }

    /**
     * @param bool $BranchOriented
     * @return RoleType
     */
    public function withBranchOriented($BranchOriented)
    {
        $new = clone $this;
        $new->BranchOriented = $BranchOriented;

        return $new;
    }


}

