<?php

namespace IMS\Query\Type;

class PlacementInfoType
{

    /**
     * @var \IMS\Query\Type\BranchInfoType
     */
    private $Branch = null;

    /**
     * @var \IMS\Query\Type\PlacementTextType
     */
    private $ShortPlacementText = null;

    /**
     * @var \IMS\Query\Type\PlacementTextType
     */
    private $LongPlacementText = null;

    /**
     * @return \IMS\Query\Type\BranchInfoType
     */
    public function getBranch()
    {
        return $this->Branch;
    }

    /**
     * @param \IMS\Query\Type\BranchInfoType $Branch
     * @return PlacementInfoType
     */
    public function withBranch($Branch)
    {
        $new = clone $this;
        $new->Branch = $Branch;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PlacementTextType
     */
    public function getShortPlacementText()
    {
        return $this->ShortPlacementText;
    }

    /**
     * @param \IMS\Query\Type\PlacementTextType $ShortPlacementText
     * @return PlacementInfoType
     */
    public function withShortPlacementText($ShortPlacementText)
    {
        $new = clone $this;
        $new->ShortPlacementText = $ShortPlacementText;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\PlacementTextType
     */
    public function getLongPlacementText()
    {
        return $this->LongPlacementText;
    }

    /**
     * @param \IMS\Query\Type\PlacementTextType $LongPlacementText
     * @return PlacementInfoType
     */
    public function withLongPlacementText($LongPlacementText)
    {
        $new = clone $this;
        $new->LongPlacementText = $LongPlacementText;

        return $new;
    }


}

