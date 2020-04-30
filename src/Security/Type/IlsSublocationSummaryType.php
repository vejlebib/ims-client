<?php

namespace IMS\Security\Type;

class IlsSublocationSummaryType
{

    /**
     * @var \IMS\Security\Type\IlsSublocationKeyType
     */
    private $IlsSublocationKey = null;

    /**
     * @var \IMS\Security\Type\IlsSublocationCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Security\Type\IlsSublocationNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Security\Type\IlsSublocationKeyType
     */
    public function getIlsSublocationKey()
    {
        return $this->IlsSublocationKey;
    }

    /**
     * @param \IMS\Security\Type\IlsSublocationKeyType $IlsSublocationKey
     * @return IlsSublocationSummaryType
     */
    public function withIlsSublocationKey($IlsSublocationKey)
    {
        $new = clone $this;
        $new->IlsSublocationKey = $IlsSublocationKey;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsSublocationCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Security\Type\IlsSublocationCodeType $Code
     * @return IlsSublocationSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\IlsSublocationNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Security\Type\IlsSublocationNameType $Name
     * @return IlsSublocationSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

