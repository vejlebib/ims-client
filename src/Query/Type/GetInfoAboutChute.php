<?php

namespace IMS\Query\Type;

class GetInfoAboutChute
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Query\Type\ChuteIdType
     */
    private $ChuteId = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetInfoAboutChute
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $BranchKey
     * @return GetInfoAboutChute
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ChuteIdType
     */
    public function getChuteId()
    {
        return $this->ChuteId;
    }

    /**
     * @param \IMS\Query\Type\ChuteIdType $ChuteId
     * @return GetInfoAboutChute
     */
    public function withChuteId($ChuteId)
    {
        $new = clone $this;
        $new->ChuteId = $ChuteId;

        return $new;
    }


}

