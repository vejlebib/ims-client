<?php

namespace IMS\Query\Type;

class CollectionInfoType
{

    /**
     * @var bool
     */
    private $Reservable = null;

    /**
     * @var bool
     */
    private $Lendable = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @var bool
     */
    private $DeletedInIls = null;

    /**
     * @return bool
     */
    public function getReservable()
    {
        return $this->Reservable;
    }

    /**
     * @param bool $Reservable
     * @return CollectionInfoType
     */
    public function withReservable($Reservable)
    {
        $new = clone $this;
        $new->Reservable = $Reservable;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLendable()
    {
        return $this->Lendable;
    }

    /**
     * @param bool $Lendable
     * @return CollectionInfoType
     */
    public function withLendable($Lendable)
    {
        $new = clone $this;
        $new->Lendable = $Lendable;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->Disabled;
    }

    /**
     * @param bool $Disabled
     * @return CollectionInfoType
     */
    public function withDisabled($Disabled)
    {
        $new = clone $this;
        $new->Disabled = $Disabled;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDeletedInIls()
    {
        return $this->DeletedInIls;
    }

    /**
     * @param bool $DeletedInIls
     * @return CollectionInfoType
     */
    public function withDeletedInIls($DeletedInIls)
    {
        $new = clone $this;
        $new->DeletedInIls = $DeletedInIls;

        return $new;
    }


}

