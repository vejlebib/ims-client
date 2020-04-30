<?php

namespace IMS\Query\Type;

class FindRequisitionsResponse
{

    /**
     * @var \IMS\Query\Type\RequisitionInfoType
     */
    private $Requisitions = null;

    /**
     * @return \IMS\Query\Type\RequisitionInfoType
     */
    public function getRequisitions()
    {
        return $this->Requisitions;
    }

    /**
     * @param \IMS\Query\Type\RequisitionInfoType $Requisitions
     * @return FindRequisitionsResponse
     */
    public function withRequisitions($Requisitions)
    {
        $new = clone $this;
        $new->Requisitions = $Requisitions;

        return $new;
    }


}

