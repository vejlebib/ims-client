<?php

namespace IMS\Query\Type;

class LocationNodeType
{

    /**
     * @var \IMS\Query\Type\LocationType
     */
    private $Location = null;

    /**
     * @var \IMS\Query\Type\LocationNodeType
     */
    private $Children = null;

    /**
     * @return \IMS\Query\Type\LocationType
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param \IMS\Query\Type\LocationType $Location
     * @return LocationNodeType
     */
    public function withLocation($Location)
    {
        $new = clone $this;
        $new->Location = $Location;

        return $new;
    }

    /**
     * @return \IMS\Query\Type\LocationNodeType
     */
    public function getChildren()
    {
        return $this->Children;
    }

    /**
     * @param \IMS\Query\Type\LocationNodeType $Children
     * @return LocationNodeType
     */
    public function withChildren($Children)
    {
        $new = clone $this;
        $new->Children = $Children;

        return $new;
    }


}

