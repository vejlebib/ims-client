<?php

namespace IMS\Query\Type;

class ExhibitionInfoType
{

    /**
     * @var int
     */
    private $ExhibitionKey = null;

    /**
     * @var \IMS\Query\Type\BranchInfoType
     */
    private $Branch = null;

    /**
     * @var \IMS\Query\Type\ExhibitionGroupingInfoType
     */
    private $ExhibitionGrouping = null;

    /**
     * @var \IMS\Query\Type\ExhibitionNameType
     */
    private $Name = null;

    /**
     * @var \IMS\Query\Type\ExhibitionDescriptionType
     */
    private $Description = null;

    /**
     * @var \DateTime
     */
    private $StartDate = null;

    /**
     * @var \DateTime
     */
    private $EndDate = null;

    /**
     * @var int
     */
    private $MinimumItemCount = null;

    /**
     * @var int
     */
    private $MaximumItemCount = null;

    /**
     * @var int
     */
    private $CopiesMax = null;

    /**
     * @return int
     */
    public function getExhibitionKey()
    {
        return $this->ExhibitionKey;
    }

    /**
     * @param int $ExhibitionKey
     * @return ExhibitionInfoType
     */
    public function withExhibitionKey($ExhibitionKey)
    {
        $new = clone $this;
        $new->ExhibitionKey = $ExhibitionKey;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\BranchInfoType
     */
    public function getBranch()
    {
        return $this->Branch;
    }

    /**
     * @param \IMS\Query\Type\BranchInfoType $Branch
     * @return ExhibitionInfoType
     */
    public function withBranch($Branch)
    {
        $new = clone $this;
        $new->Branch = $Branch;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ExhibitionGroupingInfoType
     */
    public function getExhibitionGrouping()
    {
        return $this->ExhibitionGrouping;
    }

    /**
     * @param \IMS\Query\Type\ExhibitionGroupingInfoType $ExhibitionGrouping
     * @return ExhibitionInfoType
     */
    public function withExhibitionGrouping($ExhibitionGrouping)
    {
        $new = clone $this;
        $new->ExhibitionGrouping = $ExhibitionGrouping;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ExhibitionNameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \IMS\Query\Type\ExhibitionNameType $Name
     * @return ExhibitionInfoType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\ExhibitionDescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param \IMS\Query\Type\ExhibitionDescriptionType $Description
     * @return ExhibitionInfoType
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param \DateTime $StartDate
     * @return ExhibitionInfoType
     */
    public function withStartDate($StartDate)
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param \DateTime $EndDate
     * @return ExhibitionInfoType
     */
    public function withEndDate($EndDate)
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinimumItemCount()
    {
        return $this->MinimumItemCount;
    }

    /**
     * @param int $MinimumItemCount
     * @return ExhibitionInfoType
     */
    public function withMinimumItemCount($MinimumItemCount)
    {
        $new = clone $this;
        $new->MinimumItemCount = $MinimumItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaximumItemCount()
    {
        return $this->MaximumItemCount;
    }

    /**
     * @param int $MaximumItemCount
     * @return ExhibitionInfoType
     */
    public function withMaximumItemCount($MaximumItemCount)
    {
        $new = clone $this;
        $new->MaximumItemCount = $MaximumItemCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getCopiesMax()
    {
        return $this->CopiesMax;
    }

    /**
     * @param int $CopiesMax
     * @return ExhibitionInfoType
     */
    public function withCopiesMax($CopiesMax)
    {
        $new = clone $this;
        $new->CopiesMax = $CopiesMax;

        return $new;
    }


}

