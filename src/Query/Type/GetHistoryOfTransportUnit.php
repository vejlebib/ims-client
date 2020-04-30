<?php

namespace IMS\Query\Type;

class GetHistoryOfTransportUnit
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\RfidType
     */
    private $Rfid = null;

    /**
     * @var \IMS\Query\Type\TransportUnitKeyType
     */
    private $TransportUnitKey = null;

    /**
     * @var int
     */
    private $MaxRecords = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetHistoryOfTransportUnit
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RfidType
     */
    public function getRfid()
    {
        return $this->Rfid;
    }

    /**
     * @param \IMS\Query\Type\RfidType $Rfid
     * @return GetHistoryOfTransportUnit
     */
    public function withRfid($Rfid)
    {
        $new = clone $this;
        $new->Rfid = $Rfid;

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
     * @return GetHistoryOfTransportUnit
     */
    public function withTransportUnitKey($TransportUnitKey)
    {
        $new = clone $this;
        $new->TransportUnitKey = $TransportUnitKey;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxRecords()
    {
        return $this->MaxRecords;
    }

    /**
     * @param int $MaxRecords
     * @return GetHistoryOfTransportUnit
     */
    public function withMaxRecords($MaxRecords)
    {
        $new = clone $this;
        $new->MaxRecords = $MaxRecords;

        return $new;
    }


}

