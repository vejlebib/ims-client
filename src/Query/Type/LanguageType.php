<?php

namespace IMS\Query\Type;

class LanguageType
{

    /**
     * @var \IMS\Query\Type\LanguageCodeType
     */
    private $LanguageCode = null;

    /**
     * @var \IMS\Query\Type\LanguageNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\LanguageCodeType
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     * @param \IMS\Query\Type\LanguageCodeType $LanguageCode
     * @return LanguageType
     */
    public function withLanguageCode($LanguageCode)
    {
        $new = clone $this;
        $new->LanguageCode = $LanguageCode;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\LanguageNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\LanguageNameType $Name
     * @return LanguageType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

