<?php

namespace IMS\Query\Type;

class TransportUnitInfoType
{

    /**
     * @var \IMS\Query\Type\TransportUnitKeyType
     */
    private $TransportUnitKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Query\Type\BranchInfoType
     */
    private $Branch = null;

    /**
     * @var \IMS\Query\Type\StatusType
     */
    private $Status = null;

    /**
     * @var \IMS\Query\Type\SimpleLocationInfoType
     */
    private $Location = null;

    /**
     * @var \IMS\Query\Type\RfidType
     */
    private $Rfid = null;

    /**
     * @var bool
     */
    private $Deleted = null;

    /**
     * @var \IMS\Query\Type\ValueType
     */
    private $CurrentChute = null;

    /**
     * @return \IMS\Query\Type\TransportUnitKeyType
     */
    public function getTransportUnitKey()
    {
        return $this->TransportUnitKey;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitKeyType $TransportUnitKey
     * @return TransportUnitInfoType
     */
    public function withTransportUnitKey($TransportUnitKey)
    {
        $new = clone $this;
        $new->TransportUnitKey = $TransportUnitKey;

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
     * @return TransportUnitInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Query\Type\DescriptionType $Description
     * @return TransportUnitInfoType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchInfoType
     */
    public function getBranch()
    {
        return $this->Branch;
    }

    /**
     * @param \IMS\Query\Type\BranchInfoType $Branch
     * @return TransportUnitInfoType
     */
    public function withBranch($Branch)
    {
        $new = clone $this;
        $new->Branch = $Branch;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\StatusType
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \IMS\Query\Type\StatusType $Status
     * @return TransportUnitInfoType
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SimpleLocationInfoType
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param \IMS\Query\Type\SimpleLocationInfoType $Location
     * @return TransportUnitInfoType
     */
    public function withLocation($Location)
    {
        $new = clone $this;
        $new->Location = $Location;

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
     * @return TransportUnitInfoType
     */
    public function withRfid($Rfid)
    {
        $new = clone $this;
        $new->Rfid = $Rfid;

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
     * @return TransportUnitInfoType
     */
    public function withDeleted($Deleted)
    {
        $new = clone $this;
        $new->Deleted = $Deleted;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ValueType
     */
    public function getCurrentChute()
    {
        return $this->CurrentChute;
    }

    /**
     * @param \IMS\Query\Type\ValueType $CurrentChute
     * @return TransportUnitInfoType
     */
    public function withCurrentChute($CurrentChute)
    {
        $new = clone $this;
        $new->CurrentChute = $CurrentChute;

        return $new;
    }


}

