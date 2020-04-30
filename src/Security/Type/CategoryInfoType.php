<?php

namespace IMS\Security\Type;

class CategoryInfoType
{

    /**
     * @var \IMS\Security\Type\CategoryKeyType
     */
    private $CategoryKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @var \IMS\Security\Type\CategoryDistributionRuleInfoType
     */
    private $CategoryDistributionRule = null;

    /**
     * @var \IMS\Security\Type\CategoryParameterType
     */
    private $Parameter = null;

    /**
     * @var bool
     */
    private $ParameterIsPct = null;

    /**
     * @return \IMS\Security\Type\CategoryKeyType
     */
    public function getCategoryKey()
    {
        return $this->CategoryKey;
    }

    /**
     * @param \IMS\Security\Type\CategoryKeyType $CategoryKey
     * @return CategoryInfoType
     */
    public function withCategoryKey($CategoryKey)
    {
        $new = clone $this;
        $new->CategoryKey = $CategoryKey;

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
     * @return CategoryInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\DescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Security\Type\DescriptionType $Description
     * @return CategoryInfoType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->Disabled;
    }

    /**
     * @param bool $Disabled
     * @return CategoryInfoType
     */
    public function withDisabled($Disabled)
    {
        $new = clone $this;
        $new->Disabled = $Disabled;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CategoryDistributionRuleInfoType
     */
    public function getCategoryDistributionRule()
    {
        return $this->CategoryDistributionRule;
    }

    /**
     * @param \IMS\Security\Type\CategoryDistributionRuleInfoType
     * $CategoryDistributionRule
     * @return CategoryInfoType
     */
    public function withCategoryDistributionRule($CategoryDistributionRule)
    {
        $new = clone $this;
        $new->CategoryDistributionRule = $CategoryDistributionRule;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\CategoryParameterType
     */
    public function getParameter()
    {
        return $this->Parameter;
    }

    /**
     * @param \IMS\Security\Type\CategoryParameterType $Parameter
     * @return CategoryInfoType
     */
    public function withParameter($Parameter)
    {
        $new = clone $this;
        $new->Parameter = $Parameter;

        return $new;
    }

    /**
     * @return bool
     */
    public function getParameterIsPct()
    {
        return $this->ParameterIsPct;
    }

    /**
     * @param bool $ParameterIsPct
     * @return CategoryInfoType
     */
    public function withParameterIsPct($ParameterIsPct)
    {
        $new = clone $this;
        $new->ParameterIsPct = $ParameterIsPct;

        return $new;
    }


}

