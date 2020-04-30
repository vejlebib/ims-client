<?php

namespace IMS\Security\Type;

class IlsStatusType
{

    /**
     * @var \IMS\Security\Type\IlsStatusKeyType
     */
    private $StatusKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\IlsStatusKeyType
     */
    public function getStatusKey()
    {
        return $this->StatusKey;
    }

    /**
     * @param \IMS\Security\Type\IlsStatusKeyType $StatusKey
     * @return IlsStatusType
     */
    public function withStatusKey($StatusKey)
    {
        $new = clone $this;
        $new->StatusKey = $StatusKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\NameType $Name
     * @return IlsStatusType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

