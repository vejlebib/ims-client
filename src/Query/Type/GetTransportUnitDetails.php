<?php

namespace IMS\Query\Type;

class GetTransportUnitDetails
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\TransportUnitKeyType
     */
    private $TransportUnitKey = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetTransportUnitDetails
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\TransportUnitKeyType
     */
    public function getTransportUnitKey()
    {
        return $this->TransportUnitKey;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitKeyType $TransportUnitKey
     * @return GetTransportUnitDetails
     */
    public function withTransportUnitKey($TransportUnitKey)
    {
        $new = clone $this;
        $new->TransportUnitKey = $TransportUnitKey;

        return $new;
    }


}

