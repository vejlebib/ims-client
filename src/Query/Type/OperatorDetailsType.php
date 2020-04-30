<?php

namespace IMS\Query\Type;

class OperatorDetailsType
{

    /**
     * @var \IMS\Query\Type\HeldRoleType
     */
    private $Roles = null;

    /**
     * @return \IMS\Query\Type\HeldRoleType
     */
    public function getRoles()
    {
        return $this->Roles;
    }

    /**
     * @param \IMS\Query\Type\HeldRoleType $Roles
     * @return OperatorDetailsType
     */
    public function withRoles($Roles)
    {
        $new = clone $this;
        $new->Roles = $Roles;

        return $new;
    }


}

