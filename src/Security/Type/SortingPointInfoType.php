<?php

namespace IMS\Security\Type;

class SortingPointInfoType
{

    /**
     * @var \IMS\Security\Type\SortingPointKeyType
     */
    private $SortingPointKey = null;

    /**
     * @var \IMS\Security\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Security\Type\SortingPointCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Security\Type\SortingPointNameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\SimpleLocationInfoType
     */
    private $Location = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @var bool
     */
    private $DeletedInIls = null;

    /**
     * @var \IMS\Security\Type\ChuteType
     */
    private $Chutes = null;

    /**
     * @return \IMS\Security\Type\SortingPointKeyType
     */
    public function getSortingPointKey()
    {
        return $this->SortingPointKey;
    }

    /**
     * @param \IMS\Security\Type\SortingPointKeyType $SortingPointKey
     * @return SortingPointInfoType
     */
    public function withSortingPointKey($SortingPointKey)
    {
        $new = clone $this;
        $new->SortingPointKey = $SortingPointKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Security\Type\BranchKeyType $BranchKey
     * @return SortingPointInfoType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SortingPointCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Security\Type\SortingPointCodeType $Code
     * @return SortingPointInfoType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SortingPointNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\SortingPointNameType $Name
     * @return SortingPointInfoType
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
     * @return SortingPointInfoType
     */
    public function withLocation($Location)
    {
        $new = clone $this;
        $new->Location = $Location;

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
     * @return SortingPointInfoType
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
     * @return SortingPointInfoType
     */
    public function withDeletedInIls($DeletedInIls)
    {
        $new = clone $this;
        $new->DeletedInIls = $DeletedInIls;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ChuteType
     */
    public function getChutes()
    {
        return $this->Chutes;
    }

    /**
     * @param \IMS\Security\Type\ChuteType $Chutes
     * @return SortingPointInfoType
     */
    public function withChutes($Chutes)
    {
        $new = clone $this;
        $new->Chutes = $Chutes;

        return $new;
    }


}

