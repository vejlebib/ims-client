<?php

namespace IMS\Query\Type;

class GetBibrecLifecycleSimulationResponse
{

    /**
     * @var string
     */
    private $Result = null;

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param string $Result
     * @return GetBibrecLifecycleSimulationResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }


}

