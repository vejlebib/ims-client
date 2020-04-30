<?php

namespace IMS\Query\Type;

class CategoryInfoType
{

    /**
     * @var \IMS\Query\Type\CategoryKeyType
     */
    private $CategoryKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\DescriptionType
     */
    private $Description = null;

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @var \IMS\Query\Type\CategoryDistributionRuleInfoType
     */
    private $CategoryDistributionRule = null;

    /**
     * @var \IMS\Query\Type\CategoryParameterType
     */
    private $Parameter = null;

    /**
     * @var bool
     */
    private $ParameterIsPct = null;

    /**
     * @return \IMS\Query\Type\CategoryKeyType
     */
    public function getCategoryKey()
    {
        return $this->CategoryKey;
    }

    /**
     * @param \IMS\Query\Type\CategoryKeyType $CategoryKey
     * @return CategoryInfoType
     */
    public function withCategoryKey($CategoryKey)
    {
        $new = clone $this;
        $new->CategoryKey = $CategoryKey;

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
     * @return CategoryInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Query\Type\DescriptionType $Description
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
     * @return \IMS\Query\Type\CategoryDistributionRuleInfoType
     */
    public function getCategoryDistributionRule()
    {
        return $this->CategoryDistributionRule;
    }

    /**
     * @param \IMS\Query\Type\CategoryDistributionRuleInfoType
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
     * @return \IMS\Query\Type\CategoryParameterType
     */
    public function getParameter()
    {
        return $this->Parameter;
    }

    /**
     * @param \IMS\Query\Type\CategoryParameterType $Parameter
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

