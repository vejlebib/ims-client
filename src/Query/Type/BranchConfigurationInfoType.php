<?php

namespace IMS\Query\Type;

class BranchConfigurationInfoType
{

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Query\Type\BranchConfigurationKeyType
     */
    private $BranchConfigurationKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Query\Type\BranchConfigurationKeyType
     */
    private $CopyOfConfigurationKey = null;

    /**
     * @var \IMS\Query\Type\BranchConfigurationStatusType
     */
    private $CurrentStatus = null;

    /**
     * @var \IMS\Query\Type\BranchConfigurationStatusType
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
     * @var \IMS\Query\Type\UsernameType
     */
    private $LastModifiedBy = null;

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $BranchKey
     * @return BranchConfigurationInfoType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchConfigurationKeyType
     */
    public function getBranchConfigurationKey()
    {
        return $this->BranchConfigurationKey;
    }

    /**
     * @param \IMS\Query\Type\BranchConfigurationKeyType $BranchConfigurationKey
     * @return BranchConfigurationInfoType
     */
    public function withBranchConfigurationKey($BranchConfigurationKey)
    {
        $new = clone $this;
        $new->BranchConfigurationKey = $BranchConfigurationKey;

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
     * @return BranchConfigurationInfoType
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
     * @return BranchConfigurationInfoType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchConfigurationKeyType
     */
    public function getCopyOfConfigurationKey()
    {
        return $this->CopyOfConfigurationKey;
    }

    /**
     * @param \IMS\Query\Type\BranchConfigurationKeyType $CopyOfConfigurationKey
     * @return BranchConfigurationInfoType
     */
    public function withCopyOfConfigurationKey($CopyOfConfigurationKey)
    {
        $new = clone $this;
        $new->CopyOfConfigurationKey = $CopyOfConfigurationKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchConfigurationStatusType
     */
    public function getCurrentStatus()
    {
        return $this->CurrentStatus;
    }

    /**
     * @param \IMS\Query\Type\BranchConfigurationStatusType $CurrentStatus
     * @return BranchConfigurationInfoType
     */
    public function withCurrentStatus($CurrentStatus)
    {
        $new = clone $this;
        $new->CurrentStatus = $CurrentStatus;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchConfigurationStatusType
     */
    public function getRequestedStatus()
    {
        return $this->RequestedStatus;
    }

    /**
     * @param \IMS\Query\Type\BranchConfigurationStatusType $RequestedStatus
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
     * @return \IMS\Query\Type\UsernameType
     */
    public function getLastModifiedBy()
    {
        return $this->LastModifiedBy;
    }

    /**
     * @param \IMS\Query\Type\UsernameType $LastModifiedBy
     * @return BranchConfigurationInfoType
     */
    public function withLastModifiedBy($LastModifiedBy)
    {
        $new = clone $this;
        $new->LastModifiedBy = $LastModifiedBy;

        return $new;
    }


}

