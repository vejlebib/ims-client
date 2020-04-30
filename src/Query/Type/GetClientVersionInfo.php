<?php

namespace IMS\Query\Type;

class GetClientVersionInfo
{

    /**
     * @var \IMS\Query\Type\ApplicationId
     */
    private $ApplicationId = null;

    /**
     * @var \IMS\Query\Type\VersionId
     */
    private $CurrentVersion = null;

    /**
     * @return \IMS\Query\Type\ApplicationId
     */
    public function getApplicationId()
    {
        return $this->ApplicationId;
    }

    /**
     * @param \IMS\Query\Type\ApplicationId $ApplicationId
     * @return GetClientVersionInfo
     */
    public function withApplicationId($ApplicationId)
    {
        $new = clone $this;
        $new->ApplicationId = $ApplicationId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\VersionId
     */
    public function getCurrentVersion()
    {
        return $this->CurrentVersion;
    }

    /**
     * @param \IMS\Query\Type\VersionId $CurrentVersion
     * @return GetClientVersionInfo
     */
    public function withCurrentVersion($CurrentVersion)
    {
        $new = clone $this;
        $new->CurrentVersion = $CurrentVersion;

        return $new;
    }


}

