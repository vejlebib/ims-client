<?php

namespace IMS\Security\Type;

class CategoryDistributionRuleInfoType
{

    /**
     * @var \IMS\Security\Type\CategoryDistributionRuleKeyType
     */
    private $CategoryDistributionRuleKey = null;

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
     * @var bool
     */
    private $UsesParameter = null;

    /**
     * @return \IMS\Security\Type\CategoryDistributionRuleKeyType
     */
    public function getCategoryDistributionRuleKey()
    {
        return $this->CategoryDistributionRuleKey;
    }

    /**
     * @param \IMS\Security\Type\CategoryDistributionRuleKeyType
     * $CategoryDistributionRuleKey
     * @return CategoryDistributionRuleInfoType
     */
    public function withCategoryDistributionRuleKey($CategoryDistributionRuleKey)
    {
        $new = clone $this;
        $new->CategoryDistributionRuleKey = $CategoryDistributionRuleKey;

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
     * @return CategoryDistributionRuleInfoType
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
     * @return CategoryDistributionRuleInfoType
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
     * @return CategoryDistributionRuleInfoType
     */
    public function withDisabled($Disabled)
    {
        $new = clone $this;
        $new->Disabled = $Disabled;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUsesParameter()
    {
        return $this->UsesParameter;
    }

    /**
     * @param bool $UsesParameter
     * @return CategoryDistributionRuleInfoType
     */
    public function withUsesParameter($UsesParameter)
    {
        $new = clone $this;
        $new->UsesParameter = $UsesParameter;

        return $new;
    }


}

