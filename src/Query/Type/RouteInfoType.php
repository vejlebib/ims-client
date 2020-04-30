<?php

namespace IMS\Query\Type;

class RouteInfoType
{

    /**
     * @var \IMS\Query\Type\BranchInfoType
     */
    private $SourceBranch = null;

    /**
     * @var \IMS\Query\Type\BranchInfoType
     */
    private $DestinationBranch = null;

    /**
     * @var int
     */
    private $Cost = null;

    /**
     * @return \IMS\Query\Type\BranchInfoType
     */
    public function getSourceBranch()
    {
        return $this->SourceBranch;
    }

    /**
     * @param \IMS\Query\Type\BranchInfoType $SourceBranch
     * @return RouteInfoType
     */
    public function withSourceBranch($SourceBranch)
    {
        $new = clone $this;
        $new->SourceBranch = $SourceBranch;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchInfoType
     */
    public function getDestinationBranch()
    {
        return $this->DestinationBranch;
    }

    /**
     * @param \IMS\Query\Type\BranchInfoType $DestinationBranch
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

