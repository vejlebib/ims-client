<?php

namespace IMS\Query\Type;

class GetRequisitionDetailsResponse
{

    /**
     * @var \IMS\Query\Type\RequisitionDetailsType
     */
    private $RequisitionDetails = null;

    /**
     * @return \IMS\Query\Type\RequisitionDetailsType
     */
    public function getRequisitionDetails()
    {
        return $this->RequisitionDetails;
    }

    /**
     * @param \IMS\Query\Type\RequisitionDetailsType $RequisitionDetails
     * @return GetRequisitionDetailsResponse
     */
    public function withRequisitionDetails($RequisitionDetails)
    {
        $new = clone $this;
        $new->RequisitionDetails = $RequisitionDetails;

        return $new;
    }


}

