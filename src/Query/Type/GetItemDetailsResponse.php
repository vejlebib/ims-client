<?php

namespace IMS\Query\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetItemDetailsResponse implements ResultInterface
{

    /**
     * @var \IMS\Query\Type\ExtendedItemInfoType
     */
    private $ItemDetails = null;

    /**
     * @return \IMS\Query\Type\ExtendedItemInfoType
     */
    public function getItemDetails()
    {
        return $this->ItemDetails;
    }

    /**
     * @param \IMS\Query\Type\ExtendedItemInfoType $ItemDetails
     * @return GetItemDetailsResponse
     */
    public function withItemDetails($ItemDetails)
    {
        $new = clone $this;
        $new->ItemDetails = $ItemDetails;

        return $new;
    }


}
