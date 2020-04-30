<?php

namespace IMS\Security\Type;

class HeldRoleType
{

    /**
     * @var \IMS\Security\Type\RoleType
     */
    private $Role = null;

    /**
     * @var \IMS\Security\Type\BranchType
     */
    private $Branch = null;

    /**
     * @return \IMS\Security\Type\RoleType
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * @param \IMS\Security\Type\RoleType $Role
     * @return HeldRoleType
     */
    public function withRole($Role)
    {
        $new = clone $this;
        $new->Role = $Role;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchType
     */
    public function getBranch()
    {
        return $this->Branch;
    }

    /**
     * @param \IMS\Security\Type\BranchType $Branch
     * @return HeldRoleType
     */
    public function withBranch($Branch)
    {
        $new = clone $this;
        $new->Branch = $Branch;

        return $new;
    }


}

