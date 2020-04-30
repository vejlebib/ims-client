<?php

namespace IMS\Query\Type;

class GetMaterialGroupingSpecSumsResponse
{

    /**
     * @var \IMS\Query\Type\MaterialGroupingSpecSumInfoType
     */
    private $MaterialGroupingSpecSumInfo = null;

    /**
     * @return \IMS\Query\Type\MaterialGroupingSpecSumInfoType
     */
    public function getMaterialGroupingSpecSumInfo()
    {
        return $this->MaterialGroupingSpecSumInfo;
    }

    /**
     * @param \IMS\Query\Type\MaterialGroupingSpecSumInfoType
     * $MaterialGroupingSpecSumInfo
     * @return GetMaterialGroupingSpecSumsResponse
     */
    public function withMaterialGroupingSpecSumInfo($MaterialGroupingSpecSumInfo)
    {
        $new = clone $this;
        $new->MaterialGroupingSpecSumInfo = $MaterialGroupingSpecSumInfo;

        return $new;
    }


}

