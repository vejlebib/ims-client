<?php

namespace IMS\Security\Type;

class ParameterInfoType
{

    /**
     * @var \IMS\Security\Type\ParameterIdType
     */
    private $ParameterId = null;

    /**
     * @var \IMS\Security\Type\ParameterValueType
     */
    private $Value = null;

    /**
     * @return \IMS\Security\Type\ParameterIdType
     */
    public function getParameterId()
    {
        return $this->ParameterId;
    }

    /**
     * @param \IMS\Security\Type\ParameterIdType $ParameterId
     * @return ParameterInfoType
     */
    public function withParameterId($ParameterId)
    {
        $new = clone $this;
        $new->ParameterId = $ParameterId;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ParameterValueType
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param \IMS\Security\Type\ParameterValueType $Value
     * @return ParameterInfoType
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }


}

