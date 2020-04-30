<?php

namespace IMS\Query\Type;

class GetAuthors
{

    /**
     * @var \IMS\Query\Type\TokenType
     */
    private $Token = null;

    /**
     * @var \IMS\Query\Type\AuthorType
     */
    private $Author = null;

    /**
     * @return \IMS\Query\Type\TokenType
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param \IMS\Query\Type\TokenType $Token
     * @return GetAuthors
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\AuthorType
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * @param \IMS\Query\Type\AuthorType $Author
     * @return GetAuthors
     */
    public function withAuthor($Author)
    {
        $new = clone $this;
        $new->Author = $Author;

        return $new;
    }


}

