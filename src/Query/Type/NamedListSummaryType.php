<?php

namespace IMS\Query\Type;

class NamedListSummaryType
{

    /**
     * @var \IMS\Query\Type\NamedListKeyType
     */
    private $NamedListKey = null;

    /**
     * @var \IMS\Query\Type\NamedListNameType
     */
    private $NamedListName = null;

    /**
     * @return \IMS\Query\Type\NamedListKeyType
     */
    public function getNamedListKey()
    {
        return $this->NamedListKey;
    }

    /**
     * @param \IMS\Query\Type\NamedListKeyType $NamedListKey
     * @return NamedListSummaryType
     */
    public function withNamedListKey($NamedListKey)
    {
        $new = clone $this;
        $new->NamedListKey = $NamedListKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NamedListNameType
     */
    public function getNamedListName()
    {
        return $this->NamedListName;
    }

    /**
     * @param \IMS\Query\Type\NamedListNameType $NamedListName
     * @return NamedListSummaryType
     */
    public function withNamedListName($NamedListName)
    {
        $new = clone $this;
        $new->NamedListName = $NamedListName;

        return $new;
    }


}

