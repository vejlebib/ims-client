<?php

namespace IMS\Query\Type;

class FineSortingDistributionInfoType
{

    /**
     * @var \IMS\Query\Type\FineSortingKeyType
     */
    private $FineSortingKey = null;

    /**
     * @var int
     */
    private $Count = null;

    /**
     * @return \IMS\Query\Type\FineSortingKeyType
     */
    public function getFineSortingKey()
    {
        return $this->FineSortingKey;
    }

    /**
     * @param \IMS\Query\Type\FineSortingKeyType $FineSortingKey
     * @return FineSortingDistributionInfoType
     */
    public function withFineSortingKey($FineSortingKey)
    {
        $new = clone $this;
        $new->FineSortingKey = $FineSortingKey;

        return $new;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * @param int $Count
     * @return FineSortingDistributionInfoType
     */
    public function withCount($Count)
    {
        $new = clone $this;
        $new->Count = $Count;

        return $new;
    }


}

