<?php

namespace IMS\Query\Type;

class LocationUsageType
{

    /**
     * @var \IMS\Query\Type\LocationUsageTypeKeyType
     */
    private $LocationUsageTypeKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\DescriptionType
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
     * @return \IMS\Query\Type\LocationUsageTypeKeyType
     */
    public function getLocationUsageTypeKey()
    {
        return $this->LocationUsageTypeKey;
    }

    /**
     * @param \IMS\Query\Type\LocationUsageTypeKeyType $LocationUsageTypeKey
     * @return LocationUsageType
     */
    public function withLocationUsageTypeKey($LocationUsageTypeKey)
    {
        $new = clone $this;
        $new->LocationUsageTypeKey = $LocationUsageTypeKey;

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
     * @return LocationUsageType
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

