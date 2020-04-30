<?php

namespace IMS\Query\Type;

class SimpleMaterialGroupingInfoType
{

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $MaterialGroupingName = null;

    /**
     * @var \IMS\Query\Type\MaterialGroupingKeyType
     */
    private $MaterialGroupingKey = null;

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getMaterialGroupingName()
    {
        return $this->MaterialGroupingName;
    }

    /**
     * @param \IMS\Query\Type\NameType $MaterialGroupingName
     * @return SimpleMaterialGroupingInfoType
     */
    public function withMaterialGroupingName($MaterialGroupingName)
    {
        $new = clone $this;
        $new->MaterialGroupingName = $MaterialGroupingName;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialGroupingKeyType
     */
    public function getMaterialGroupingKey()
    {
        return $this->MaterialGroupingKey;
    }

    /**
     * @param \IMS\Query\Type\MaterialGroupingKeyType $MaterialGroupingKey
     * @return SimpleMaterialGroupingInfoType
     */
    public function withMaterialGroupingKey($MaterialGroupingKey)
    {
        $new = clone $this;
        $new->MaterialGroupingKey = $MaterialGroupingKey;

        return $new;
    }


}

