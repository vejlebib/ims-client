<?php

namespace IMS\Query\Type;

class AssignmentInfoType
{

    /**
     * @var \IMS\Query\Type\AssignmentTypeInfoType
     */
    private $AssignmentType = null;

    /**
     * @var \IMS\Query\Type\BranchType
     */
    private $AssignedBranch = null;

    /**
     * @var \IMS\Query\Type\SimpleMaterialGroupingInfoType
     */
    private $AssignedMaterialGrouping = null;

    /**
     * @var \IMS\Query\Type\SimpleExhibitionInfoType
     */
    private $AssignedExhibition = null;

    /**
     * @return \IMS\Query\Type\AssignmentTypeInfoType
     */
    public function getAssignmentType()
    {
        return $this->AssignmentType;
    }

    /**
     * @param \IMS\Query\Type\AssignmentTypeInfoType $AssignmentType
     * @return AssignmentInfoType
     */
    public function withAssignmentType($AssignmentType)
    {
        $new = clone $this;
        $new->AssignmentType = $AssignmentType;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchType
     */
    public function getAssignedBranch()
    {
        return $this->AssignedBranch;
    }

    /**
     * @param \IMS\Query\Type\BranchType $AssignedBranch
     * @return AssignmentInfoType
     */
    public function withAssignedBranch($AssignedBranch)
    {
        $new = clone $this;
        $new->AssignedBranch = $AssignedBranch;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SimpleMaterialGroupingInfoType
     */
    public function getAssignedMaterialGrouping()
    {
        return $this->AssignedMaterialGrouping;
    }

    /**
     * @param \IMS\Query\Type\SimpleMaterialGroupingInfoType $AssignedMaterialGrouping
     * @return AssignmentInfoType
     */
    public function withAssignedMaterialGrouping($AssignedMaterialGrouping)
    {
        $new = clone $this;
        $new->AssignedMaterialGrouping = $AssignedMaterialGrouping;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\SimpleExhibitionInfoType
     */
    public function getAssignedExhibition()
    {
        return $this->AssignedExhibition;
    }

    /**
     * @param \IMS\Query\Type\SimpleExhibitionInfoType $AssignedExhibition
     * @return AssignmentInfoType
     */
    public function withAssignedExhibition($AssignedExhibition)
    {
        $new = clone $this;
        $new->AssignedExhibition = $AssignedExhibition;

        return $new;
    }


}

