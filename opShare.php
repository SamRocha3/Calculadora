<?php

class OpShare
{
    private $first_number;
    private $second_number;

    public function __construct(float $numb1, float $numb2)
    {
        $this->first_number  = $numb1;
        $this->second_number = $numb2;
    }
    public function calculate()
    {
        if($b == 0) throw new InvalidArgumentException('Não é possível dividir por 0!');

        return $a / $b;
    }
}
