<?php

namespace IMS\Security\Type;

class ChuteType
{

    /**
     * @var \IMS\Security\Type\ChuteKeyType
     */
    private $ChuteKey = null;

    /**
     * @var \IMS\Security\Type\ChuteCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Security\Type\ChuteNameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\SimpleLocationInfoType
     */
    private $Location = null;

    /**
     * @var \IMS\Security\Type\StatusType
     */
    private $AttachStatus = null;

    /**
     * @var \IMS\Security\Type\StatusType
     */
    private $DetachStatus = null;

    /**
     * @var \IMS\Security\Type\RfidType
     */
    private $Rfid = null;

    /**
     * @var bool
     */
    private $AllowToReferenceChute = null;

    /**
     * @var bool
     */
    private $AllowToBeReferencedByChute = null;

    /**
     * @var \IMS\Security\Type\ChuteType
     */
    private $ReferencedChute = null;

    /**
     * @var \IMS\Security\Type\SimpleSortingPointInfoType
     */
    private $ReferencedChuteSortingpoint = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @var bool
     */
    private $DeletedInIls = null;

    /**
     * @var \IMS\Security\Type\ValueType
     */
    private $CurrentTransportUnit = null;

    /**
     * @var bool
     */
    private $AllowToLinkTransportUnit = null;

    /**
     * @return \IMS\Security\Type\ChuteKeyType
     */
    public function getChuteKey()
    {
        return $this->ChuteKey;
    }

    /**
     * @param \IMS\Security\Type\ChuteKeyType $ChuteKey
     * @return ChuteType
     */
    public function withChuteKey($ChuteKey)
    {
        $new = clone $this;
        $new->ChuteKey = $ChuteKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ChuteCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Security\Type\ChuteCodeType $Code
     * @return ChuteType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ChuteNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\ChuteNameType $Name
     * @return ChuteType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

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
     * @return ChuteType
     */
    public function withLocation($Location)
    {
        $new = clone $this;
        $new->Location = $Location;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\StatusType
     */
    public function getAttachStatus()
    {
        return $this->AttachStatus;
    }

    /**
     * @param \IMS\Security\Type\StatusType $AttachStatus
     * @return ChuteType
     */
    public function withAttachStatus($AttachStatus)
    {
        $new = clone $this;
        $new->AttachStatus = $AttachStatus;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\StatusType
     */
    public function getDetachStatus()
    {
        return $this->DetachStatus;
    }

    /**
     * @param \IMS\Security\Type\StatusType $DetachStatus
     * @return ChuteType
     */
    public function withDetachStatus($DetachStatus)
    {
        $new = clone $this;
        $new->DetachStatus = $DetachStatus;

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
     * @return ChuteType
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
    public function getAllowToReferenceChute()
    {
        return $this->AllowToReferenceChute;
    }

    /**
     * @param bool $AllowToReferenceChute
     * @return ChuteType
     */
    public function withAllowToReferenceChute($AllowToReferenceChute)
    {
        $new = clone $this;
        $new->AllowToReferenceChute = $AllowToReferenceChute;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowToBeReferencedByChute()
    {
        return $this->AllowToBeReferencedByChute;
    }

    /**
     * @param bool $AllowToBeReferencedByChute
     * @return ChuteType
     */
    public function withAllowToBeReferencedByChute($AllowToBeReferencedByChute)
    {
        $new = clone $this;
        $new->AllowToBeReferencedByChute = $AllowToBeReferencedByChute;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ChuteType
     */
    public function getReferencedChute()
    {
        return $this->ReferencedChute;
    }

    /**
     * @param \IMS\Security\Type\ChuteType $ReferencedChute
     * @return ChuteType
     */
    public function withReferencedChute($ReferencedChute)
    {
        $new = clone $this;
        $new->ReferencedChute = $ReferencedChute;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SimpleSortingPointInfoType
     */
    public function getReferencedChuteSortingpoint()
    {
        return $this->ReferencedChuteSortingpoint;
    }

    /**
     * @param \IMS\Security\Type\SimpleSortingPointInfoType
     * $ReferencedChuteSortingpoint
     * @return ChuteType
     */
    public function withReferencedChuteSortingpoint($ReferencedChuteSortingpoint)
    {
        $new = clone $this;
        $new->ReferencedChuteSortingpoint = $ReferencedChuteSortingpoint;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->Disabled;
    }

    /**
     * @param bool $Disabled
     * @return ChuteType
     */
    public function withDisabled($Disabled)
    {
        $new = clone $this;
        $new->Disabled = $Disabled;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDeletedInIls()
    {
        return $this->DeletedInIls;
    }

    /**
     * @param bool $DeletedInIls
     * @return ChuteType
     */
    public function withDeletedInIls($DeletedInIls)
    {
        $new = clone $this;
        $new->DeletedInIls = $DeletedInIls;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ValueType
     */
    public function getCurrentTransportUnit()
    {
        return $this->CurrentTransportUnit;
    }

    /**
     * @param \IMS\Security\Type\ValueType $CurrentTransportUnit
     * @return ChuteType
     */
    public function withCurrentTransportUnit($CurrentTransportUnit)
    {
        $new = clone $this;
        $new->CurrentTransportUnit = $CurrentTransportUnit;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAllowToLinkTransportUnit()
    {
        return $this->AllowToLinkTransportUnit;
    }

    /**
     * @param bool $AllowToLinkTransportUnit
     * @return ChuteType
     */
    public function withAllowToLinkTransportUnit($AllowToLinkTransportUnit)
    {
        $new = clone $this;
        $new->AllowToLinkTransportUnit = $AllowToLinkTransportUnit;

        return $new;
    }


}

