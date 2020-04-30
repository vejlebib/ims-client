<?php

namespace IMS\Security\Type;

class GetOperatorForTokenResponse
{

    /**
     * @var \IMS\Security\Type\OperatorInfoType
     */
    private $OperatorInfo = null;

    /**
     * @return \IMS\Security\Type\OperatorInfoType
     */
    public function getOperatorInfo()
    {
        return $this->OperatorInfo;
    }

    /**
     * @param \IMS\Security\Type\OperatorInfoType $OperatorInfo
     * @return GetOperatorForTokenResponse
     */
    public function withOperatorInfo($OperatorInfo)
    {
        $new = clone $this;
        $new->OperatorInfo = $OperatorInfo;

        return $new;
    }


}

