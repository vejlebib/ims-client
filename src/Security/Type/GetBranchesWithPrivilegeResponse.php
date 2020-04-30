<?php

namespace IMS\Security\Type;

class GetBranchesWithPrivilegeResponse
{

    /**
     * @var \IMS\Security\Type\BranchType
     */
    private $Branches = null;

    /**
     * @return \IMS\Security\Type\BranchType
     */
    public function getBranches()
    {
        return $this->Branches;
    }

    /**
     * @param \IMS\Security\Type\BranchType $Branches
     * @return GetBranchesWithPrivilegeResponse
     */
    public function withBranches($Branches)
    {
        $new = clone $this;
        $new->Branches = $Branches;

        return $new;
    }


}

