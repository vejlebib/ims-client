<?php

namespace IMS\Query\Type;

class FineSortingAndTransportUnitInfoType
{

    /**
     * @var \IMS\Query\Type\TransportUnitIdType
     */
    private $TransportUnitId = null;

    /**
     * @var \IMS\Query\Type\FineSortingKeyType
     */
    private $FineSortingKey = null;

    /**
     * @return \IMS\Query\Type\TransportUnitIdType
     */
    public function getTransportUnitId()
    {
        return $this->TransportUnitId;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitIdType $TransportUnitId
     * @return FineSortingAndTransportUnitInfoType
     */
    public function withTransportUnitId($TransportUnitId)
    {
        $new = clone $this;
        $new->TransportUnitId = $TransportUnitId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\FineSortingKeyType
     */
    public function getFineSortingKey()
    {
        return $this->FineSortingKey;
    }

    /**
     * @param \IMS\Query\Type\FineSortingKeyType $FineSortingKey
     * @return FineSortingAndTransportUnitInfoType
     */
    public function withFineSortingKey($FineSortingKey)
    {
        $new = clone $this;
        $new->FineSortingKey = $FineSortingKey;

        return $new;
    }


}

