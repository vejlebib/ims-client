<?php

namespace IMS\Security\Type;

class PutOperatorLog
{

    /**
     * @var \IMS\Security\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Security\Type\EventTypeKey
     */
    private $EventTypeKey = null;

    /**
     * @var \IMS\Security\Type\LogMessageType
     */
    private $Message = null;

    /**
     * @return \IMS\Security\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Security\Type\TokenType $Token
     * @return PutOperatorLog
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\EventTypeKey
     */
    public function getEventTypeKey()
    {
        return $this->EventTypeKey;
    }

    /**
     * @param \IMS\Security\Type\EventTypeKey $EventTypeKey
     * @return PutOperatorLog
     */
    public function withEventTypeKey($EventTypeKey)
    {
        $new = clone $this;
        $new->EventTypeKey = $EventTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\LogMessageType
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param \IMS\Security\Type\LogMessageType $Message
     * @return PutOperatorLog
     */
    public function withMessage($Message)
    {
        $new = clone $this;
        $new->Message = $Message;

        return $new;
    }


}

