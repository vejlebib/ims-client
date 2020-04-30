<?php

namespace IMS\Query\Type;

class HeldRoleType
{

    /**
     * @var \IMS\Query\Type\RoleType
     */
    private $Role = null;

    /**
     * @var \IMS\Query\Type\BranchType
     */
    private $Branch = null;

    /**
     * @return \IMS\Query\Type\RoleType
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * @param \IMS\Query\Type\RoleType $Role
     * @return HeldRoleType
     */
    public function withRole($Role)
    {
        $new = clone $this;
        $new->Role = $Role;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchType
     */
    public function getBranch()
    {
        return $this->Branch;
    }

    /**
     * @param \IMS\Query\Type\BranchType $Branch
     * @return HeldRoleType
     */
    public function withBranch($Branch)
    {
        $new = clone $this;
        $new->Branch = $Branch;

        return $new;
    }


}

