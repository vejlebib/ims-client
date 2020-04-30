<?php

namespace IMS\Query\Type;

class ParameterInfoType
{

    /**
     * @var \IMS\Query\Type\ParameterIdType
     */
    private $ParameterId = null;

    /**
     * @var \IMS\Query\Type\ParameterValueType
     */
    private $Value = null;

    /**
     * @return \IMS\Query\Type\ParameterIdType
     */
    public function getParameterId()
    {
        return $this->ParameterId;
    }

    /**
     * @param \IMS\Query\Type\ParameterIdType $ParameterId
     * @return ParameterInfoType
     */
    public function withParameterId($ParameterId)
    {
        $new = clone $this;
        $new->ParameterId = $ParameterId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ParameterValueType
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param \IMS\Query\Type\ParameterValueType $Value
     * @return ParameterInfoType
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }


}

