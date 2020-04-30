<?php

namespace IMS\Security\Type;

class HeldPrivilegeType
{

    /**
     * @var \IMS\Security\Type\PrivilegeIdType
     */
    private $PrivilegeId = null;

    /**
     * @var \IMS\Security\Type\BranchType
     */
    private $Branch = null;

    /**
     * @return \IMS\Security\Type\PrivilegeIdType
     */
    public function getPrivilegeId()
    {
        return $this->PrivilegeId;
    }

    /**
     * @param \IMS\Security\Type\PrivilegeIdType $PrivilegeId
     * @return HeldPrivilegeType
     */
    public function withPrivilegeId($PrivilegeId)
    {
        $new = clone $this;
        $new->PrivilegeId = $PrivilegeId;

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
     * @return HeldPrivilegeType
     */
    public function withBranch($Branch)
    {
        $new = clone $this;
        $new->Branch = $Branch;

        return $new;
    }


}

