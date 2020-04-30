<?php

namespace IMS\Query\Type;

class GetTransportUnitContentsResponse
{

    /**
     * @var \IMS\Query\Type\TransportUnitContentsType
     */
    private $Contents = null;

    /**
     * @return \IMS\Query\Type\TransportUnitContentsType
     */
    public function getContents()
    {
        return $this->Contents;
    }

    /**
     * @param \IMS\Query\Type\TransportUnitContentsType $Contents
     * @return GetTransportUnitContentsResponse
     */
    public function withContents($Contents)
    {
        $new = clone $this;
        $new->Contents = $Contents;

        return $new;
    }


}

