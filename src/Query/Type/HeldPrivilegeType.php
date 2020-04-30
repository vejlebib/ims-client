<?php

namespace IMS\Query\Type;

class HeldPrivilegeType
{

    /**
     * @var \IMS\Query\Type\PrivilegeIdType
     */
    private $PrivilegeId = null;

    /**
     * @var \IMS\Query\Type\BranchType
     */
    private $Branch = null;

    /**
     * @return \IMS\Query\Type\PrivilegeIdType
     */
    public function getPrivilegeId()
    {
        return $this->PrivilegeId;
    }

    /**
     * @param \IMS\Query\Type\PrivilegeIdType $PrivilegeId
     * @return HeldPrivilegeType
     */
    public function withPrivilegeId($PrivilegeId)
    {
        $new = clone $this;
        $new->PrivilegeId = $PrivilegeId;

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
     * @return HeldPrivilegeType
     */
    public function withBranch($Branch)
    {
        $new = clone $this;
        $new->Branch = $Branch;

        return $new;
    }


}

