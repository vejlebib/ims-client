<?php

namespace IMS\Security\Type;

class ValidateToken
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
     * @return ValidateToken
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }


}

