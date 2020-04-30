<?php

namespace IMS\Query\Type;

class GetItemsOfLocation
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
     * @var \IMS\Query\Type\LocationIdType
     */
    private $LocationId = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetItemsOfLocation
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
     * @return GetItemsOfLocation
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\LocationIdType
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }

    /**
     * @param \IMS\Query\Type\LocationIdType $LocationId
     * @return GetItemsOfLocation
     */
    public function withLocationId($LocationId)
    {
        $new = clone $this;
        $new->LocationId = $LocationId;

        return $new;
    }


}

