<?php

namespace IMS\Security\Type;

class ClassificationGroupInfoType
{

    /**
     * @var \IMS\Security\Type\ClassificationGroupKeyType
     */
    private $ClassificationGroupKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $CopiesMinParameterName = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $CopiesMaxParameterName = null;

    /**
     * @return \IMS\Security\Type\ClassificationGroupKeyType
     */
    public function getClassificationGroupKey()
    {
        return $this->ClassificationGroupKey;
    }

    /**
     * @param \IMS\Security\Type\ClassificationGroupKeyType $ClassificationGroupKey
     * @return ClassificationGroupInfoType
     */
    public function withClassificationGroupKey($ClassificationGroupKey)
    {
        $new = clone $this;
        $new->ClassificationGroupKey = $ClassificationGroupKey;

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
     * @return ClassificationGroupInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\NameType
     */
    public function getCopiesMinParameterName()
    {
        return $this->CopiesMinParameterName;
    }

    /**
     * @param \IMS\Security\Type\NameType $CopiesMinParameterName
     * @return ClassificationGroupInfoType
     */
    public function withCopiesMinParameterName($CopiesMinParameterName)
    {
        $new = clone $this;
        $new->CopiesMinParameterName = $CopiesMinParameterName;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\NameType
     */
    public function getCopiesMaxParameterName()
    {
        return $this->CopiesMaxParameterName;
    }

    /**
     * @param \IMS\Security\Type\NameType $CopiesMaxParameterName
     * @return ClassificationGroupInfoType
     */
    public function withCopiesMaxParameterName($CopiesMaxParameterName)
    {
        $new = clone $this;
        $new->CopiesMaxParameterName = $CopiesMaxParameterName;

        return $new;
    }


}

