<?php

namespace IMS\Query\Type;

class PickPlacementInfoType
{

    /**
     * @var \IMS\Query\Type\PickPlacementKeyType
     */
    private $PickPlacementKey = null;

    /**
     * @var \IMS\Query\Type\MaterialGroupingInfoType
     */
    private $MaterialGroupingInfo = null;

    /**
     * @var \IMS\Query\Type\LocationType
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
     * @var \IMS\Query\Type\PickPlacementInfoType
     */
    private $Children = null;

    /**
     * @return \IMS\Query\Type\PickPlacementKeyType
     */
    public function getPickPlacementKey()
    {
        return $this->PickPlacementKey;
    }

    /**
     * @param \IMS\Query\Type\PickPlacementKeyType $PickPlacementKey
     * @return PickPlacementInfoType
     */
    public function withPickPlacementKey($PickPlacementKey)
    {
        $new = clone $this;
        $new->PickPlacementKey = $PickPlacementKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialGroupingInfoType
     */
    public function getMaterialGroupingInfo()
    {
        return $this->MaterialGroupingInfo;
    }

    /**
     * @param \IMS\Query\Type\MaterialGroupingInfoType $MaterialGroupingInfo
     * @return PickPlacementInfoType
     */
    public function withMaterialGroupingInfo($MaterialGroupingInfo)
    {
        $new = clone $this;
        $new->MaterialGroupingInfo = $MaterialGroupingInfo;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\LocationType
     */
    public function getLocationInfo()
    {
        return $this->LocationInfo;
    }

    /**
     * @param \IMS\Query\Type\LocationType $LocationInfo
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
     * @return \IMS\Query\Type\PickPlacementInfoType
     */
    public function getChildren()
    {
        return $this->Children;
    }

    /**
     * @param \IMS\Query\Type\PickPlacementInfoType $Children
     * @return PickPlacementInfoType
     */
    public function withChildren($Children)
    {
        $new = clone $this;
        $new->Children = $Children;

        return $new;
    }


}

