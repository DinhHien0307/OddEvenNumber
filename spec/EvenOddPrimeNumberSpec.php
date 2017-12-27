<?php

namespace spec;

use EvenOddPrimeNumber;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use SebastianBergmann\ObjectReflector\InvalidArgumentException;

class EvenOddPrimeNumberSpec extends ObjectBehavior
{
    const EVEN = "Even";
    const ODD = "Odd";
    public function it_should_return_Odd_when_iput_1()
    {
        $this->determineNumber(1)->shouldBe(self::ODD);
    }

    public function it_should_return_Even_when_iput_2()
    {
        $this->determineNumber(2)->shouldBe(2);
    }

    public function it_should_return_Even_when_iput_4()
    {
        $this->determineNumber(4)->shouldBe(self::EVEN);
    }

    public function it_should_return_Even_when_iput_6()
    {
        $this->determineNumber(6)->shouldBe(self::EVEN);
    }

    public function it_should_return_Odd_when_iput_9()
    {
        $this->determineNumber(9)->shouldBe(self::ODD);
    }

    public function it_should_return_3_when_iput_3()
    {
        $this->determineNumber(3)->shouldBe(3);
    }

    public function it_should_return_5_when_iput_5()
    {
        $this->determineNumber(5)->shouldBe(5);
    }

    public function it_should_be_array_in_range_1_10()
    {
        $this->determineNumberInRange(1, 10)->shouldBe([self::ODD,2,3,self::EVEN,5,self::EVEN,7,self::EVEN,self::ODD,self::EVEN]);
    }

    public function it_should_be_array_in_range_11_20()
    {
        $this->determineNumberInRange(11, 20)->shouldBe([11,self::EVEN,13,self::EVEN,self::ODD,self::EVEN,17,self::EVEN,19,self::EVEN]);
    }

    public function it_should_be_array_in_range_21_30()
    {
        $this->determineNumberInRange(21, 30)->shouldBe([self::ODD,self::EVEN,23,self::EVEN,self::ODD,self::EVEN,self::ODD,self::EVEN,29,self::EVEN]);
    }

    public function it_should_be_array_in_range_31_40()
    {
        $this->determineNumberInRange(31, 40)->shouldBe([31,self::EVEN,self::ODD,self::EVEN,self::ODD,self::EVEN,37,self::EVEN,self::ODD,self::EVEN]);
    }

    public function it_should_be_array_in_range_41_50()
    {
        $this->determineNumberInRange(41, 50)->shouldBe([41,self::EVEN,43,self::EVEN,self::ODD,self::EVEN,47,self::EVEN,self::ODD,self::EVEN]);
    }
   
    public function it_should_be_array_in_range_5_1()
    {
        $this->determineNumberInRange(5, 1)->shouldBe([5,self::EVEN,3,2,self::ODD]);
    }

    public function it_throw_exception()
    {
        $this->shouldThrow(new \InvalidArgumentException("should be not negative number"))->duringDetermineNumber(-1);
    }

    public function it_throw_exception_1()
    {
        $this->shouldThrow(new \InvalidArgumentException("should be a number"))->duringDetermineNumber("A");
    }

    public function it_throw_exception_2()
    {
        $this->shouldThrow(new \InvalidArgumentException("should be not negative number"))->duringDetermineNumberInRange(-1,2);
    }

    public function it_throw_exception_3()
    {
        $this->shouldThrow(new \InvalidArgumentException("should be a number"))->duringDetermineNumberInRange("A","B");
    }
}
