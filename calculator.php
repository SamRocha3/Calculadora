<?php

class Calculator
{
    private $op_array = ['+','-','/','*'];
    private $operation;
    private $first_number;
    private $second_number;
    private $op_symbol;

    public function __construct(float $numb1, float $numb2,string $op)
    {
        $this->operation     = $numb1.$op.$numb2;
        $this->op_symbol     = $op;
        $this->first_number  = $numb1;
        $this->second_number = $numb2;
    }

    public function calculate()
    {
        $this->getOperation();

        return 3;
    }

    private function getOperation()
    {
        if (in_array($this->op_symbol, $this->op_array) == "") 
        {
            throw new InvalidArgumentException('Operador usado não é válido');            
        }
        return $this;
    }

}
