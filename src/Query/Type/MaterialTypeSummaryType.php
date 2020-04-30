<?php

namespace IMS\Query\Type;

class MaterialTypeSummaryType
{

    /**
     * @var \IMS\Query\Type\MaterialTypeKeyType
     */
    private $MaterialTypeKey = null;

    /**
     * @var \IMS\Query\Type\MaterialTypeCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Query\Type\MaterialTypeNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\MaterialTypeKeyType
     */
    public function getMaterialTypeKey()
    {
        return $this->MaterialTypeKey;
    }

    /**
     * @param \IMS\Query\Type\MaterialTypeKeyType $MaterialTypeKey
     * @return MaterialTypeSummaryType
     */
    public function withMaterialTypeKey($MaterialTypeKey)
    {
        $new = clone $this;
        $new->MaterialTypeKey = $MaterialTypeKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialTypeCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Query\Type\MaterialTypeCodeType $Code
     * @return MaterialTypeSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\MaterialTypeNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\MaterialTypeNameType $Name
     * @return MaterialTypeSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

