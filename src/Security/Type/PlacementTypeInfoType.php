<?php

namespace IMS\Security\Type;

class PlacementTypeInfoType
{

    /**
     * @var \IMS\Security\Type\PlacementTypeKeyType
     */
    private $PlacementTypeKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Security\Type\LocationUsageTypeKeyType
     */
    private $LocationUsageTypeKey = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @var \IMS\Security\Type\PriorityType
     */
    private $Priority = null;

    /**
     * @return \IMS\Security\Type\PlacementTypeKeyType
     */
    public function getPlacementTypeKey()
    {
        return $this->PlacementTypeKey;
    }

    /**
     * @param \IMS\Security\Type\PlacementTypeKeyType $PlacementTypeKey
     * @return PlacementTypeInfoType
     */
    public function withPlacementTypeKey($PlacementTypeKey)
    {
        $new = clone $this;
        $new->PlacementTypeKey = $PlacementTypeKey;

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
     * @return PlacementTypeInfoType
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
     * @return PlacementTypeInfoType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\LocationUsageTypeKeyType
     */
    public function getLocationUsageTypeKey()
    {
        return $this->LocationUsageTypeKey;
    }

    /**
     * @param \IMS\Security\Type\LocationUsageTypeKeyType $LocationUsageTypeKey
     * @return PlacementTypeInfoType
     */
    public function withLocationUsageTypeKey($LocationUsageTypeKey)
    {
        $new = clone $this;
        $new->LocationUsageTypeKey = $LocationUsageTypeKey;

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
     * @return PlacementTypeInfoType
     */
    public function withDisabled($Disabled)
    {
        $new = clone $this;
        $new->Disabled = $Disabled;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PriorityType
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param \IMS\Security\Type\PriorityType $Priority
     * @return PlacementTypeInfoType
     */
    public function withPriority($Priority)
    {
        $new = clone $this;
        $new->Priority = $Priority;

        return $new;
    }


}

