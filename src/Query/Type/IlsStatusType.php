<?php

namespace IMS\Query\Type;

class IlsStatusType
{

    /**
     * @var \IMS\Query\Type\IlsStatusKeyType
     */
    private $StatusKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\IlsStatusKeyType
     */
    public function getStatusKey()
    {
        return $this->StatusKey;
    }

    /**
     * @param \IMS\Query\Type\IlsStatusKeyType $StatusKey
     * @return IlsStatusType
     */
    public function withStatusKey($StatusKey)
    {
        $new = clone $this;
        $new->StatusKey = $StatusKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\NameType $Name
     * @return IlsStatusType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

