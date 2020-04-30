<?php

namespace IMS\Query\Type;

class DoFineSortingOnItemResponse
{

    /**
     * @var \IMS\Query\Type\FineSortingKeyType
     */
    private $FineSortingKey = null;

    /**
     * @return \IMS\Query\Type\FineSortingKeyType
     */
    public function getFineSortingKey()
    {
        return $this->FineSortingKey;
    }

    /**
     * @param \IMS\Query\Type\FineSortingKeyType $FineSortingKey
     * @return DoFineSortingOnItemResponse
     */
    public function withFineSortingKey($FineSortingKey)
    {
        $new = clone $this;
        $new->FineSortingKey = $FineSortingKey;

        return $new;
    }


}

