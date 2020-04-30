<?php

namespace IMS\Security\Type;

class OperatorBasicInfoType
{

    /**
     * @var \IMS\Security\Type\OperatorKeyType
     */
    private $OperatorKey = null;

    /**
     * @var \IMS\Security\Type\UsernameType
     */
    private $Username = null;

    /**
     * @var \IMS\Security\Type\OperatorNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\OperatorKeyType
     */
    public function getOperatorKey()
    {
        return $this->OperatorKey;
    }

    /**
     * @param \IMS\Security\Type\OperatorKeyType $OperatorKey
     * @return OperatorBasicInfoType
     */
    public function withOperatorKey($OperatorKey)
    {
        $new = clone $this;
        $new->OperatorKey = $OperatorKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\UsernameType
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param \IMS\Security\Type\UsernameType $Username
     * @return OperatorBasicInfoType
     */
    public function withUsername($Username)
    {
        $new = clone $this;
        $new->Username = $Username;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\OperatorNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\OperatorNameType $Name
     * @return OperatorBasicInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

