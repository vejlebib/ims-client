<?php

namespace IMS\Query\Type;

class CheckMoveItemToPlaced
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
     * @var \IMS\Query\Type\ItemIdType
     */
    private $ItemId = null;

    /**
     * @var int
     */
    private $MaterialGroupingKey = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return CheckMoveItemToPlaced
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
     * @return CheckMoveItemToPlaced
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

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
     * @return CheckMoveItemToPlaced
     */
    public function withItemId($ItemId)
    {
        $new = clone $this;
        $new->ItemId = $ItemId;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaterialGroupingKey()
    {
        return $this->MaterialGroupingKey;
    }

    /**
     * @param int $MaterialGroupingKey
     * @return CheckMoveItemToPlaced
     */
    public function withMaterialGroupingKey($MaterialGroupingKey)
    {
        $new = clone $this;
        $new->MaterialGroupingKey = $MaterialGroupingKey;

        return $new;
    }


}

