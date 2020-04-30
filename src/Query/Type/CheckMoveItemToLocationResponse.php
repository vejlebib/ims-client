<?php

namespace IMS\Query\Type;

class CheckMoveItemToLocationResponse
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
     * @return CheckMoveItemToLocationResponse
     */
    public function withCheckMoveResult($CheckMoveResult)
    {
        $new = clone $this;
        $new->CheckMoveResult = $CheckMoveResult;

        return $new;
    }


}

