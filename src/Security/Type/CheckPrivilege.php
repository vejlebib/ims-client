<?php

namespace IMS\Security\Type;

class CheckPrivilege
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
     * @var \IMS\Security\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @return \IMS\Security\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Security\Type\TokenType $Token
     * @return CheckPrivilege
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
     * @return CheckPrivilege
     */
    public function withPrivilegeId($PrivilegeId)
    {
        $new = clone $this;
        $new->PrivilegeId = $PrivilegeId;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Security\Type\BranchKeyType $BranchKey
     * @return CheckPrivilege
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }


}

