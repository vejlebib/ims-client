<?php

namespace IMS\Query\Type;

class GetTitlesResponse
{

    /**
     * @var \IMS\Query\Type\TitleType
     */
    private $Titles = null;

    /**
     * @return \IMS\Query\Type\TitleType
     */
    public function getTitles()
    {
        return $this->Titles;
    }

    /**
     * @param \IMS\Query\Type\TitleType $Titles
     * @return GetTitlesResponse
     */
    public function withTitles($Titles)
    {
        $new = clone $this;
        $new->Titles = $Titles;

        return $new;
    }


}

