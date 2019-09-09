<?php

class QuadraticEquation
{
    private $numberA;
    private $numberB;
    private $numberC;

    public function __construct($numberA, $numberB, $numberC)
    {
        $this->numberA = $numberA;
        $this->numberB = $numberB;
        $this->numberC = $numberC;
    }

    /**
     * @return mixed
     */
    public function getNumberA()
    {
        return $this->numberA;
    }

    /**
     * @param mixed $numberA
     */
    public function setNumberA($numberA): void
    {
        $this->numberA = $numberA;
    }

    /**
     * @return mixed
     */
    public function getNumberB()
    {
        return $this->numberB;
    }

    /**
     * @param mixed $numberB
     */
    public function setNumberB($numberB): void
    {
        $this->numberB = $numberB;
    }

    /**
     * @return mixed
     */
    public function getNumberC()
    {
        return $this->numberC;
    }

    /**
     * @param mixed $numberC
     */
    public function setNumberC($numberC): void
    {
        $this->numberC = $numberC;
    }

    public function getDiscriminant()
    {
        return $delta = (pow($this->numberB, 2) - 4 * ($this->numberA * $this->numberC));
    }

    public function getRoot1()
    {
        return "R1 = " . (-$this->numberB + (sqrt(pow($this->numberB, 2)
                    - 4 * ($this->numberA * $this->numberC))) / 2 * $this->numberA);
    }

    public function getRoot2()
    {
        return "R2 = " . (-$this->numberB - (sqrt(pow($this->numberB, 2)
                    - 4 * ($this->numberA * $this->numberC))) / 2 * $this->numberA);
    }

    public function display()
    {
        if ($this->getDiscriminant() > 0) {
            return $this->getRoot1() . " " . $this->getRoot2();
        } else if ($this->getDiscriminant() == 0) {
            return $this->getRoot1();
        } else {
            return "The equation has no roots";
        }

    }

}