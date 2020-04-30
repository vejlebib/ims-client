<?php

namespace IMS\Query\Type;

class DestinationAndDebugType
{

    /**
     * @var \IMS\Query\Type\BranchKeyType
     */
    private $BranchKey = null;

    /**
     * @var \IMS\Query\Type\DepartmentKeyType
     */
    private $DepartmentKey = null;

    /**
     * @var string
     */
    private $DebugText = null;

    /**
     * @return \IMS\Query\Type\BranchKeyType
     */
    public function getBranchKey()
    {
        return $this->BranchKey;
    }

    /**
     * @param \IMS\Query\Type\BranchKeyType $BranchKey
     * @return DestinationAndDebugType
     */
    public function withBranchKey($BranchKey)
    {
        $new = clone $this;
        $new->BranchKey = $BranchKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\DepartmentKeyType
     */
    public function getDepartmentKey()
    {
        return $this->DepartmentKey;
    }

    /**
     * @param \IMS\Query\Type\DepartmentKeyType $DepartmentKey
     * @return DestinationAndDebugType
     */
    public function withDepartmentKey($DepartmentKey)
    {
        $new = clone $this;
        $new->DepartmentKey = $DepartmentKey;

        return $new;
    }

    /**
     * @return string
     */
    public function getDebugText()
    {
        return $this->DebugText;
    }

    /**
     * @param string $DebugText
     * @return DestinationAndDebugType
     */
    public function withDebugText($DebugText)
    {
        $new = clone $this;
        $new->DebugText = $DebugText;

        return $new;
    }


}

