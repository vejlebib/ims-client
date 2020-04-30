<?php

namespace IMS\Query\Type;

class GetInfoAboutChuteResponse
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
     * @return GetInfoAboutChuteResponse
     */
    public function withNameValuePairs($NameValuePairs)
    {
        $new = clone $this;
        $new->NameValuePairs = $NameValuePairs;

        return $new;
    }


}

