<?php

namespace IMS\Security\Type;

class OperatorDetailsType
{

    /**
     * @var \IMS\Security\Type\HeldRoleType
     */
    private $Roles = null;

    /**
     * @return \IMS\Security\Type\HeldRoleType
     */
    public function getRoles()
    {
        return $this->Roles;
    }

    /**
     * @param \IMS\Security\Type\HeldRoleType $Roles
     * @return OperatorDetailsType
     */
    public function withRoles($Roles)
    {
        $new = clone $this;
        $new->Roles = $Roles;

        return $new;
    }


}

