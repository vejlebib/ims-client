<?php

namespace IMS\Query\Type;

class DoFineSortingOnTransportUnitResponse
{

    /**
     * @var \IMS\Query\Type\FineSortingDistributionInfoType
     */
    private $FineSortingDistributions = null;

    /**
     * @return \IMS\Query\Type\FineSortingDistributionInfoType
     */
    public function getFineSortingDistributions()
    {
        return $this->FineSortingDistributions;
    }

    /**
     * @param \IMS\Query\Type\FineSortingDistributionInfoType $FineSortingDistributions
     * @return DoFineSortingOnTransportUnitResponse
     */
    public function withFineSortingDistributions($FineSortingDistributions)
    {
        $new = clone $this;
        $new->FineSortingDistributions = $FineSortingDistributions;

        return $new;
    }


}

