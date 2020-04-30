<?php

namespace IMS\Query\Type;

class CheckMoveResultInfoType
{

    /**
     * @var \IMS\Query\Type\CheckMoveResultType
     */
    private $Result = null;

    /**
     * @var \IMS\Query\Type\CheckMoveMessageType
     */
    private $Message = null;

    /**
     * @var int
     */
    private $ItemCount = null;

    /**
     * @return \IMS\Query\Type\CheckMoveResultType
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param \IMS\Query\Type\CheckMoveResultType $Result
     * @return CheckMoveResultInfoType
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\CheckMoveMessageType
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param \IMS\Query\Type\CheckMoveMessageType $Message
     * @return CheckMoveResultInfoType
     */
    public function withMessage($Message)
    {
        $new = clone $this;
        $new->Message = $Message;

        return $new;
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }

    /**
     * @param int $ItemCount
     * @return CheckMoveResultInfoType
     */
    public function withItemCount($ItemCount)
    {
        $new = clone $this;
        $new->ItemCount = $ItemCount;

        return $new;
    }


}

