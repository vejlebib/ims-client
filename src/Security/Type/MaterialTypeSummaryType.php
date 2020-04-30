<?php

namespace IMS\Security\Type;

class MaterialTypeSummaryType
{

    /**
     * @var \IMS\Security\Type\MaterialTypeKeyType
     */
    private $MaterialTypeKey = null;

    /**
     * @var \IMS\Security\Type\MaterialTypeCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Security\Type\MaterialTypeNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\MaterialTypeKeyType
     */
    public function getMaterialTypeKey()
    {
        return $this->MaterialTypeKey;
    }

    /**
     * @param \IMS\Security\Type\MaterialTypeKeyType $MaterialTypeKey
     * @return MaterialTypeSummaryType
     */
    public function withMaterialTypeKey($MaterialTypeKey)
    {
        $new = clone $this;
        $new->MaterialTypeKey = $MaterialTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\MaterialTypeCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Security\Type\MaterialTypeCodeType $Code
     * @return MaterialTypeSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\MaterialTypeNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\MaterialTypeNameType $Name
     * @return MaterialTypeSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

