<?php

namespace IMS\Security\Type;

class ChuteInfoType
{

    /**
     * @var \IMS\Security\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Security\Type\ChuteType
     */
    private $Chute = null;

    /**
     * @var \IMS\Security\Type\SimpleSortingPointInfoType
     */
    private $SortingPoint = null;

    /**
     * @return \IMS\Security\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Security\Type\BranchKeyType $BranchKey
     * @return ChuteInfoType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ChuteType
     */
    public function getChute()
    {
        return $this->Chute;
    }

    /**
     * @param \IMS\Security\Type\ChuteType $Chute
     * @return ChuteInfoType
     */
    public function withChute($Chute)
    {
        $new = clone $this;
        $new->Chute = $Chute;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SimpleSortingPointInfoType
     */
    public function getSortingPoint()
    {
        return $this->SortingPoint;
    }

    /**
     * @param \IMS\Security\Type\SimpleSortingPointInfoType $SortingPoint
     * @return ChuteInfoType
     */
    public function withSortingPoint($SortingPoint)
    {
        $new = clone $this;
        $new->SortingPoint = $SortingPoint;

        return $new;
    }


}

