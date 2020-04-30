<?php

namespace IMS\Security\Type;

class FineSortingAndTransportUnitInfoType
{

    /**
     * @var \IMS\Security\Type\TransportUnitIdType
     */
    private $TransportUnitId = null;

    /**
     * @var \IMS\Security\Type\FineSortingKeyType
     */
    private $FineSortingKey = null;

    /**
     * @return \IMS\Security\Type\TransportUnitIdType
     */
    public function getTransportUnitId()
    {
        return $this->TransportUnitId;
    }

    /**
     * @param \IMS\Security\Type\TransportUnitIdType $TransportUnitId
     * @return FineSortingAndTransportUnitInfoType
     */
    public function withTransportUnitId($TransportUnitId)
    {
        $new = clone $this;
        $new->TransportUnitId = $TransportUnitId;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\FineSortingKeyType
     */
    public function getFineSortingKey()
    {
        return $this->FineSortingKey;
    }

    /**
     * @param \IMS\Security\Type\FineSortingKeyType $FineSortingKey
     * @return FineSortingAndTransportUnitInfoType
     */
    public function withFineSortingKey($FineSortingKey)
    {
        $new = clone $this;
        $new->FineSortingKey = $FineSortingKey;

        return $new;
    }


}

