<?php

namespace IMS\Security\Type;

class FineSortingDistributionInfoType
{

    /**
     * @var \IMS\Security\Type\FineSortingKeyType
     */
    private $FineSortingKey = null;

    /**
     * @var int
     */
    private $Count = null;

    /**
     * @return \IMS\Security\Type\FineSortingKeyType
     */
    public function getFineSortingKey()
    {
        return $this->FineSortingKey;
    }

    /**
     * @param \IMS\Security\Type\FineSortingKeyType $FineSortingKey
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

