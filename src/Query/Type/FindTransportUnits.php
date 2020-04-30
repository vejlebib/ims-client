<?php

namespace IMS\Query\Type;

class FindTransportUnits
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\RfidType
     */
    private $Rfid = null;

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Query\Type\StatusKeyType
     */
    private $StatusKey = null;

    /**
     * @var \DateTime
     */
    private $LastTransactionTimeStart = null;

    /**
     * @var \DateTime
     */
    private $LastTransactionTimeEnd = null;

    /**
     * @var bool
     */
    private $Deleted = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return FindTransportUnits
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\NameType $Name
     * @return FindTransportUnits
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

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
     * @return FindTransportUnits
     */
    public function withRfid($Rfid)
    {
        $new = clone $this;
        $new->Rfid = $Rfid;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $BranchKey
     * @return FindTransportUnits
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\StatusKeyType
     */
    public function getStatusKey()
    {
        return $this->StatusKey;
    }

    /**
     * @param \IMS\Query\Type\StatusKeyType $StatusKey
     * @return FindTransportUnits
     */
    public function withStatusKey($StatusKey)
    {
        $new = clone $this;
        $new->StatusKey = $StatusKey;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getLastTransactionTimeStart()
    {
        return $this->LastTransactionTimeStart;
    }

    /**
     * @param \DateTime $LastTransactionTimeStart
     * @return FindTransportUnits
     */
    public function withLastTransactionTimeStart($LastTransactionTimeStart)
    {
        $new = clone $this;
        $new->LastTransactionTimeStart = $LastTransactionTimeStart;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getLastTransactionTimeEnd()
    {
        return $this->LastTransactionTimeEnd;
    }

    /**
     * @param \DateTime $LastTransactionTimeEnd
     * @return FindTransportUnits
     */
    public function withLastTransactionTimeEnd($LastTransactionTimeEnd)
    {
        $new = clone $this;
        $new->LastTransactionTimeEnd = $LastTransactionTimeEnd;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDeleted()
    {
        return $this->Deleted;
    }

    /**
     * @param bool $Deleted
     * @return FindTransportUnits
     */
    public function withDeleted($Deleted)
    {
        $new = clone $this;
        $new->Deleted = $Deleted;

        return $new;
    }


}

