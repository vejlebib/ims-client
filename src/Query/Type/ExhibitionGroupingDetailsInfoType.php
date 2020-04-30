<?php

namespace IMS\Query\Type;

class ExhibitionGroupingDetailsInfoType
{

    /**
     * @var \IMS\Query\Type\ExhibitionGroupingInfoType
     */
    private $ExhibitionGroupingInfo = null;

    /**
     * @var \IMS\Query\Type\ExhibitionGroupingSpecInfoType
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
     * @return \IMS\Query\Type\ExhibitionGroupingInfoType
     */
    public function getExhibitionGroupingInfo()
    {
        return $this->ExhibitionGroupingInfo;
    }

    /**
     * @param \IMS\Query\Type\ExhibitionGroupingInfoType $ExhibitionGroupingInfo
     * @return ExhibitionGroupingDetailsInfoType
     */
    public function withExhibitionGroupingInfo($ExhibitionGroupingInfo)
    {
        $new = clone $this;
        $new->ExhibitionGroupingInfo = $ExhibitionGroupingInfo;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ExhibitionGroupingSpecInfoType
     */
    public function getExhibitionGroupingSpecInfo()
    {
        return $this->ExhibitionGroupingSpecInfo;
    }

    /**
     * @param \IMS\Query\Type\ExhibitionGroupingSpecInfoType
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

