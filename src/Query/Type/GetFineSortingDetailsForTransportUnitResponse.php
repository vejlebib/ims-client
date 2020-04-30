<?php

namespace IMS\Query\Type;

class GetFineSortingDetailsForTransportUnitResponse
{

    /**
     * @var \IMS\Query\Type\FineSortingDetailedResultType
     */
    private $Result = null;

    /**
     * @return \IMS\Query\Type\FineSortingDetailedResultType
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param \IMS\Query\Type\FineSortingDetailedResultType $Result
     * @return GetFineSortingDetailsForTransportUnitResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }


}

