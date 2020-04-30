<?php

namespace IMS\Security\Type;

class PlacementInfoType
{

    /**
     * @var \IMS\Security\Type\BranchInfoType
     */
    private $Branch = null;

    /**
     * @var \IMS\Security\Type\PlacementTextType
     */
    private $ShortPlacementText = null;

    /**
     * @var \IMS\Security\Type\PlacementTextType
     */
    private $LongPlacementText = null;

    /**
     * @return \IMS\Security\Type\BranchInfoType
     */
    public function getBranch()
    {
        return $this->Branch;
    }

    /**
     * @param \IMS\Security\Type\BranchInfoType $Branch
     * @return PlacementInfoType
     */
    public function withBranch($Branch)
    {
        $new = clone $this;
        $new->Branch = $Branch;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PlacementTextType
     */
    public function getShortPlacementText()
    {
        return $this->ShortPlacementText;
    }

    /**
     * @param \IMS\Security\Type\PlacementTextType $ShortPlacementText
     * @return PlacementInfoType
     */
    public function withShortPlacementText($ShortPlacementText)
    {
        $new = clone $this;
        $new->ShortPlacementText = $ShortPlacementText;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\PlacementTextType
     */
    public function getLongPlacementText()
    {
        return $this->LongPlacementText;
    }

    /**
     * @param \IMS\Security\Type\PlacementTextType $LongPlacementText
     * @return PlacementInfoType
     */
    public function withLongPlacementText($LongPlacementText)
    {
        $new = clone $this;
        $new->LongPlacementText = $LongPlacementText;

        return $new;
    }


}

