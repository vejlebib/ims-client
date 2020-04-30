<?php

namespace IMS\Security\Type;

class LocationNodeType
{

    /**
     * @var \IMS\Security\Type\LocationType
     */
    private $Location = null;

    /**
     * @var \IMS\Security\Type\LocationNodeType
     */
    private $Children = null;

    /**
     * @return \IMS\Security\Type\LocationType
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param \IMS\Security\Type\LocationType $Location
     * @return LocationNodeType
     */
    public function withLocation($Location)
    {
        $new = clone $this;
        $new->Location = $Location;

        return $new;
    }

    /**
     * @return \IMS\Security\Type\LocationNodeType
     */
    public function getChildren()
    {
        return $this->Children;
    }

    /**
     * @param \IMS\Security\Type\LocationNodeType $Children
     * @return LocationNodeType
     */
    public function withChildren($Children)
    {
        $new = clone $this;
        $new->Children = $Children;

        return $new;
    }


}

