<?php

namespace IMS\Query\Type;

class IlsSublocationSummaryType
{

    /**
     * @var \IMS\Query\Type\IlsSublocationKeyType
     */
    private $IlsSublocationKey = null;

    /**
     * @var \IMS\Query\Type\IlsSublocationCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Query\Type\IlsSublocationNameType
     */
    private $Name = null;

    /**
     * @return \IMS\Query\Type\IlsSublocationKeyType
     */
    public function getIlsSublocationKey()
    {
        return $this->IlsSublocationKey;
    }

    /**
     * @param \IMS\Query\Type\IlsSublocationKeyType $IlsSublocationKey
     * @return IlsSublocationSummaryType
     */
    public function withIlsSublocationKey($IlsSublocationKey)
    {
        $new = clone $this;
        $new->IlsSublocationKey = $IlsSublocationKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsSublocationCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Query\Type\IlsSublocationCodeType $Code
     * @return IlsSublocationSummaryType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\IlsSublocationNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\IlsSublocationNameType $Name
     * @return IlsSublocationSummaryType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

