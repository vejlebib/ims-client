<?php

namespace IMS\Security\Type;

class ParameterGroupType
{

    /**
     * @var \IMS\Security\Type\ParameterGroupKeyType
     */
    private $ParameterGroupKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\ParameterGroupKeyType
     */
    public function getParameterGroupKey()
    {
        return $this->ParameterGroupKey;
    }

    /**
     * @param \IMS\Security\Type\ParameterGroupKeyType $ParameterGroupKey
     * @return ParameterGroupType
     */
    public function withParameterGroupKey($ParameterGroupKey)
    {
        $new = clone $this;
        $new->ParameterGroupKey = $ParameterGroupKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\NameType $Name
     * @return ParameterGroupType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

