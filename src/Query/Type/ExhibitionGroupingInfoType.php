<?php

namespace IMS\Query\Type;

class ExhibitionGroupingInfoType
{

    /**
     * @var int
     */
    private $ExhibitionGroupingKey = null;

    /**
     * @var \IMS\Query\Type\ExhibitionNameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\ExhibitionDescriptionType
     */
    private $Description = null;

    /**
     * @var bool
     */
    private $disabled = null;

    /**
     * @return int
     */
    public function getExhibitionGroupingKey()
    {
        return $this->ExhibitionGroupingKey;
    }

    /**
     * @param int $ExhibitionGroupingKey
     * @return ExhibitionGroupingInfoType
     */
    public function withExhibitionGroupingKey($ExhibitionGroupingKey)
    {
        $new = clone $this;
        $new->ExhibitionGroupingKey = $ExhibitionGroupingKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ExhibitionNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\ExhibitionNameType $Name
     * @return ExhibitionGroupingInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ExhibitionDescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Query\Type\ExhibitionDescriptionType $Description
     * @return ExhibitionGroupingInfoType
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
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     * @return ExhibitionGroupingInfoType
     */
    public function withDisabled($disabled)
    {
        $new = clone $this;
        $new->disabled = $disabled;

        return $new;
    }


}

