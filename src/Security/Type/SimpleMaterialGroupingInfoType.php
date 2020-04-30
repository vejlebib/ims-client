<?php

namespace IMS\Security\Type;

class SimpleMaterialGroupingInfoType
{

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $MaterialGroupingName = null;

    /**
     * @var \IMS\Security\Type\MaterialGroupingKeyType
     */
    private $MaterialGroupingKey = null;

    /**
     * @return \IMS\Security\Type\NameType
     */
    public function getMaterialGroupingName()
    {
        return $this->MaterialGroupingName;
    }

    /**
     * @param \IMS\Security\Type\NameType $MaterialGroupingName
     * @return SimpleMaterialGroupingInfoType
     */
    public function withMaterialGroupingName($MaterialGroupingName)
    {
        $new = clone $this;
        $new->MaterialGroupingName = $MaterialGroupingName;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\MaterialGroupingKeyType
     */
    public function getMaterialGroupingKey()
    {
        return $this->MaterialGroupingKey;
    }

    /**
     * @param \IMS\Security\Type\MaterialGroupingKeyType $MaterialGroupingKey
     * @return SimpleMaterialGroupingInfoType
     */
    public function withMaterialGroupingKey($MaterialGroupingKey)
    {
        $new = clone $this;
        $new->MaterialGroupingKey = $MaterialGroupingKey;

        return $new;
    }


}

