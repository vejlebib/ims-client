<?php

namespace IMS\Query\Type;

class GetClientVersionInfoResponse
{

    /**
     * @var \IMS\Query\Type\VersionInfoType
     */
    private $VersionInfo = null;

    /**
     * @return \IMS\Query\Type\VersionInfoType
     */
    public function getVersionInfo()
    {
        return $this->VersionInfo;
    }

    /**
     * @param \IMS\Query\Type\VersionInfoType $VersionInfo
     * @return GetClientVersionInfoResponse
     */
    public function withVersionInfo($VersionInfo)
    {
        $new = clone $this;
        $new->VersionInfo = $VersionInfo;

        return $new;
    }


}

