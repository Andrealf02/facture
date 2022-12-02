<?php

class FactureDetail
{
    private $supplyPoint;
    private $energyConsumption;
    private $powerOne;
    private $powerTwo;
    public function __construct(string $supplyPoint, int $energyConsumption, float $powerOne, float $powerTwo)
    {
        $this->supplyPoint = $supplyPoint;
        $this->energyConsumption = $energyConsumption;
        $this->powerOne = $powerOne;
        $this->powerTwo = $powerTwo;
    }

    
}