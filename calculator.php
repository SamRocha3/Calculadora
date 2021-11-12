<?php
require_once("OpAdd.php");
require_once("OpSubtract.php");
require_once("OpMultiply.php");
require_once("OpShare.php");

class Calculator
{
    private $op_array = ["OpAdd"=>'+',"OpSubtrac"=>'-',"OpShare"=>'/',"OpMultiply"=>'*'];
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
        $opClass = key($this->op_symbol[$opClass]);
        return new $opClass;
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
