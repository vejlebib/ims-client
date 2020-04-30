<?php

namespace IMS\Query\Type;

class DownloadUrlInfoType
{

    /**
     * @var int
     */
    private $UrlNumber = null;

    /**
     * @var \IMS\Query\Type\UrlType
     */
    private $Url = null;

    /**
     * @return int
     */
    public function getUrlNumber()
    {
        return $this->UrlNumber;
    }

    /**
     * @param int $UrlNumber
     * @return DownloadUrlInfoType
     */
    public function withUrlNumber($UrlNumber)
    {
        $new = clone $this;
        $new->UrlNumber = $UrlNumber;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\UrlType
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param \IMS\Query\Type\UrlType $Url
     * @return DownloadUrlInfoType
     */
    public function withUrl($Url)
    {
        $new = clone $this;
        $new->Url = $Url;

        return $new;
    }


}

