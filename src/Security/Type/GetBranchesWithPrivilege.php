<?php

namespace IMS\Security\Type;

class GetBranchesWithPrivilege
{

    /**
     * @var \IMS\Security\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Security\Type\PrivilegeIdType
     */
    private $PrivilegeId = null;

    /**
     * @return \IMS\Security\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Security\Type\TokenType $Token
     * @return GetBranchesWithPrivilege
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PrivilegeIdType
     */
    public function getPrivilegeId()
    {
        return $this->PrivilegeId;
    }

    /**
     * @param \IMS\Security\Type\PrivilegeIdType $PrivilegeId
     * @return GetBranchesWithPrivilege
     */
    public function withPrivilegeId($PrivilegeId)
    {
        $new = clone $this;
        $new->PrivilegeId = $PrivilegeId;

        return $new;
    }


}

