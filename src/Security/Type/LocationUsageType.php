<?php

namespace IMS\Security\Type;

class LocationUsageType
{

    /**
     * @var \IMS\Security\Type\LocationUsageTypeKeyType
     */
    private $LocationUsageTypeKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var bool
     */
    private $ClearAssignedDestination = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @return \IMS\Security\Type\LocationUsageTypeKeyType
     */
    public function getLocationUsageTypeKey()
    {
        return $this->LocationUsageTypeKey;
    }

    /**
     * @param \IMS\Security\Type\LocationUsageTypeKeyType $LocationUsageTypeKey
     * @return LocationUsageType
     */
    public function withLocationUsageTypeKey($LocationUsageTypeKey)
    {
        $new = clone $this;
        $new->LocationUsageTypeKey = $LocationUsageTypeKey;

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
     * @return LocationUsageType
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
     * @return LocationUsageType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return bool
     */
    public function getClearAssignedDestination()
    {
        return $this->ClearAssignedDestination;
    }

    /**
     * @param bool $ClearAssignedDestination
     * @return LocationUsageType
     */
    public function withClearAssignedDestination($ClearAssignedDestination)
    {
        $new = clone $this;
        $new->ClearAssignedDestination = $ClearAssignedDestination;

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
     * @return LocationUsageType
     */
    public function withDisabled($Disabled)
    {
        $new = clone $this;
        $new->Disabled = $Disabled;

        return $new;
    }


}

