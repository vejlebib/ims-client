<?php

namespace IMS\Query\Type;

class GetInfoAboutTransportUnitResponse
{

    /**
     * @var \IMS\Query\Type\NameValuePairType
     */
    private $NameValuePairs = null;

    /**
     * @return \IMS\Query\Type\NameValuePairType
     */
    public function getNameValuePairs()
    {
        return $this->NameValuePairs;
    }

    /**
     * @param \IMS\Query\Type\NameValuePairType $NameValuePairs
     * @return GetInfoAboutTransportUnitResponse
     */
    public function withNameValuePairs($NameValuePairs)
    {
        $new = clone $this;
        $new->NameValuePairs = $NameValuePairs;

        return $new;
    }


}

