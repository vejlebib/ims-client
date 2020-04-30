<?php

namespace IMS\Security\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Logout implements RequestInterface
{

    /**
     * @var \IMS\Security\Type\TokenType
     */
    private $Token = null;

    /**
     * @return \IMS\Security\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Security\Type\TokenType $Token
     * @return Logout
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }


}
