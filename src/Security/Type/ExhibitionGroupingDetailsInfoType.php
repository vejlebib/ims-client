<?php

namespace IMS\Security\Type;

class ExhibitionGroupingDetailsInfoType
{

    /**
     * @var \IMS\Security\Type\ExhibitionGroupingInfoType
     */
    private $ExhibitionGroupingInfo = null;

    /**
     * @var \IMS\Security\Type\ExhibitionGroupingSpecInfoType
     */
    private $ExhibitionGroupingSpecInfo = null;

    /**
     * @var int
     */
    private $ItemsCount = null;

    /**
     * @var int
     */
    private $BibliographicRecordsCount = null;

    /**
     * @return \IMS\Security\Type\ExhibitionGroupingInfoType
     */
    public function getExhibitionGroupingInfo()
    {
        return $this->ExhibitionGroupingInfo;
    }

    /**
     * @param \IMS\Security\Type\ExhibitionGroupingInfoType $ExhibitionGroupingInfo
     * @return ExhibitionGroupingDetailsInfoType
     */
    public function withExhibitionGroupingInfo($ExhibitionGroupingInfo)
    {
        $new = clone $this;
        $new->ExhibitionGroupingInfo = $ExhibitionGroupingInfo;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\ExhibitionGroupingSpecInfoType
     */
    public function getExhibitionGroupingSpecInfo()
    {
        return $this->ExhibitionGroupingSpecInfo;
    }

    /**
     * @param \IMS\Security\Type\ExhibitionGroupingSpecInfoType
     * $ExhibitionGroupingSpecInfo
     * @return ExhibitionGroupingDetailsInfoType
     */
    public function withExhibitionGroupingSpecInfo($ExhibitionGroupingSpecInfo)
    {
        $new = clone $this;
        $new->ExhibitionGroupingSpecInfo = $ExhibitionGroupingSpecInfo;

        return $new;
    }

    /**
     * @return int
     */
    public function getItemsCount()
    {
        return $this->ItemsCount;
    }

    /**
     * @param int $ItemsCount
     * @return ExhibitionGroupingDetailsInfoType
     */
    public function withItemsCount($ItemsCount)
    {
        $new = clone $this;
        $new->ItemsCount = $ItemsCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getBibliographicRecordsCount()
    {
        return $this->BibliographicRecordsCount;
    }

    /**
     * @param int $BibliographicRecordsCount
     * @return ExhibitionGroupingDetailsInfoType
     */
    public function withBibliographicRecordsCount($BibliographicRecordsCount)
    {
        $new = clone $this;
        $new->BibliographicRecordsCount = $BibliographicRecordsCount;

        return $new;
    }


}

