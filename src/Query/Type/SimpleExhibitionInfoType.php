<?php

namespace IMS\Query\Type;

class SimpleExhibitionInfoType
{

    /**
     * @var int
     */
    private $ExhibitionKey = null;

    /**
     * @var \IMS\Query\Type\ExhibitionNameType
     */
    private $Name = null;

    /**
     * @return int
     */
    public function getExhibitionKey()
    {
        return $this->ExhibitionKey;
    }

    /**
     * @param int $ExhibitionKey
     * @return SimpleExhibitionInfoType
     */
    public function withExhibitionKey($ExhibitionKey)
    {
        $new = clone $this;
        $new->ExhibitionKey = $ExhibitionKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ExhibitionNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\ExhibitionNameType $Name
     * @return SimpleExhibitionInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

