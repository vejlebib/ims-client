<?php

namespace IMS\Security\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Login implements RequestInterface
{

    /**
     * @var \IMS\Security\Type\UsernameType
     */
    private $Username = null;

    /**
     * @var \IMS\Security\Type\PasswordType
     */
    private $Password = null;

    /**
     * @var \IMS\Security\Type\ClientInfoType
     */
    private $ClientInfo = null;

    /**
     * @return \IMS\Security\Type\UsernameType
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param \IMS\Security\Type\UsernameType $Username
     * @return Login
     */
    public function withUsername($Username)
    {
        $new = clone $this;
        $new->Username = $Username;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PasswordType
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param \IMS\Security\Type\PasswordType $Password
     * @return Login
     */
    public function withPassword($Password)
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ClientInfoType
     */
    public function getClientInfo()
    {
        return $this->ClientInfo;
    }

    /**
     * @param \IMS\Security\Type\ClientInfoType $ClientInfo
     * @return Login
     */
    public function withClientInfo($ClientInfo)
    {
        $new = clone $this;
        $new->ClientInfo = $ClientInfo;

        return $new;
    }


}
