<?php

namespace IMS\Security\Type;

class AssignmentTypeInfoType
{

    /**
     * @var \IMS\Security\Type\AssignmentTypeKeyType
     */
    private $AssignmentTypeKey = null;

    /**
     * @var \IMS\Security\Type\NameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\AssignmentTypeKeyType
     */
    public function getAssignmentTypeKey()
    {
        return $this->AssignmentTypeKey;
    }

    /**
     * @param \IMS\Security\Type\AssignmentTypeKeyType $AssignmentTypeKey
     * @return AssignmentTypeInfoType
     */
    public function withAssignmentTypeKey($AssignmentTypeKey)
    {
        $new = clone $this;
        $new->AssignmentTypeKey = $AssignmentTypeKey;

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
     * @return AssignmentTypeInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

