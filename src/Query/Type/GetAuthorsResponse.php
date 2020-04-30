<?php

namespace IMS\Query\Type;

class GetAuthorsResponse
{

    /**
     * @var \IMS\Query\Type\AuthorType
     */
    private $Authors = null;

    /**
     * @return \IMS\Query\Type\AuthorType
     */
    public function getAuthors()
    {
        return $this->Authors;
    }

    /**
     * @param \IMS\Query\Type\AuthorType $Authors
     * @return GetAuthorsResponse
     */
    public function withAuthors($Authors)
    {
        $new = clone $this;
        $new->Authors = $Authors;

        return $new;
    }


}

