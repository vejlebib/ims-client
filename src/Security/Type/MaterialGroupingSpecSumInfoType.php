<?php

namespace IMS\Security\Type;

class MaterialGroupingSpecSumInfoType
{

    /**
     * @var int
     */
    private $SpecNo = null;

    /**
     * @var \IMS\Security\Type\CapacityType
     */
    private $Sum = null;

    /**
     * @var int
     */
    private $NumberOfItems = null;

    /**
     * @return int
     */
    public function getSpecNo()
    {
        return $this->SpecNo;
    }

    /**
     * @param int $SpecNo
     * @return MaterialGroupingSpecSumInfoType
     */
    public function withSpecNo($SpecNo)
    {
        $new = clone $this;
        $new->SpecNo = $SpecNo;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CapacityType
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * @param \IMS\Security\Type\CapacityType $Sum
     * @return MaterialGroupingSpecSumInfoType
     */
    public function withSum($Sum)
    {
        $new = clone $this;
        $new->Sum = $Sum;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfItems()
    {
        return $this->NumberOfItems;
    }

    /**
     * @param int $NumberOfItems
     * @return MaterialGroupingSpecSumInfoType
     */
    public function withNumberOfItems($NumberOfItems)
    {
        $new = clone $this;
        $new->NumberOfItems = $NumberOfItems;

        return $new;
    }


}

