<?php

namespace IMS\Query\Type;

class TransportUnitHistoryType
{

    /**
     * @var \IMS\Query\Type\HistoryInfoType
     */
    private $HistoryInfos = null;

    /**
     * @return \IMS\Query\Type\HistoryInfoType
     */
    public function getHistoryInfos()
    {
        return $this->HistoryInfos;
    }

    /**
     * @param \IMS\Query\Type\HistoryInfoType $HistoryInfos
     * @return TransportUnitHistoryType
     */
    public function withHistoryInfos($HistoryInfos)
    {
        $new = clone $this;
        $new->HistoryInfos = $HistoryInfos;

        return $new;
    }


}

