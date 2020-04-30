<?php

namespace IMS\Query\Type;

class OperatorBasicInfoType
{

    /**
     * @var \IMS\Query\Type\OperatorKeyType
     */
    private $OperatorKey = null;

    /**
     * @var \IMS\Query\Type\UsernameType
     */
    private $Username = null;

    /**
     * @var \IMS\Query\Type\OperatorNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\OperatorKeyType
     */
    public function getOperatorKey()
    {
        return $this->OperatorKey;
    }

    /**
     * @param \IMS\Query\Type\OperatorKeyType $OperatorKey
     * @return OperatorBasicInfoType
     */
    public function withOperatorKey($OperatorKey)
    {
        $new = clone $this;
        $new->OperatorKey = $OperatorKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\UsernameType
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param \IMS\Query\Type\UsernameType $Username
     * @return OperatorBasicInfoType
     */
    public function withUsername($Username)
    {
        $new = clone $this;
        $new->Username = $Username;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\OperatorNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\OperatorNameType $Name
     * @return OperatorBasicInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

