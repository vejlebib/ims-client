<?php

namespace IMS\Security\Type;

class AssignmentInfoType
{

    /**
     * @var \IMS\Security\Type\AssignmentTypeInfoType
     */
    private $AssignmentType = null;

    /**
     * @var \IMS\Security\Type\BranchType
     */
    private $AssignedBranch = null;

    /**
     * @var \IMS\Security\Type\SimpleMaterialGroupingInfoType
     */
    private $AssignedMaterialGrouping = null;

    /**
     * @var \IMS\Security\Type\SimpleExhibitionInfoType
     */
    private $AssignedExhibition = null;

    /**
     * @return \IMS\Security\Type\AssignmentTypeInfoType
     */
    public function getAssignmentType()
    {
        return $this->AssignmentType;
    }

    /**
     * @param \IMS\Security\Type\AssignmentTypeInfoType $AssignmentType
     * @return AssignmentInfoType
     */
    public function withAssignmentType($AssignmentType)
    {
        $new = clone $this;
        $new->AssignmentType = $AssignmentType;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchType
     */
    public function getAssignedBranch()
    {
        return $this->AssignedBranch;
    }

    /**
     * @param \IMS\Security\Type\BranchType $AssignedBranch
     * @return AssignmentInfoType
     */
    public function withAssignedBranch($AssignedBranch)
    {
        $new = clone $this;
        $new->AssignedBranch = $AssignedBranch;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SimpleMaterialGroupingInfoType
     */
    public function getAssignedMaterialGrouping()
    {
        return $this->AssignedMaterialGrouping;
    }

    /**
     * @param \IMS\Security\Type\SimpleMaterialGroupingInfoType
     * $AssignedMaterialGrouping
     * @return AssignmentInfoType
     */
    public function withAssignedMaterialGrouping($AssignedMaterialGrouping)
    {
        $new = clone $this;
        $new->AssignedMaterialGrouping = $AssignedMaterialGrouping;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\SimpleExhibitionInfoType
     */
    public function getAssignedExhibition()
    {
        return $this->AssignedExhibition;
    }

    /**
     * @param \IMS\Security\Type\SimpleExhibitionInfoType $AssignedExhibition
     * @return AssignmentInfoType
     */
    public function withAssignedExhibition($AssignedExhibition)
    {
        $new = clone $this;
        $new->AssignedExhibition = $AssignedExhibition;

        return $new;
    }


}

