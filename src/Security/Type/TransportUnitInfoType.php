<?php

namespace IMS\Security\Type;

class TransportUnitInfoType
{

    /**
     * @var \IMS\Security\Type\TransportUnitKeyType
     */
    private $TransportUnitKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Security\Type\BranchInfoType
     */
    private $Branch = null;

    /**
     * @var \IMS\Security\Type\StatusType
     */
    private $Status = null;

    /**
     * @var \IMS\Security\Type\SimpleLocationInfoType
     */
    private $Location = null;

    /**
     * @var \IMS\Security\Type\RfidType
     */
    private $Rfid = null;

    /**
     * @var bool
     */
    private $Deleted = null;

    /**
     * @var \IMS\Security\Type\ValueType
     */
    private $CurrentChute = null;

    /**
     * @return \IMS\Security\Type\TransportUnitKeyType
     */
    public function getTransportUnitKey()
    {
        return $this->TransportUnitKey;
    }

    /**
     * @param \IMS\Security\Type\TransportUnitKeyType $TransportUnitKey
     * @return TransportUnitInfoType
     */
    public function withTransportUnitKey($TransportUnitKey)
    {
        $new = clone $this;
        $new->TransportUnitKey = $TransportUnitKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\NameType $Name
     * @return TransportUnitInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Security\Type\DescriptionType $Description
     * @return TransportUnitInfoType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchInfoType
     */
    public function getBranch()
    {
        return $this->Branch;
    }

    /**
     * @param \IMS\Security\Type\BranchInfoType $Branch
     * @return TransportUnitInfoType
     */
    public function withBranch($Branch)
    {
        $new = clone $this;
        $new->Branch = $Branch;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\StatusType
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \IMS\Security\Type\StatusType $Status
     * @return TransportUnitInfoType
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SimpleLocationInfoType
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param \IMS\Security\Type\SimpleLocationInfoType $Location
     * @return TransportUnitInfoType
     */
    public function withLocation($Location)
    {
        $new = clone $this;
        $new->Location = $Location;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\RfidType
     */
    public function getRfid()
    {
        return $this->Rfid;
    }

    /**
     * @param \IMS\Security\Type\RfidType $Rfid
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
     * @return \IMS\Security\Type\ValueType
     */
    public function getCurrentChute()
    {
        return $this->CurrentChute;
    }

    /**
     * @param \IMS\Security\Type\ValueType $CurrentChute
     * @return TransportUnitInfoType
     */
    public function withCurrentChute($CurrentChute)
    {
        $new = clone $this;
        $new->CurrentChute = $CurrentChute;

        return $new;
    }


}

