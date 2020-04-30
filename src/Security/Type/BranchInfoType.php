<?php

namespace IMS\Security\Type;

class BranchInfoType
{

    /**
     * @var bool
     */
    private $Disabled = null;

    /**
     * @var bool
     */
    private $Excluded = null;

    /**
     * @var bool
     */
    private $DeletedInIls = null;

    /**
     * @return bool
     */
    public function getDisabled()
    {
        return $this->Disabled;
    }

    /**
     * @param bool $Disabled
     * @return BranchInfoType
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
    public function getExcluded()
    {
        return $this->Excluded;
    }

    /**
     * @param bool $Excluded
     * @return BranchInfoType
     */
    public function withExcluded($Excluded)
    {
        $new = clone $this;
        $new->Excluded = $Excluded;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDeletedInIls()
    {
        return $this->DeletedInIls;
    }

    /**
     * @param bool $DeletedInIls
     * @return BranchInfoType
     */
    public function withDeletedInIls($DeletedInIls)
    {
        $new = clone $this;
        $new->DeletedInIls = $DeletedInIls;

        return $new;
    }


}

