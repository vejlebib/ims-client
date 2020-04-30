<?php

namespace IMS\Security\Type;

class RoleType
{

    /**
     * @var \IMS\Security\Type\RoleKeyType
     */
    private $RoleKey = null;

    /**
     * @var \IMS\Security\Type\RoleNameType
     */
    private $Name = null;

    /**
     * @var bool
     */
    private $BranchOriented = null;

    /**
     * @return \IMS\Security\Type\RoleKeyType
     */
    public function getRoleKey()
    {
        return $this->RoleKey;
    }

    /**
     * @param \IMS\Security\Type\RoleKeyType $RoleKey
     * @return RoleType
     */
    public function withRoleKey($RoleKey)
    {
        $new = clone $this;
        $new->RoleKey = $RoleKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\RoleNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\RoleNameType $Name
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

