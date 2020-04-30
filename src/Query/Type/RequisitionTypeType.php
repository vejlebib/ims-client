<?php

namespace IMS\Query\Type;

class RequisitionTypeType
{

    /**
     * @var \IMS\Query\Type\RequisitionTypeCodeType
     */
    private $Code = null;

    /**
     * @var \IMS\Query\Type\RequisitionTypeTextType
     */
    private $Text = null;

    /**
     * @return \IMS\Query\Type\RequisitionTypeCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param \IMS\Query\Type\RequisitionTypeCodeType $Code
     * @return RequisitionTypeType
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\RequisitionTypeTextType
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param \IMS\Query\Type\RequisitionTypeTextType $Text
     * @return RequisitionTypeType
     */
    public function withText($Text)
    {
        $new = clone $this;
        $new->Text = $Text;

        return $new;
    }


}

