<?php

namespace IMS\Security\Type;

class RequisitionTypeType
{

    /**
     * @var \IMS\Security\Type\RequisitionTypeCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Security\Type\RequisitionTypeTextType
     */
    private $Text = null;

    /**
     * @return \IMS\Security\Type\RequisitionTypeCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Security\Type\RequisitionTypeCodeType $Code
     * @return RequisitionTypeType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\RequisitionTypeTextType
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param \IMS\Security\Type\RequisitionTypeTextType $Text
     * @return RequisitionTypeType
     */
    public function withText($Text)
    {
        $new = clone $this;
        $new->Text = $Text;

        return $new;
    }


}

