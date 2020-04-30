<?php

namespace IMS\Security\Type;

class LanguageType
{

    /**
     * @var \IMS\Security\Type\LanguageCodeType
     */
    private $LanguageCode = null;

    /**
     * @var \IMS\Security\Type\LanguageNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\LanguageCodeType
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     * @param \IMS\Security\Type\LanguageCodeType $LanguageCode
     * @return LanguageType
     */
    public function withLanguageCode($LanguageCode)
    {
        $new = clone $this;
        $new->LanguageCode = $LanguageCode;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\LanguageNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\LanguageNameType $Name
     * @return LanguageType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

