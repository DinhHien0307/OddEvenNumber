<?php

class EvenOddPrimeNumber
{
    const EVEN = "Even";
    const ODD = "Odd";
    const CONDITION = 2;
    public function determineNumber($number)
    {
        $this->checkValueNumber($number);
        if ($this->isPrimeNumber($number)) {
            return $number;
        }
        if ($this->isEvenNumber($number)) {
            return self::EVEN;
        }
        if ($this->isOddNumber($number)) {
            return self::ODD;
        }
    }

    private function isOddNumber($number)
    {
        //number is not prime do if
        if (!$this->isPrimeNumber($number)) {
            if ($number % self::CONDITION != 0) {
                return true;
            }
        }
    }
    private function isEvenNumber($number)
    {
        if ($number % self::CONDITION == 0) {
            return true;
        }
    }
    private function isPrimeNumber($number)
    {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i < $number ; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    private function checkValueNumber($number)
    {
        if ($number < 0) {
            throw new InvalidArgumentException("should be not negative number");
        }

        if (!is_numeric($number)) {
            throw new InvalidArgumentException("should be a number");
        }
    }

    public function determineNumberInRange($min, $max)
    {
        $result = array();
        $this->checkValueNumber($min);
        $this->checkValueNumber($max);
        $arrayNumbers = range($min, $max);
        foreach ($arrayNumbers as $number) {
            $result[] = $this->determineNumber($number);
        }
        return $result;
    }
}
//debug
// $x = new EvenOddPrimeNumber;
// $x->determineNumberInRange(51,50);
