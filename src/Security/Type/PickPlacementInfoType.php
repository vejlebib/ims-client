<?php

namespace IMS\Security\Type;

class PickPlacementInfoType
{

    /**
     * @var \IMS\Security\Type\PickPlacementKeyType
     */
    private $PickPlacementKey = null;

    /**
     * @var \IMS\Security\Type\MaterialGroupingInfoType
     */
    private $MaterialGroupingInfo = null;

    /**
     * @var \IMS\Security\Type\LocationType
     */
    private $LocationInfo = null;

    /**
     * @var int
     */
    private $SortingWithinConfiguration = null;

    /**
     * @var int
     */
    private $SortingWithinParent = null;

    /**
     * @var \IMS\Security\Type\PickPlacementInfoType
     */
    private $Children = null;

    /**
     * @return \IMS\Security\Type\PickPlacementKeyType
     */
    public function getPickPlacementKey()
    {
        return $this->PickPlacementKey;
    }

    /**
     * @param \IMS\Security\Type\PickPlacementKeyType $PickPlacementKey
     * @return PickPlacementInfoType
     */
    public function withPickPlacementKey($PickPlacementKey)
    {
        $new = clone $this;
        $new->PickPlacementKey = $PickPlacementKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\MaterialGroupingInfoType
     */
    public function getMaterialGroupingInfo()
    {
        return $this->MaterialGroupingInfo;
    }

    /**
     * @param \IMS\Security\Type\MaterialGroupingInfoType $MaterialGroupingInfo
     * @return PickPlacementInfoType
     */
    public function withMaterialGroupingInfo($MaterialGroupingInfo)
    {
        $new = clone $this;
        $new->MaterialGroupingInfo = $MaterialGroupingInfo;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\LocationType
     */
    public function getLocationInfo()
    {
        return $this->LocationInfo;
    }

    /**
     * @param \IMS\Security\Type\LocationType $LocationInfo
     * @return PickPlacementInfoType
     */
    public function withLocationInfo($LocationInfo)
    {
        $new = clone $this;
        $new->LocationInfo = $LocationInfo;

        return $new;
    }

    /**
     * @return int
     */
    public function getSortingWithinConfiguration()
    {
        return $this->SortingWithinConfiguration;
    }

    /**
     * @param int $SortingWithinConfiguration
     * @return PickPlacementInfoType
     */
    public function withSortingWithinConfiguration($SortingWithinConfiguration)
    {
        $new = clone $this;
        $new->SortingWithinConfiguration = $SortingWithinConfiguration;

        return $new;
    }

    /**
     * @return int
     */
    public function getSortingWithinParent()
    {
        return $this->SortingWithinParent;
    }

    /**
     * @param int $SortingWithinParent
     * @return PickPlacementInfoType
     */
    public function withSortingWithinParent($SortingWithinParent)
    {
        $new = clone $this;
        $new->SortingWithinParent = $SortingWithinParent;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PickPlacementInfoType
     */
    public function getChildren()
    {
        return $this->Children;
    }

    /**
     * @param \IMS\Security\Type\PickPlacementInfoType $Children
     * @return PickPlacementInfoType
     */
    public function withChildren($Children)
    {
        $new = clone $this;
        $new->Children = $Children;

        return $new;
    }


}

