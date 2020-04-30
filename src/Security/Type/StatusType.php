<?php

namespace IMS\Security\Type;

class StatusType
{

    /**
     * @var \IMS\Security\Type\StatusKeyType
     */
    private $StatusKey = null;

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
    private $Available = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @return \IMS\Security\Type\StatusKeyType
     */
    public function getStatusKey()
    {
        return $this->StatusKey;
    }

    /**
     * @param \IMS\Security\Type\StatusKeyType $StatusKey
     * @return StatusType
     */
    public function withStatusKey($StatusKey)
    {
        $new = clone $this;
        $new->StatusKey = $StatusKey;

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
     * @return StatusType
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
     * @return StatusType
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
    public function getAvailable()
    {
        return $this->Available;
    }

    /**
     * @param bool $Available
     * @return StatusType
     */
    public function withAvailable($Available)
    {
        $new = clone $this;
        $new->Available = $Available;

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
     * @return StatusType
     */
    public function withDisabled($Disabled)
    {
        $new = clone $this;
        $new->Disabled = $Disabled;

        return $new;
    }


}

