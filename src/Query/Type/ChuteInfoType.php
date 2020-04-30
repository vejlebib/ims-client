<?php

namespace IMS\Query\Type;

class ChuteInfoType
{

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Query\Type\ChuteType
     */
    private $Chute = null;

    /**
     * @var \IMS\Query\Type\SimpleSortingPointInfoType
     */
    private $SortingPoint = null;

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $BranchKey
     * @return ChuteInfoType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ChuteType
     */
    public function getChute()
    {
        return $this->Chute;
    }

    /**
     * @param \IMS\Query\Type\ChuteType $Chute
     * @return ChuteInfoType
     */
    public function withChute($Chute)
    {
        $new = clone $this;
        $new->Chute = $Chute;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SimpleSortingPointInfoType
     */
    public function getSortingPoint()
    {
        return $this->SortingPoint;
    }

    /**
     * @param \IMS\Query\Type\SimpleSortingPointInfoType $SortingPoint
     * @return ChuteInfoType
     */
    public function withSortingPoint($SortingPoint)
    {
        $new = clone $this;
        $new->SortingPoint = $SortingPoint;

        return $new;
    }


}

