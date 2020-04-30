<?php

namespace IMS\Query\Type;

class ExternalDestinationInfoType
{

    /**
     * @var \IMS\Query\Type\BranchInfoType
     */
    private $Branch = null;

    /**
     * @var \IMS\Query\Type\DestinationTypeInfoType
     */
    private $DestinationType = null;

    /**
     * @return \IMS\Query\Type\BranchInfoType
     */
    public function getBranch()
    {
        return $this->Branch;
    }

    /**
     * @param \IMS\Query\Type\BranchInfoType $Branch
     * @return ExternalDestinationInfoType
     */
    public function withBranch($Branch)
    {
        $new = clone $this;
        $new->Branch = $Branch;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DestinationTypeInfoType
     */
    public function getDestinationType()
    {
        return $this->DestinationType;
    }

    /**
     * @param \IMS\Query\Type\DestinationTypeInfoType $DestinationType
     * @return ExternalDestinationInfoType
     */
    public function withDestinationType($DestinationType)
    {
        $new = clone $this;
        $new->DestinationType = $DestinationType;

        return $new;
    }


}

