<?php

namespace IMS\Security\Type;

class BranchConfigurationInfoType
{

    /**
     * @var \IMS\Security\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Security\Type\BranchConfigurationKeyType
     */
    private $BranchConfigurationKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Security\Type\BranchConfigurationKeyType
     */
    private $CopyOfConfigurationKey = null;

    /**
     * @var \IMS\Security\Type\BranchConfigurationStatusType
     */
    private $CurrentStatus = null;

    /**
     * @var \IMS\Security\Type\BranchConfigurationStatusType
     */
    private $RequestedStatus = null;

    /**
     * @var \DateTime
     */
    private $ActivationTime = null;

    /**
     * @var \DateTime
     */
    private $DeactivationTime = null;

    /**
     * @var \DateTime
     */
    private $LastModifiedTime = null;

    /**
     * @var \IMS\Security\Type\UsernameType
     */
    private $LastModifiedBy = null;

    /**
     * @return \IMS\Security\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Security\Type\BranchKeyType $BranchKey
     * @return BranchConfigurationInfoType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchConfigurationKeyType
     */
    public function getBranchConfigurationKey()
    {
        return $this->BranchConfigurationKey;
    }

    /**
     * @param \IMS\Security\Type\BranchConfigurationKeyType $BranchConfigurationKey
     * @return BranchConfigurationInfoType
     */
    public function withBranchConfigurationKey($BranchConfigurationKey)
    {
        $new = clone $this;
        $new->BranchConfigurationKey = $BranchConfigurationKey;

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
     * @return BranchConfigurationInfoType
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
     * @return BranchConfigurationInfoType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchConfigurationKeyType
     */
    public function getCopyOfConfigurationKey()
    {
        return $this->CopyOfConfigurationKey;
    }

    /**
     * @param \IMS\Security\Type\BranchConfigurationKeyType $CopyOfConfigurationKey
     * @return BranchConfigurationInfoType
     */
    public function withCopyOfConfigurationKey($CopyOfConfigurationKey)
    {
        $new = clone $this;
        $new->CopyOfConfigurationKey = $CopyOfConfigurationKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchConfigurationStatusType
     */
    public function getCurrentStatus()
    {
        return $this->CurrentStatus;
    }

    /**
     * @param \IMS\Security\Type\BranchConfigurationStatusType $CurrentStatus
     * @return BranchConfigurationInfoType
     */
    public function withCurrentStatus($CurrentStatus)
    {
        $new = clone $this;
        $new->CurrentStatus = $CurrentStatus;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchConfigurationStatusType
     */
    public function getRequestedStatus()
    {
        return $this->RequestedStatus;
    }

    /**
     * @param \IMS\Security\Type\BranchConfigurationStatusType $RequestedStatus
     * @return BranchConfigurationInfoType
     */
    public function withRequestedStatus($RequestedStatus)
    {
        $new = clone $this;
        $new->RequestedStatus = $RequestedStatus;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getActivationTime()
    {
        return $this->ActivationTime;
    }

    /**
     * @param \DateTime $ActivationTime
     * @return BranchConfigurationInfoType
     */
    public function withActivationTime($ActivationTime)
    {
        $new = clone $this;
        $new->ActivationTime = $ActivationTime;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getDeactivationTime()
    {
        return $this->DeactivationTime;
    }

    /**
     * @param \DateTime $DeactivationTime
     * @return BranchConfigurationInfoType
     */
    public function withDeactivationTime($DeactivationTime)
    {
        $new = clone $this;
        $new->DeactivationTime = $DeactivationTime;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
        return $this->LastModifiedTime;
    }

    /**
     * @param \DateTime $LastModifiedTime
     * @return BranchConfigurationInfoType
     */
    public function withLastModifiedTime($LastModifiedTime)
    {
        $new = clone $this;
        $new->LastModifiedTime = $LastModifiedTime;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\UsernameType
     */
    public function getLastModifiedBy()
    {
        return $this->LastModifiedBy;
    }

    /**
     * @param \IMS\Security\Type\UsernameType $LastModifiedBy
     * @return BranchConfigurationInfoType
     */
    public function withLastModifiedBy($LastModifiedBy)
    {
        $new = clone $this;
        $new->LastModifiedBy = $LastModifiedBy;

        return $new;
    }


}

