<?php

class OpAdd
{
    private $first_number;
    private $second_number;

    public function __construct(float $numb1, float $numb2)
    {
        $this->first_number  = $numb1;
        $this->second_number = $numb2;
    }
    public function calculate(float $numb1, float $numb2)
    {
        return $numb1 + $numb2;
    }
}
