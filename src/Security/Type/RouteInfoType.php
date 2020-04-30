<?php

namespace IMS\Security\Type;

class RouteInfoType
{

    /**
     * @var \IMS\Security\Type\BranchInfoType
     */
    private $SourceBranch = null;

    /**
     * @var \IMS\Security\Type\BranchInfoType
     */
    private $DestinationBranch = null;

    /**
     * @var int
     */
    private $Cost = null;

    /**
     * @return \IMS\Security\Type\BranchInfoType
     */
    public function getSourceBranch()
    {
        return $this->SourceBranch;
    }

    /**
     * @param \IMS\Security\Type\BranchInfoType $SourceBranch
     * @return RouteInfoType
     */
    public function withSourceBranch($SourceBranch)
    {
        $new = clone $this;
        $new->SourceBranch = $SourceBranch;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\BranchInfoType
     */
    public function getDestinationBranch()
    {
        return $this->DestinationBranch;
    }

    /**
     * @param \IMS\Security\Type\BranchInfoType $DestinationBranch
     * @return RouteInfoType
     */
    public function withDestinationBranch($DestinationBranch)
    {
        $new = clone $this;
        $new->DestinationBranch = $DestinationBranch;

        return $new;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->Cost;
    }

    /**
     * @param int $Cost
     * @return RouteInfoType
     */
    public function withCost($Cost)
    {
        $new = clone $this;
        $new->Cost = $Cost;

        return $new;
    }


}

