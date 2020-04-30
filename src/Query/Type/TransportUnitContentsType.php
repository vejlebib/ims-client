<?php

namespace IMS\Query\Type;

class TransportUnitContentsType
{

    /**
     * @var \IMS\Query\Type\ItemInfoType
     */
    private $Items = null;

    /**
     * @var \IMS\Query\Type\TransportUnitInfoType
     */
    private $TransportUnits = null;

    /**
     * @return \IMS\Query\Type\ItemInfoType
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * @param \IMS\Query\Type\ItemInfoType $Items
     * @return TransportUnitContentsType
     */
    public function withItems($Items)
    {
        $new = clone $this;
        $new->Items = $Items;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\TransportUnitInfoType
     */
    public function getTransportUnits()
    {
        return $this->TransportUnits;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitInfoType $TransportUnits
     * @return TransportUnitContentsType
     */
    public function withTransportUnits($TransportUnits)
    {
        $new = clone $this;
        $new->TransportUnits = $TransportUnits;

        return $new;
    }


}

