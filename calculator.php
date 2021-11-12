<?php

class Calculator
{
    private $op_array = ['+','-','/','*'];
    private $operation;
    private $first_number;
    private $second_number;
    private $op_symbol;

    public function __construct(float $numb1, float $numb2,string $op){

        $this->operation = $numb1.$op.$numb2;
    }

    public function calculate(){
        
    }

}
