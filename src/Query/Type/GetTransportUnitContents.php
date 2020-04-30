<?php

namespace IMS\Query\Type;

class GetTransportUnitContents
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\TransportUnitIdType
     */
    private $TransportUnitId = null;

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
     * @return GetTransportUnitContents
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\TransportUnitIdType
     */
    public function getTransportUnitId()
    {
        return $this->TransportUnitId;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitIdType $TransportUnitId
     * @return GetTransportUnitContents
     */
    public function withTransportUnitId($TransportUnitId)
    {
        $new = clone $this;
        $new->TransportUnitId = $TransportUnitId;

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
     * @return GetTransportUnitContents
     */
    public function withTransportUnitKey($TransportUnitKey)
    {
        $new = clone $this;
        $new->TransportUnitKey = $TransportUnitKey;

        return $new;
    }


}

