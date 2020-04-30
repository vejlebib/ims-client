<?php

namespace IMS\Security\Type;

class GetPrivilegesResponse
{

    /**
     * @var \IMS\Security\Type\HeldPrivilegeType
     */
    private $Privileges = null;

    /**
     * @return \IMS\Security\Type\HeldPrivilegeType
     */
    public function getPrivileges()
    {
        return $this->Privileges;
    }

    /**
     * @param \IMS\Security\Type\HeldPrivilegeType $Privileges
     * @return GetPrivilegesResponse
     */
    public function withPrivileges($Privileges)
    {
        $new = clone $this;
        $new->Privileges = $Privileges;

        return $new;
    }


}

