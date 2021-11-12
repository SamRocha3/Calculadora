<?php
require_once("OpAdd.php");
require_once("OpSubtract.php");
require_once("OpMultiply.php");
require_once("OpShare.php");

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
        switch ($this->op_symbol) {
            case "+";
                $result = (new OpAdd($this->first_number, $this->second_number))->calculate();
                break;
            case "-";
                $result = (new OpSubtracy($this->first_number, $this->second_number))->calculate();
                break;
            case "/";
                $result = (new OpSharey($this->first_number, $this->second_number))->calculate();
                break;
            case "*";
                $result = (new OpMultiply($this->first_number, $this->second_number))->calculate();
                break;
        }
        return $result;
    }

    private function getOperation()
    {
        if (!in_array($this->op_symbol, $this->op_array)) 
        {
            throw new InvalidArgumentException('Operador usado não é válido');            
        }
        return $this;
    }

}
