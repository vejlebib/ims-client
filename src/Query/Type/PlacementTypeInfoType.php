<?php

namespace IMS\Query\Type;

class PlacementTypeInfoType
{

    /**
     * @var \IMS\Query\Type\PlacementTypeKeyType
     */
    private $PlacementTypeKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var \IMS\Query\Type\LocationUsageTypeKeyType
     */
    private $LocationUsageTypeKey = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @var \IMS\Query\Type\PriorityType
     */
    private $Priority = null;

    /**
     * @return \IMS\Query\Type\PlacementTypeKeyType
     */
    public function getPlacementTypeKey()
    {
        return $this->PlacementTypeKey;
    }

    /**
     * @param \IMS\Query\Type\PlacementTypeKeyType $PlacementTypeKey
     * @return PlacementTypeInfoType
     */
    public function withPlacementTypeKey($PlacementTypeKey)
    {
        $new = clone $this;
        $new->PlacementTypeKey = $PlacementTypeKey;

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
     * @return PlacementTypeInfoType
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
     * @return PlacementTypeInfoType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\LocationUsageTypeKeyType
     */
    public function getLocationUsageTypeKey()
    {
        return $this->LocationUsageTypeKey;
    }

    /**
     * @param \IMS\Query\Type\LocationUsageTypeKeyType $LocationUsageTypeKey
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
     * @return \IMS\Query\Type\PriorityType
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param \IMS\Query\Type\PriorityType $Priority
     * @return PlacementTypeInfoType
     */
    public function withPriority($Priority)
    {
        $new = clone $this;
        $new->Priority = $Priority;

        return $new;
    }


}

