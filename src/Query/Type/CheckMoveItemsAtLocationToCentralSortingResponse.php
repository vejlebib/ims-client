<?php

namespace IMS\Query\Type;

class CheckMoveItemsAtLocationToCentralSortingResponse
{

    /**
     * @var \IMS\Query\Type\CheckMoveResultInfoType
     */
    private $CheckMoveResult = null;

    /**
     * @return \IMS\Query\Type\CheckMoveResultInfoType
     */
    public function getCheckMoveResult()
    {
        return $this->CheckMoveResult;
    }

    /**
     * @param \IMS\Query\Type\CheckMoveResultInfoType $CheckMoveResult
     * @return CheckMoveItemsAtLocationToCentralSortingResponse
     */
    public function withCheckMoveResult($CheckMoveResult)
    {
        $new = clone $this;
        $new->CheckMoveResult = $CheckMoveResult;

        return $new;
    }


}

