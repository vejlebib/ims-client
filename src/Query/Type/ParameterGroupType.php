<?php

namespace IMS\Query\Type;

class ParameterGroupType
{

    /**
     * @var \IMS\Query\Type\ParameterGroupKeyType
     */
    private $ParameterGroupKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\ParameterGroupKeyType
     */
    public function getParameterGroupKey()
    {
        return $this->ParameterGroupKey;
    }

    /**
     * @param \IMS\Query\Type\ParameterGroupKeyType $ParameterGroupKey
     * @return ParameterGroupType
     */
    public function withParameterGroupKey($ParameterGroupKey)
    {
        $new = clone $this;
        $new->ParameterGroupKey = $ParameterGroupKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\NameType $Name
     * @return ParameterGroupType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

