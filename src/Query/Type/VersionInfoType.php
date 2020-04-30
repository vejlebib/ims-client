<?php

namespace IMS\Query\Type;

class VersionInfoType
{

    /**
     * @var \IMS\Query\Type\VersionId
     */
    private $MinimumRequiredVersion = null;

    /**
     * @var \IMS\Query\Type\VersionId
     */
    private $RecommendedVersion = null;

    /**
     * @var \IMS\Query\Type\DownloadUrlInfoType
     */
    private $DownloadUrls = null;

    /**
     * @return \IMS\Query\Type\VersionId
     */
    public function getMinimumRequiredVersion()
    {
        return $this->MinimumRequiredVersion;
    }

    /**
     * @param \IMS\Query\Type\VersionId $MinimumRequiredVersion
     * @return VersionInfoType
     */
    public function withMinimumRequiredVersion($MinimumRequiredVersion)
    {
        $new = clone $this;
        $new->MinimumRequiredVersion = $MinimumRequiredVersion;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\VersionId
     */
    public function getRecommendedVersion()
    {
        return $this->RecommendedVersion;
    }

    /**
     * @param \IMS\Query\Type\VersionId $RecommendedVersion
     * @return VersionInfoType
     */
    public function withRecommendedVersion($RecommendedVersion)
    {
        $new = clone $this;
        $new->RecommendedVersion = $RecommendedVersion;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DownloadUrlInfoType
     */
    public function getDownloadUrls()
    {
        return $this->DownloadUrls;
    }

    /**
     * @param \IMS\Query\Type\DownloadUrlInfoType $DownloadUrls
     * @return VersionInfoType
     */
    public function withDownloadUrls($DownloadUrls)
    {
        $new = clone $this;
        $new->DownloadUrls = $DownloadUrls;

        return $new;
    }


}

