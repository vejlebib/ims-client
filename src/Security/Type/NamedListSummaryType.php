<?php

namespace IMS\Security\Type;

class NamedListSummaryType
{

    /**
     * @var \IMS\Security\Type\NamedListKeyType
     */
    private $NamedListKey = null;

    /**
     * @var \IMS\Security\Type\NamedListNameType
     */
    private $NamedListName = null;

    /**
     * @return \IMS\Security\Type\NamedListKeyType
     */
    public function getNamedListKey()
    {
        return $this->NamedListKey;
    }

    /**
     * @param \IMS\Security\Type\NamedListKeyType $NamedListKey
     * @return NamedListSummaryType
     */
    public function withNamedListKey($NamedListKey)
    {
        $new = clone $this;
        $new->NamedListKey = $NamedListKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\NamedListNameType
     */
    public function getNamedListName()
    {
        return $this->NamedListName;
    }

    /**
     * @param \IMS\Security\Type\NamedListNameType $NamedListName
     * @return NamedListSummaryType
     */
    public function withNamedListName($NamedListName)
    {
        $new = clone $this;
        $new->NamedListName = $NamedListName;

        return $new;
    }


}

