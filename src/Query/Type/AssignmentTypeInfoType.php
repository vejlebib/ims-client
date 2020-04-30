<?php

namespace IMS\Query\Type;

class AssignmentTypeInfoType
{

    /**
     * @var \IMS\Query\Type\AssignmentTypeKeyType
     */
    private $AssignmentTypeKey = null;

    /**
     * @var \IMS\Query\Type\NameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\AssignmentTypeKeyType
     */
    public function getAssignmentTypeKey()
    {
        return $this->AssignmentTypeKey;
    }

    /**
     * @param \IMS\Query\Type\AssignmentTypeKeyType $AssignmentTypeKey
     * @return AssignmentTypeInfoType
     */
    public function withAssignmentTypeKey($AssignmentTypeKey)
    {
        $new = clone $this;
        $new->AssignmentTypeKey = $AssignmentTypeKey;

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
     * @return AssignmentTypeInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

