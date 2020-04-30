<?php

namespace IMS\Query\Type;

class CheckDiscardItemResponse
{

    /**
     * @var bool
     */
    private $AllowDiscard = null;

    /**
     * @return bool
     */
    public function getAllowDiscard()
    {
        return $this->AllowDiscard;
    }

    /**
     * @param bool $AllowDiscard
     * @return CheckDiscardItemResponse
     */
    public function withAllowDiscard($AllowDiscard)
    {
        $new = clone $this;
        $new->AllowDiscard = $AllowDiscard;

        return $new;
    }


}

