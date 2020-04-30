<?php

namespace IMS\Query\Type;

class GetItemHistory
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var \IMS\Query\Type\ItemKeyType
     */
    private $ItemKey = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetItemHistory
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param \IMS\Query\Type\ItemIdType $ItemId
     * @return GetItemHistory
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ItemKeyType
     */
    public function getItemKey()
    {
        return $this->ItemKey;
    }

    /**
     * @param \IMS\Query\Type\ItemKeyType $ItemKey
     * @return GetItemHistory
     */
    public function withItemKey($ItemKey)
    {
        $new = clone $this;
        $new->ItemKey = $ItemKey;

        return $new;
    }


}

